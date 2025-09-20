@extends('frontend.layouts.app')

@section('content')
    <section class="pt-3 pb-4">
        <div class="container">
            <h1 class="mb-3">{{ $page->getTranslation('title', app()->getLocale()) }}</h1>

            <article class="mb-4">
                {!! $page->getTranslation('content', app()->getLocale()) !!}
            </article>

            @if($page->products->count())
                <h3 class="mb-3">{{ translate('Featured Products') }}</h3>
                <div class="row">
                    @foreach($page->products as $product)
                        <div class="col-6 col-md-3 mb-3">
                            <a href="{{ route('product', $product->slug) }}" class="text-reset d-block">
                                <img src="{{ uploaded_asset($product->thumbnail_img) }}"
                                     class="img-fit lazyload mx-auto" alt="{{ $product->name }}">
                                <div class="mt-2">{{ $product->name }}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
