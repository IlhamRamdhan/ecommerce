<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> IR Surfers Marketplace</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Scripts -->
  @include('layouts._asset_header_login')
</head>
<div class="main">
@yield('content')
</div>
<!-- ./wrapper -->
@include('layouts._asset_footer_login')
</body>
</html>
