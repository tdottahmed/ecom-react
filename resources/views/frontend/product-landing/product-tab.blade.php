<section class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Tab Headers -->
        <div class="flex flex-wrap justify-center gap-3 mb-6 border-b border-gray-200">
            <button data-tab="description"
                    class="tab-header px-4 py-2 font-medium text-gray-700 border-b-2 border-indigo-600 focus:outline-none">
                Description
            </button>
            <button data-tab="specs"
                    class="tab-header px-4 py-2 font-medium text-gray-700 border-b-2 border-transparent hover:border-indigo-500 focus:outline-none">
                Specifications
            </button>
            <button data-tab="reviews"
                    class="tab-header px-4 py-2 font-medium text-gray-700 border-b-2 border-transparent hover:border-indigo-500 focus:outline-none">
                Reviews ({{ $reviews->total() }})
            </button>
            <button data-tab="queries"
                    class="tab-header px-4 py-2 font-medium text-gray-700 border-b-2 border-transparent hover:border-indigo-500 focus:outline-none">
                Q&A ({{ $total_query }})
            </button>
        </div>

        <!-- Tab Contents -->
        <div class="tab-content space-y-6">
            <!-- Description Tab -->
            <div class="tab-pane" id="description">
                <div class="prose max-w-none">
                    {!! $detailedProduct->description ?? 'No description available' !!}
                </div>
            </div>

            <!-- Specifications Tab -->
            <div class="tab-pane hidden" id="specs">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-700">
                    <div class="font-semibold">Category:</div>
                    <div>{{ $detailedProduct->category->name ?? 'N/A' }}</div>

                    <div class="font-semibold">Brand:</div>
                    <div>{{ $detailedProduct->brand->name ?? 'N/A' }}</div>

                    <div class="font-semibold">Unit:</div>
                    <div>{{ $detailedProduct->unit ?? 'N/A' }}</div>

                    <div class="font-semibold">Weight:</div>
                    <div>{{ $detailedProduct->weight }} {{ $detailedProduct->unit }}</div>

                    <div class="font-semibold">Minimum Quantity:</div>
                    <div>{{ $detailedProduct->min_qty }}</div>

                    @if($detailedProduct->cash_on_delivery)
                        <div class="font-semibold">Cash on Delivery:</div>
                        <div>Available</div>
                    @endif
                </div>
            </div>

            <!-- Reviews Tab -->
            <div class="tab-pane hidden" id="reviews">
                @if($reviews->count() > 0)
                    <div class="space-y-4">
                        @foreach($reviews as $review)
                            <div class="p-4 bg-white rounded-lg shadow">
                                <div class="flex justify-between items-center mb-2">
                                    <span class="font-semibold">{{ $review->user->name ?? 'Anonymous' }}</span>
                                    <span class="text-yellow-400">
                                        @for($i = 1; $i <= 5; $i++)
                                            @if($i <= $review->rating)
                                                <i class="fas fa-star"></i>
                                            @else
                                                <i class="far fa-star"></i>
                                            @endif
                                        @endfor
                                    </span>
                                </div>
                                <p class="text-gray-700">{{ $review->comment }}</p>
                                <div
                                    class="text-xs text-gray-400 mt-2">{{ $review->created_at->format('F j, Y') }}</div>
                            </div>
                        @endforeach
                    </div>

                    @if($reviews->hasPages())
                        <div class="flex justify-center gap-2 mt-4">
                            @if($reviews->previousPageUrl())
                                <a href="{{ $reviews->previousPageUrl() }}"
                                   class="px-3 py-1 border rounded hover:bg-indigo-50">Previous</a>
                            @endif
                            @if($reviews->nextPageUrl())
                                <a href="{{ $reviews->nextPageUrl() }}"
                                   class="px-3 py-1 border rounded bg-indigo-600 text-white hover:bg-indigo-700">Next</a>
                            @endif
                        </div>
                    @endif
                @else
                    <p class="text-gray-500">No reviews yet.</p>
                @endif
            </div>

            <!-- Q&A Tab -->
            <div class="tab-pane hidden" id="queries">
                @if($product_queries->count() > 0)
                    <div class="space-y-4">
                        @foreach($product_queries as $query)
                            <div class="p-4 bg-white rounded-lg shadow">
                                <span class="font-semibold">{{ $query->user->name ?? 'Anonymous' }}</span>
                                <p class="mt-1"><strong>Q:</strong> {{ $query->question }}</p>
                                @if($query->answer)
                                    <p class="mt-1 text-indigo-600"><strong>A:</strong> {{ $query->answer }}</p>
                                @endif
                                <div class="text-xs text-gray-400 mt-2">{{ $query->created_at->format('F j, Y') }}</div>
                            </div>
                        @endforeach
                    </div>

                    @if($product_queries->hasPages())
                        <div class="flex justify-center gap-2 mt-4">
                            @if($product_queries->previousPageUrl())
                                <a href="{{ $product_queries->previousPageUrl() }}"
                                   class="px-3 py-1 border rounded hover:bg-indigo-50">Previous</a>
                            @endif
                            @if($product_queries->nextPageUrl())
                                <a href="{{ $product_queries->nextPageUrl() }}"
                                   class="px-3 py-1 border rounded bg-indigo-600 text-white hover:bg-indigo-700">Next</a>
                            @endif
                        </div>
                    @endif
                @else
                    <p class="text-gray-500">No questions yet.</p>
                @endif

                @if(Auth::check())
                    <div class="mt-6">
                        <h3 class="font-semibold text-lg mb-2">Ask a Question</h3>
                        <form id="question-form" class="space-y-3">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                            <textarea name="question"
                                      class="w-full border rounded p-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
                                      placeholder="Type your question here" required></textarea>
                            <button type="submit"
                                    class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Submit
                                Question
                            </button>
                        </form>
                    </div>
                @else
                    <p class="text-gray-500 mt-4">Please <a href="/login" class="text-indigo-600 underline">login</a> to
                        ask a question.</p>
                @endif
            </div>
        </div>
    </div>
</section>

<script>
    // Simple Tabs Script
    const tabHeaders = document.querySelectorAll('.tab-header');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabHeaders.forEach(header => {
        header.addEventListener('click', () => {
            tabHeaders.forEach(h => h.classList.remove('border-indigo-600', 'active'));
            tabPanes.forEach(p => p.classList.add('hidden'));

            header.classList.add('border-indigo-600', 'active');
            document.getElementById(header.dataset.tab).classList.remove('hidden');
        });
    });

    // Activate first tab by default
    tabHeaders[0].click();
</script>
