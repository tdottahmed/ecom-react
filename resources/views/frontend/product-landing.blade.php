<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $detailedProduct->name }} - Product Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <style>
        /* CSS Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #333333;
            line-height: 1.6;
            background-color: #f8f9fa;
        }

        /* Design System Variables */
        :root {
            --primary: #25b165;
            --secondary: #FF9800;
            --accent: #4CAF50;
            --danger: #E53935;
            --warning: #FFC107;
            --text-dark: #212121;
            --text-light: #ffffff;
            --background-light: #ffffff;
            --background-soft: #FFF5EC;
            --border: #E0E0E0;
        }

        ul,
        li {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Typography Styles */
        h1 {
            font-size: 32px;
            font-weight: 700;
            color: #212121;
            line-height: 1.4;
        }

        h2 {
            font-size: 26px;
            font-weight: 600;
            color: #212121;
        }

        h3 {
            font-size: 22px;
            font-weight: 600;
            color: #212121;
        }

        .small-text {
            font-size: 14px;
            font-weight: 400;
            color: #555555;
        }

        /* Button Styles */
        .btn {
            display: inline-block;
            padding: 12px 20px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: #ffffff;
        }

        .btn-primary:hover {
            background: #1f9a57;
        }

        .btn-secondary {
            background: var(--secondary);
            color: #ffffff;
        }

        .btn-secondary:hover {
            background: #e68900;
        }

        /* Layout Styles */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section {
            padding: 40px 20px;
        }

        .section-hero {
            background: #ffffff;
            padding: 30px 20px;
        }

        .section-checkout {
            background: #E8F5E9;
            padding: 40px 20px;
        }

        /* Product Gallery */
        .product-gallery {
            display: flex;
            gap: 20px;
        }

        .gallery-thumbnails {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 80px;
            border: 1px solid var(--border);
            border-radius: 6px;
            cursor: pointer;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gallery-main {
            flex: 1;
            border: 1px solid var(--border);
            border-radius: 8px;
            overflow: hidden;
            background: white;
        }

        .gallery-main img {
            width: 100%;
            height: 400px;
            object-fit: contain;
        }

        /* Product Info */
        .product-info {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .price-container {
            margin: 20px 0;
        }

        .current-price {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
        }

        .original-price {
            font-size: 20px;
            text-decoration: line-through;
            color: #999;
            margin-left: 10px;
        }

        .discount-badge {
            display: inline-block;
            background: var(--danger);
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 14px;
            margin-left: 10px;
        }

        /* Product Meta */
        .product-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin: 20px 0;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .meta-item i {
            color: var(--primary);
        }

        /* Tabs */
        .tabs {
            margin-top: 40px;
        }

        .tab-headers {
            display: flex;
            border-bottom: 2px solid var(--border);
        }

        .tab-header {
            padding: 15px 25px;
            cursor: pointer;
            font-weight: 600;
            border-bottom: 3px solid transparent;
        }

        .tab-header.active {
            border-bottom: 3px solid var(--primary);
            color: var(--primary);
        }

        .tab-content {
            padding: 25px;
            background: white;
            border-radius: 0 0 8px 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }

        /* Reviews */
        .review-item {
            padding: 20px;
            border-bottom: 1px solid var(--border);
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .reviewer {
            font-weight: 600;
        }

        .review-rating {
            color: var(--secondary);
        }

        /* Checkout Form */
        .checkout-container {
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .checkout-form {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08);
        }

        .order-summary {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08);
            height: fit-content;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .input {
            border: 1px solid #E0E0E0;
            border-radius: 6px;
            padding: 12px;
            font-size: 16px;
            width: 100%;
            transition: all 0.3s ease;
        }

        .input:focus {
            outline: none;
            border-color: #1A73E8;
            box-shadow: 0 0 0 3px rgba(26, 115, 232, 0.2);
        }

        .input-error {
            border-color: var(--danger);
            box-shadow: 0 0 0 3px rgba(229, 57, 53, 0.2);
        }

        textarea.input {
            min-height: 100px;
            resize: vertical;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid var(--border);
        }

        .order-total {
            font-size: 18px;
            font-weight: 700;
            color: var(--text-dark);
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid var(--primary);
        }

        /* Error Messages */
        .error-message {
            color: var(--danger);
            font-size: 14px;
            margin-top: 5px;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .error-message i {
            font-size: 16px;
        }

        .validation-error {
            background-color: rgba(229, 57, 53, 0.1);
            border-left: 4px solid var(--danger);
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .validation-error p {
            margin: 5px 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .checkout-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .product-gallery {
                flex-direction: column-reverse;
            }

            .gallery-thumbnails {
                flex-direction: row;
                overflow-x: auto;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .tab-headers {
                overflow-x: auto;
                white-space: nowrap;
            }
        }

        @media (max-width: 480px) {
            .section {
                padding: 30px 15px;
            }

            .container {
                padding: 0 15px;
            }

            h1 {
                font-size: 24px;
            }

            .btn {
                padding: 10px 16px;
                font-size: 14px;
            }

            .current-price {
                font-size: 24px;
            }

            .gallery-main img {
                height: 300px;
            }
        }

        /* Animation for price */
        .strike-animate {
            position: relative;
            display: inline-block;
            color: var(--danger);
        }

        .strike-animate::after {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            height: 2px;
            width: 0;
            background: currentColor;
            transform: translateY(-50%);
            animation: strike 1s ease-in-out forwards;
        }

        @keyframes strike {
            to {
                width: 100%;
            }
        }

        /* Pulse animation for CTA button */
        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(1);
                box-shadow: 0 6px 14px rgba(37, 177, 101, 0);
            }
            50% {
                transform: scale(1.03);
                box-shadow: 0 10px 28px rgba(37, 177, 101, 0.35);
            }
        }

        .button-pulse {
            animation: pulseGlow 1.1s ease-in-out;
        }

        /* Stock status */
        .in-stock {
            color: var(--primary);
            font-weight: 600;
        }

        .out-of-stock {
            color: var(--danger);
            font-weight: 600;
        }

        /* Quantity selector */
        .quantity-selector {
            display: flex;
            align-items: center;
            margin: 20px 0;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            background: #f1f1f1;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        .quantity-input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--border);
            border-radius: 4px;
            margin: 0 10px;
            font-size: 16px;
        }

        /* Select2 customization */
        .select2-container--default .select2-selection--single {
            height: 46px;
            border: 1px solid #E0E0E0;
            border-radius: 6px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 46px;
            padding-left: 12px;
        }

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 44px;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 1px solid #E0E0E0;
            border-radius: 6px;
            padding: 8px;
        }

        .select2-error .select2-selection {
            border-color: var(--danger) !important;
        }

        /* Direct order button */
        .direct-order-btn {
            margin-top: 20px;
            width: 100%;
            padding: 15px;
            font-size: 18px;
        }

        /* District radio buttons */
        .district-options {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .district-option {
            display: flex;
            align-items: center;
            font-weight: normal;
        }

        .district-option input {
            margin-right: 8px;
        }

        /* Required field indicator */
        .text-danger {
            color: var(--danger);
        }
    </style>
</head>

<body>
<!-- Header Placeholder -->
<!-- Main Content -->
<main>
    <!-- Product Details Section -->
    <section class="section section-hero">
        <div class="container">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <!-- Product Gallery -->
                <div class="product-gallery">
                    <div class="gallery-thumbnails">
                        @if($detailedProduct->photos)
                            @php
                                $photos = explode(',', $detailedProduct->photos);
                            @endphp
                            @foreach($photos as $index => $photo)
                                <div class="thumbnail" data-image="{{ uploaded_asset($photo) }}">
                                    <img src="{{ uploaded_asset($photo) }}" alt="Thumbnail {{ $index + 1 }}">
                                </div>
                            @endforeach
                        @else
                            <div class="thumbnail" data-image="{{ asset('images/placeholder.jpg') }}">
                                <img src="{{ asset('images/placeholder.jpg') }}" alt="No image">
                            </div>
                        @endif
                    </div>
                    <div class="gallery-main">
                        @if($detailedProduct->photos)
                            <img id="main-product-image"
                                 src="{{ uploaded_asset(explode(',', $detailedProduct->photos)[0]) }}"
                                 alt="{{ $detailedProduct->name }}">
                        @else
                            <img id="main-product-image" src="{{ asset('images/placeholder.jpg') }}" alt="No image">
                        @endif
                    </div>
                </div>

                <!-- Product Info -->
                <div class="product-info">
                    <h1>{{ $detailedProduct->name }}</h1>

                    @if($detailedProduct->brand)
                        <div class="small-text" style="margin-top: 10px;">
                            Brand: {{ $detailedProduct->brand->name }}</div>
                    @endif

                    <div class="price-container">
                        <span class="current-price">৳{{ number_format($detailedProduct->unit_price, 2) }}</span>

                        @if($detailedProduct->discount > 0)
                            @php
                                $originalPrice = $detailedProduct->unit_price;
                                if($detailedProduct->discount_type == 'percent') {
                                    $originalPrice = $detailedProduct->unit_price / (1 - ($detailedProduct->discount / 100));
                                } else {
                                    $originalPrice = $detailedProduct->unit_price + $detailedProduct->discount;
                                }
                            @endphp
                            <span class="original-price strike-animate">৳{{ number_format($originalPrice, 2) }}</span>
                            <span class="discount-badge">
                                    @if($detailedProduct->discount_type == 'percent')
                                    {{ $detailedProduct->discount }}% OFF
                                @else
                                    ৳{{ $detailedProduct->discount }} OFF
                                @endif
                                </span>
                        @endif
                    </div>

                    <div class="product-meta">
                        <div class="meta-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Status:
                                    <span
                                        class="{{ $detailedProduct->current_stock > 0 ? 'in-stock' : 'out-of-stock' }}">
                                        {{ $detailedProduct->current_stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                    </span>
                                </span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Total Orders: {{ $detailedProduct->num_of_sale }}</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-star"></i>
                            <span>Rating: {{ $detailedProduct->rating }}/5</span>
                        </div>
                    </div>

                    <div class="quantity-selector">
                        <button class="quantity-btn" id="decrease-qty">-</button>
                        <input type="number" id="product-quantity" class="quantity-input" value="1" min="1"
                               max="{{ $detailedProduct->current_stock }}">
                        <button class="quantity-btn" id="increase-qty">+</button>
                    </div>

                    <button class="btn btn-primary direct-order-btn" id="buy-now-btn">
                        <i class="fas fa-bolt"></i> Order Now
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Tabs Section -->
    <section class="section">
        <div class="container">
            <div class="tabs">
                <div class="tab-headers">
                    <div class="tab-header active" data-tab="description">Description</div>
                    <div class="tab-header" data-tab="specs">Specifications</div>
                    <div class="tab-header" data-tab="reviews">Reviews ({{ $reviews->total() }})</div>
                    <div class="tab-header" data-tab="queries">Q&A ({{ $total_query }})</div>
                </div>

                <div class="tab-content">
                    <!-- Description Tab -->
                    <div class="tab-pane active" id="description">
                        {!! $detailedProduct->description ?? 'No description available' !!}
                    </div>

                    <!-- Specifications Tab -->
                    <div class="tab-pane" id="specs">
                        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 15px;">
                            <div><strong>Category:</strong></div>
                            <div>{{ $detailedProduct->category->name ?? 'N/A' }}</div>

                            <div><strong>Brand:</strong></div>
                            <div>{{ $detailedProduct->brand->name ?? 'N/A' }}</div>

                            <div><strong>Unit:</strong></div>
                            <div>{{ $detailedProduct->unit ?? 'N/A' }}</div>

                            <div><strong>Weight:</strong></div>
                            <div>{{ $detailedProduct->weight }} {{ $detailedProduct->unit }}</div>

                            <div><strong>Minimum Quantity:</strong></div>
                            <div>{{ $detailedProduct->min_qty }}</div>

                            @if($detailedProduct->cash_on_delivery)
                                <div><strong>Cash on Delivery:</strong></div>
                                <div>Available</div>
                            @endif
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane" id="reviews">
                        @if($reviews->count() > 0)
                            @foreach($reviews as $review)
                                <div class="review-item">
                                    <div class="review-header">
                                        <span class="reviewer">{{ $review->user->name ?? 'Anonymous' }}</span>
                                        <span class="review-rating">
                                                @for($i = 1; $i <= 5; $i++)
                                                @if($i <= $review->rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                            </span>
                                    </div>
                                    <p>{{ $review->comment }}</p>
                                    <div class="small-text" style="margin-top: 10px;">
                                        {{ $review->created_at->format('F j, Y') }}
                                    </div>
                                </div>
                            @endforeach

                            @if($reviews->hasPages())
                                <div style="margin-top: 20px; text-align: center;">
                                    @if($reviews->previousPageUrl())
                                        <a href="{{ $reviews->previousPageUrl() }}" class="btn">Previous</a>
                                    @endif

                                    @if($reviews->nextPageUrl())
                                        <a href="{{ $reviews->nextPageUrl() }}" class="btn btn-primary">Next</a>
                                    @endif
                                </div>
                            @endif
                        @else
                            <p>No reviews yet.</p>
                        @endif
                    </div>

                    <!-- Q&A Tab -->
                    <div class="tab-pane" id="queries">
                        @if($product_queries->count() > 0)
                            @foreach($product_queries as $query)
                                <div class="review-item">
                                    <div class="review-header">
                                        <span class="reviewer">{{ $query->user->name ?? 'Anonymous' }}</span>
                                    </div>
                                    <p><strong>Q: </strong>{{ $query->question }}</p>
                                    @if($query->answer)
                                        <p style="margin-top: 10px;"><strong>A: </strong>{{ $query->answer }}</p>
                                    @endif
                                    <div class="small-text" style="margin-top: 10px;">
                                        {{ $query->created_at->format('F j, Y') }}
                                    </div>
                                </div>
                            @endforeach

                            @if($product_queries->hasPages())
                                <div style="margin-top: 20px; text-align: center;">
                                    @if($product_queries->previousPageUrl())
                                        <a href="{{ $product_queries->previousPageUrl() }}" class="btn">Previous</a>
                                    @endif

                                    @if($product_queries->nextPageUrl())
                                        <a href="{{ $product_queries->nextPageUrl() }}" class="btn btn-primary">Next</a>
                                    @endif
                                </div>
                            @endif
                        @else
                            <p>No questions yet.</p>
                        @endif

                        @if(Auth::check())
                            <div style="margin-top: 30px;">
                                <h3>Ask a Question</h3>
                                <form id="question-form" style="margin-top: 15px;">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                                    <div class="form-group">
                                        <textarea name="question" class="input" placeholder="Type your question here"
                                                  required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit Question</button>
                                </form>
                            </div>
                        @else
                            <p style="margin-top: 20px;">Please <a href="/login">login</a> to ask a question.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checkout Section -->
    <section id="checkout" class="section section-checkout">
        <div class="container">
            <h2 style="text-align: center; margin-bottom: 30px;">Complete Your Order</h2>

            <div class="checkout-container">
                <!-- Billing & Shipping Form -->
                <div class="checkout-form">
                    <h3 style="margin-bottom: 30px;">Your Information</h3>

                    <!-- Validation Errors -->
                    @if ($errors->any())
                        <div class="validation-error">
                            <h4 style="margin-bottom: 10px; color: var(--danger);">
                                <i class="fas fa-exclamation-circle"></i> Please fix the following errors:
                            </h4>
                            @foreach ($errors->all() as $error)
                                <p><i class="fas fa-times-circle"></i> {{ $error }}</p>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('guest.checkout') }}" method="post" id="checkoutForm">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                        <input type="hidden" name="quantity" id="form-quantity" value="{{ old('quantity', 1) }}">
                        <input type="hidden" name="country_id" value="{{ $country->id }}">

                        {{-- Name --}}
                        <div class="form-group">
                            <label for="fullName">Your Name <span class="text-danger">*</span></label>
                            <input type="text" id="fullName" name="name"
                                   class="input {{ $errors->has('name') ? 'input-error' : '' }}"
                                   placeholder="Enter your full name" value="{{ old('name') }}" required>
                            @if($errors->has('name'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        {{-- Phone --}}
                        <div class="form-group">
                            <label for="mobileNumber">Mobile Number <span class="text-danger">*</span></label>
                            <input type="tel" id="mobileNumber" name="phone"
                                   class="input {{ $errors->has('phone') ? 'input-error' : '' }}"
                                   placeholder="+8801XXXXXXXXX" value="{{ old('phone') }}" required>
                            @if($errors->has('phone'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" id="email" name="email"
                                   class="input {{ $errors->has('email') ? 'input-error' : '' }}"
                                   placeholder="example@email.com" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        {{-- Address --}}
                        <div class="form-group">
                            <label for="address">Full Address <span class="text-danger">*</span></label>
                            <textarea id="address" name="address"
                                      class="input {{ $errors->has('address') ? 'input-error' : '' }}"
                                      rows="3" placeholder="Enter your complete address"
                                      required>{{ old('address') }}</textarea>
                            @if($errors->has('address'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('address') }}
                                </div>
                            @endif
                        </div>

                        {{-- State --}}
                        <div class="form-group">
                            <label for="state_id">Select State <span class="text-danger">*</span></label>
                            <select id="state_id" name="state_id"
                                    class="input state-select {{ $errors->has('state_id') ? 'select2-error' : '' }}"
                                    required>
                                <option value="">-- Select State --</option>
                                @if(old('state_id'))
                                    <option value="{{ old('state_id') }}" selected>{{ old('state_id') }}</option>
                                @endif
                            </select>
                            @if($errors->has('state_id'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('state_id') }}
                                </div>
                            @endif
                        </div>

                        {{-- City --}}
                        <div class="form-group">
                            <label for="city_id">Select City <span class="text-danger">*</span></label>
                            <select id="city_id" name="city_id"
                                    class="input city-select {{ $errors->has('city_id') ? 'select2-error' : '' }}"
                                    required>
                                <option value="">-- Select City --</option>
                                @if(old('city_id'))
                                    <option value="{{ old('city_id') }}" selected>{{ old('city_id') }}</option>
                                @endif
                            </select>
                            @if($errors->has('city_id'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('city_id') }}
                                </div>
                            @endif
                        </div>

                        {{-- District --}}
                        <div class="form-group">
                            <label>District <span class="text-danger">*</span></label>
                            <div class="district-options">
                                <label class="district-option">
                                    <input type="radio" name="district" value="inside-dhaka"
                                           {{ old('district') == 'inside-dhaka' ? 'checked' : '' }} required>
                                    Inside Dhaka
                                </label>
                                <label class="district-option">
                                    <input type="radio" name="district" value="outside-dhaka"
                                           {{ old('district') == 'outside-dhaka' ? 'checked' : '' }} required>
                                    Outside Dhaka
                                </label>
                            </div>
                            @if($errors->has('district'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('district') }}
                                </div>
                            @endif
                        </div>

                        {{-- Payment --}}
                        <div class="form-group">
                            <label for="payment_method">Payment Method <span class="text-danger">*</span></label>
                            <select id="payment_method" name="payment_method"
                                    class="input {{ $errors->has('payment_method') ? 'input-error' : '' }}" required>
                                <option value="">-- Select Payment Method --</option>
                                <option
                                    value="cash_on_delivery" {{ old('payment_method') == 'cash_on_delivery' ? 'selected' : '' }}>
                                    Cash on Delivery
                                </option>
                                <option value="bkash" {{ old('payment_method') == 'bkash' ? 'selected' : '' }}>bKash
                                </option>
                                <option value="nagad" {{ old('payment_method') == 'nagad' ? 'selected' : '' }}>Nagad
                                </option>
                                <option value="card" {{ old('payment_method') == 'card' ? 'selected' : '' }}>
                                    Credit/Debit Card
                                </option>
                            </select>
                            @if($errors->has('payment_method'))
                                <div class="error-message">
                                    <i class="fas fa-exclamation-circle"></i> {{ $errors->first('payment_method') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit" id="checkoutSubmitBtn" class="btn btn-primary"
                                style="width: 100%; margin-top: 20px;">
                            Confirm Order
                        </button>
                    </form>
                </div>

                <!-- Order Summary -->
                <div class="order-summary">
                    <h3 style="margin-bottom: 20px;">Order Summary</h3>

                    <div class="order-item">
                        <span>{{ $detailedProduct->name }}</span>
                        <span>৳{{ number_format($detailedProduct->unit_price, 2) }}</span>
                    </div>

                    <div class="order-item">
                        <span>Quantity</span>
                        <span id="summary-quantity">{{ old('quantity', 1) }}</span>
                    </div>

                    <div class="order-item">
                        <span>Shipping</span>
                        <span id="shipping-cost">৳60.00</span>
                    </div>

                    @if($detailedProduct->discount > 0)
                        <div class="order-item">
                            <span>Discount</span>
                            <span>
                                @if($detailedProduct->discount_type == 'percent')
                                    {{ $detailedProduct->discount }}%
                                @else
                                    ৳{{ number_format($detailedProduct->discount, 2) }}
                                @endif
                            </span>
                        </div>
                    @endif

                    <div class="order-item">
                        <span>Tax</span>
                        <span>
                                @if($detailedProduct->tax)
                                ৳{{ number_format($detailedProduct->tax, 2) }}
                            @else
                                ৳0.00
                            @endif
                            </span>
                    </div>

                    <div class="order-total">
                        <span>Total</span>
                        <span id="total-price">৳{{ number_format($detailedProduct->unit_price + 60, 2) }}</span>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<script>
    $(document).ready(function () {
        // Initialize select2 for state and city dropdowns
        $('.state-select').select2({
            placeholder: "Select State",
            allowClear: true
        });

        $('.city-select').select2({
            placeholder: "Select City",
            allowClear: true
        });

        // Tab functionality
        $('.tab-header').click(function () {
            $('.tab-header').removeClass('active');
            $(this).addClass('active');

            const tabId = $(this).data('tab');
            $('.tab-pane').removeClass('active');
            $(`#${tabId}`).addClass('active');
        });

        // Product gallery thumbnail click
        $('.thumbnail').click(function () {
            const imageUrl = $(this).data('image');
            $('#main-product-image').attr('src', imageUrl);
        });

        // Quantity adjustment
        $('#increase-qty').click(function () {
            const currentVal = parseInt($('#product-quantity').val());
            const maxStock = parseInt($('#product-quantity').attr('max'));
            if (currentVal < maxStock) {
                $('#product-quantity').val(currentVal + 1);
                updateOrderSummary();
            }
        });

        $('#decrease-qty').click(function () {
            const currentVal = parseInt($('#product-quantity').val());
            if (currentVal > 1) {
                $('#product-quantity').val(currentVal - 1);
                updateOrderSummary();
            }
        });

        $('#product-quantity').change(function () {
            let currentVal = parseInt($(this).val());
            const maxStock = parseInt($(this).attr('max'));
            const minQty = parseInt($(this).attr('min'));

            if (isNaN(currentVal) || currentVal < minQty) {
                currentVal = minQty;
            } else if (currentVal > maxStock) {
                currentVal = maxStock;
            }

            $(this).val(currentVal);
            updateOrderSummary();
        });

        // Update order summary based on quantity
        function updateOrderSummary() {
            const quantity = parseInt($('#product-quantity').val());
            $('#form-quantity').val(quantity);
            $('#summary-quantity').text(quantity);

            // Calculate prices
            const unitPrice = {{ $detailedProduct->unit_price }};
            const discount = {{ $detailedProduct->discount }};
            const discountType = '{{ $detailedProduct->discount_type }}';
            const tax = {{ $detailedProduct->tax ?? 0 }};

            let discountedPrice = unitPrice;

            if (discount > 0) {
                if (discountType === 'percent') {
                    discountedPrice = unitPrice - (unitPrice * discount / 100);
                } else {
                    discountedPrice = unitPrice - discount;
                }
            }

            const subtotal = discountedPrice * quantity;
            const shipping = parseInt($('#shipping-cost').text().replace('৳', '').replace(',', ''));
            const total = subtotal + shipping + tax;

            // Update the order summary
            $('.order-item:first span:last').text('৳' + subtotal.toFixed(2));
            $('#total-price').text('৳' + total.toFixed(2));
        }

        // District selection affects shipping cost
        $('input[name="district"]').change(function () {
            const district = $(this).val();
            let shippingCost = 60;

            if (district === 'outside-dhaka') {
                shippingCost = 120;
            }

            $('#shipping-cost').text('৳' + shippingCost.toFixed(2));
            updateOrderSummary();
        });

        // Form submission
        $('#checkoutForm').submit(function (e) {
            let valid = true;
            let message = "";

            // Name validation
            const nameValue = $('#fullName').val().trim();
            if (nameValue.length < 3 || !/^[a-zA-Z\s]+$/.test(nameValue)) {
                message = "Please enter a valid full name (only letters, at least 3 characters).";
                $('#fullName').focus();
                valid = false;
            }

            // Phone validation (Bangladesh format)
            const phoneValue = $('#mobileNumber').val().trim();
            const phonePattern = /^(?:\+8801|01)[3-9]\d{8}$/;
            if (valid && !phonePattern.test(phoneValue)) {
                message = "Please enter a valid Bangladeshi mobile number (e.g. +8801XXXXXXXXX or 01XXXXXXXXX).";
                $('#mobileNumber').focus();
                valid = false;
            }

            // Email validation
            const emailValue = $('#email').val().trim();
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (valid && (!emailValue || !emailPattern.test(emailValue))) {
                message = "Please enter a valid email address.";
                $('#email').focus();
                valid = false;
            }

            // Address validation
            const addressValue = $('#address').val().trim();
            if (valid && addressValue.length < 10) {
                message = "Please enter a complete address (at least 10 characters).";
                $('#address').focus();
                valid = false;
            }

            // State validation
            if (valid && !$('#state_id').val()) {
                message = "Please select your state.";
                $('#state_id').focus();
                valid = false;
            }

            // City validation
            if (valid && !$('#city_id').val()) {
                message = "Please select your city.";
                $('#city_id').focus();
                valid = false;
            }

            // District validation
            if (valid && !$("input[name='district']:checked").val()) {
                message = "Please select your district (Inside/Outside Dhaka).";
                valid = false;
            }

            // Payment validation
            if (valid && !$('#payment_method').val()) {
                message = "Please select your payment method.";
                $('#payment_method').focus();
                valid = false;
            }

            if (!valid) {
                // Create a temporary error display
                const errorHtml = `
                    <div class="validation-error">
                        <h4 style="margin-bottom: 10px; color: var(--danger);">
                            <i class="fas fa-exclamation-circle"></i> Please fix the following error:
                        </h4>
                        <p><i class="fas fa-times-circle"></i> ${message}</p>
                    </div>
                `;

                // Remove any existing temporary errors
                $('.validation-error.temporary').remove();

                // Add the error message at the top of the form
                $(errorHtml).addClass('temporary').insertBefore('#checkoutForm .form-group:first');

                // Scroll to the error message
                $('html, body').animate({
                    scrollTop: $('.validation-error.temporary').offset().top - 100
                }, 500);

                return false;
            }

            // Submit form if all validation passes
            return true;
        });

        $('#question-form').submit(function (e) {
            e.preventDefault();
            alert('Question submitted! This is a demo.');
        });

        // Buy now button
        $('#buy-now-btn').click(function () {
            $('#checkout').get(0).scrollIntoView({behavior: 'smooth'});
        });

        // Button pulse glow animation every 5 seconds
        function addButtonZoom() {
            $('#checkoutSubmitBtn').addClass('button-pulse');
            setTimeout(() => {
                $('#checkoutSubmitBtn').removeClass('button-pulse');
            }, 1100);
        }

        // Start button zoom animation every 5 seconds
        setInterval(addButtonZoom, 5000);

        // Load States on page load (since country is fixed)
        let countryId = $("input[name='country_id']").val();
        if (countryId) {
            $.post("{{ route('get-state') }}", {
                _token: '{{ csrf_token() }}',
                country_id: countryId
            }, function (data) {
                $('#state_id').html(JSON.parse(data));
                $('#state_id').trigger('change.select2');

                // Select previously selected state if exists
                @if(old('state_id'))
                $('#state_id').val('{{ old('state_id') }}').trigger('change');
                @endif
            });
        }

        // When state is selected, load cities
        $('#state_id').on('change', function () {
            let stateId = $(this).val();

            if (stateId) {
                $.post("{{ route('get-city') }}", {
                    _token: '{{ csrf_token() }}',
                    state_id: stateId
                }, function (data) {
                    $('#city_id').html(JSON.parse(data));
                    $('#city_id').trigger('change.select2');

                    // Select previously selected city if exists
                    @if(old('city_id'))
                    $('#city_id').val('{{ old('city_id') }}').trigger('change');
                    @endif
                });
            } else {
                $('#city_id').html('<option value="">Select City</option>');
                $('#city_id').trigger('change.select2');
            }
        });

        // Initialize with old values if they exist
        @if(old('state_id'))
        // State will be handled in the AJAX callback
        @endif

        @if(old('city_id'))
        // City will be handled in the AJAX callback
        @endif
    });
</script>
</body>

</html>
