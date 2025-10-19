<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CustomPage;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\ProductQuery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class CustomPageController extends Controller
{
    public function index()
    {
        $pages = CustomPage::latest()->paginate(15);

        return view('backend.custom-landing-page.index', compact('pages'));
    }

    public function create()
    {
        $products = Product::select('id', 'name', 'slug')->latest()->limit(200)->get();

        return view('backend.custom-landing-page.create', [
            'products' => $products,
            'lang' => app()->getLocale(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'url' => ['required', 'string', 'max:190', 'unique:custom_pages,url'],
            'slug' => ['required', 'string', 'max:190', 'unique:custom_pages,slug'], // ← add slug
            'product_id' => ['required', 'integer', 'exists:products,id'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $product = Product::findOrFail($request->input('product_id'));

        $page = new CustomPage();
        $page->title = $request->input('title');
        $page->description = $request->input('content'); // ← Keep this
        $page->url = route('home') . '/landing/' . $request->input('url'); // Add prefix
        $page->slug = $request->input('slug'); // ← assign slug
        $page->product_id = $product->id;
        $page->is_active = $request->boolean('is_active', true);

        $this->generateMetaFields($page, $product);

        $page->save();

        return redirect()->route('custom-landing-pages.index')
            ->with('success', translate('Custom landing page created successfully'));
    }


    public function edit(Request $request, $id)
    {
        $page = CustomPage::where('id', $id)->orWhere('slug', $id)->firstOrFail();
        $products = Product::select('id', 'name', 'slug')->latest()->limit(200)->get();
        $selectedProducts = $page->product->pluck('products.id')->all();

        return view('backend.custom-landing-page.edit', compact('page', 'products', 'selectedProducts'));
    }

    public function update(Request $request, $id)
    {
        $page = CustomPage::findOrFail($id);
        $product = Product::findOrFail($page->product_id);

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'], // ← Keep this
            'slug' => ['required', 'string', 'max:190'],
            'product_id' => ['required'],
            'is_active' => ['nullable'],
        ]);


        // Basic fields
        $page->title = $request->input('title');
        $page->description = $request->input('content');
        $page->url = route('home') . '/landing/' . $request->input('slug'); // Add prefix like store method
        $page->slug = $request->input('slug'); // Always update slug (remove conditional)
        $page->product_id = $request->input('product_id');
        $page->is_active = $request->boolean('is_active', $page->is_active);

        $this->generateMetaFields($page, $product);
        $page->save();

        return redirect()->route('custom-landing-pages.index')->with('success', 'Custom page updated successfully');
    }

    public function destroy($id)
    {
        $page = CustomPage::findOrFail($id);
        if ($page->product) {
            $page->product->delete();
        }
        $page->delete();

        return redirect()->route('custom-landing-pages.index')->with('success', translate('Custom page deleted successfully'));
    }

    public function show($id)
    {
        $page = CustomPage::with([
            'products' => function ($q) {
                $q->select('products.id', 'name', 'slug', 'thumbnail_img');
            }
        ])->findOrFail($id);

        abort_unless($page->is_active, 404);

        return view('frontend.custom-page.show', compact('page'));
    }


    protected function generateMetaFields(CustomPage $page, Product $product): void
    {
        $page->meta_title = $product->name . ' | ' . config('app.name');
        $page->meta_description = \Illuminate\Support\Str::limit(strip_tags($product->description), 160);
        $page->meta_image = $product->image ?? null;
    }

    public function frontendShow($slug)
    {
        $country = Country::where('name', 'Bangladesh')->first();
        if (!Auth::check()) {
            session(['link' => url()->current()]);
        }
        $page = CustomPage::where('slug', $slug)->first();

        $detailedProduct = Product::with('reviews', 'brand', 'stocks', 'user', 'user.shop')->find($page->product_id);

        if ($detailedProduct != null && $detailedProduct->published) {
            $product_queries = ProductQuery::where('product_id', $detailedProduct->id)->where(
                'customer_id',
                '!=',
                Auth::id()
            )->latest('id')->paginate(3);
            $total_query = ProductQuery::where('product_id', $detailedProduct->id)->count();
            $reviews = $detailedProduct->reviews()->where('status', 1)->orderBy('created_at', 'desc')->paginate(3);

            // Pagination using Ajax
            if (request()->ajax()) {
                if ($request->type == 'query') {
                    return Response::json(View::make(
                        'frontend.partials.product_query_pagination',
                        array('product_queries' => $product_queries)
                    )->render());
                }
                if ($request->type == 'review') {
                    return Response::json(View::make(
                        'frontend.product_details.reviews',
                        array('reviews' => $reviews)
                    )->render());
                }
            }

            // review status
            $review_status = 0;
            if (Auth::check()) {
                $OrderDetail = OrderDetail::with([
                    'order' => function ($q) {
                        $q->where('user_id', Auth::id());
                    }
                ])->where('product_id', $detailedProduct->id)->where('delivery_status', 'delivered')->first();
                $review_status = $OrderDetail ? 1 : 0;
            }
            if (get_setting('last_viewed_product_activation') == 1 && Auth::check() && auth()->user()->user_type == 'customer') {
                lastViewedProducts($detailedProduct->id, auth()->user()->id);
            }

            return view(
                'frontend.product-landing.index',
                compact(
                    'detailedProduct',
                    'product_queries',
                    'total_query',
                    'reviews',
                    'review_status',
                    'country',
                    'page'
                )
            );
        }
        abort(404);
    }
}
