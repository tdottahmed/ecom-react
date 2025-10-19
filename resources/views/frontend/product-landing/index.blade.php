<!DOCTYPE html>
@php
  $rtl = get_session_language()->rtl;
@endphp

@if ($rtl == 1)
  <html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif

<head>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="app-url" content="{{ getBaseURL() }}">
  <meta name="file-base-url" content="{{ getFileBaseURL() }}">

  <title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
  <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">

  @yield('meta')

  @if (!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
    @php
      $meta_image = uploaded_asset(get_setting('meta_image'));
    @endphp
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ get_setting('meta_title') }}">
    <meta itemprop="description" content="{{ get_setting('meta_description') }}">
    <meta itemprop="image" content="{{ $meta_image }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
    <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
    <meta name="twitter:creator"
          content="@author_handle">
    <meta name="twitter:image" content="{{ $meta_image }}">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{ get_setting('meta_title') }}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="{{ route('home') }}"/>
    <meta property="og:image" content="{{ $meta_image }}"/>
    <meta property="og:description" content="{{ get_setting('meta_description') }}"/>
    <meta property="og:site_name" content="{{ env('APP_NAME') }}"/>
    <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}"> @endif
  <!-- Favicon -->
  @php
    $site_icon = uploaded_asset(get_setting('site_icon'));
  @endphp
  <link rel="icon"
          href="{{ $site_icon }}">
    <link rel="apple-touch-icon" href="{{ $site_icon }}">
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

<body class="bg-gray-50 font-['Hind_Siliguri'] text-gray-800">

  <!-- ====== Branding Header ====== -->
  <section class="bg-indigo-50 py-12">
    <div class="container mx-auto px-4 text-center">
      <!-- Logo -->
      <a href="{{ route('home') }}" class="mb-6">
        <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}" alt="{{ get_setting('site_name') }}"
             class="mx-auto h-32 object-contain">
      </a>
      <!-- Page Title -->
      <h1 class="mb-4 text-3xl font-bold text-indigo-700 md:text-5xl">
        {{ $page->title ?? $detailedProduct->name }}
      </h1>
      <!-- Optional Description -->
      <p class="mx-auto max-w-3xl text-lg leading-relaxed text-gray-600">
        {!! $page->description ?? $detailedProduct->description !!}
      </p>
    </div>
  </section>
  <!-- ====== Main Content ====== -->
  <main class="container mx-auto px-4 py-10">
    @include('frontend.product-landing.product-info-box')
    @include('frontend.product-landing.checkout')
  </main>

  <!-- ====== Footer ====== -->
  <footer class="bg-gray-900 py-10 text-gray-300">
    <div class="container mx-auto px-4 text-center">
      <a href="{{ route('home') }}" class="mb-6">
        <img src="{{ uploaded_asset(get_setting('system_logo_black')) }}" alt="{{ get_setting('site_name') }}"
             class="mx-auto h-32 object-contain">
      </a>
      <p class="mx-auto max-w-xl leading-relaxed text-gray-400">
        {{ get_setting('site_name') }} provides high-quality products with fast delivery and excellent customer
        service. Shop with confidence.
      </p>
      <p class="mt-4 text-sm text-gray-500">
        &copy; {{ date('Y') }} {{ get_setting('site_name') }}. All rights reserved.
      </p>
    </div>
  </footer>

  @stack('scripts')
  @include('frontend.product-landing.scripts')
</body>

</html>
