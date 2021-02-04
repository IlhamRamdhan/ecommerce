<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="corporate, creative, general, portfolio, photography, blog, e-commerce, shop, product, gallery, retina, responsive">
    <meta name="author" content="Towhidul-Islam">
	<!-- Favicon icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>IR Surfers Marketplace</title>
  @include('layouts._asset_header')
</head>
<body>
@include('layouts.header')
	<!-- MAIN START -->
	<main class="main">


 
@yield('content')

</main>
	<!-- MAIN END -->
@include('layouts.footer')

@include('layouts._asset_footer')
</body>
</html>
