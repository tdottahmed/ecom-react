<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $detailedProduct->name }} - Product Details</title>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome (if needed for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <!-- Page Specific Styles -->
    @stack('styles')
</head>
<body class="font-['Hind_Siliguri'] bg-gray-50 text-gray-800">

<!-- ====== Branding Header ====== -->
<section class="bg-indigo-50 py-12">
    <div class="container mx-auto px-4 text-center">
        <!-- Logo -->
        <a href="{{route('home')}}" class="mb-6">
            <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}"
                 alt="{{ get_setting('site_name') }}"
                 class="h-32 mx-auto object-contain">
        </a>

        <!-- Page Title -->
        <h1 class="text-3xl md:text-5xl font-bold text-indigo-700 mb-4">
            {{ $page->title ?? $detailedProduct->name }}
        </h1>

        <!-- Optional Description -->
        @if(!empty($page->description) || !empty($detailedProduct->description))
            <p class="text-gray-600 max-w-3xl mx-auto text-lg leading-relaxed">
                {!! $page->description ?? $detailedProduct->description !!}
            </p>
        @endif
    </div>
</section>


<!-- ====== Main Content ====== -->
<main class="container mx-auto px-4 py-10">
    @include('frontend.product-landing.product-details')
    @include('frontend.product-landing.product-tab')
    @include('frontend.product-landing.checkout')
</main>

<!-- ====== Footer ====== -->
<footer class="bg-gray-900 text-gray-300 py-10">
    <div class="container mx-auto px-4 text-center">
        <a href="{{route('home')}}" class="mb-6">
            <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}"
                 alt="{{ get_setting('site_name') }}"
                 class="h-32 mx-auto object-contain">
        </a>
        <p class="text-gray-400 max-w-xl mx-auto leading-relaxed">
            {{ get_setting('site_name') }} provides high-quality products with fast delivery and excellent customer
            service. Shop with confidence.
        </p>
        <p class="text-sm text-gray-500 mt-4">
            &copy; {{ date('Y') }} {{ get_setting('site_name') }}. All rights reserved.
        </p>
    </div>
</footer>

@stack('scripts')
@include('frontend.product-landing.scripts')
</body>
</html>
