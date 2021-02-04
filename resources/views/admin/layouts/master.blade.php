<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="Updates and statistics" />
  @include('admin.layouts._asset_header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
<div id="kt_header" class="header header-fixed">
                    <!--begin::Header Wrapper-->
                    <div class="header-wrapper rounded-top-xl d-flex flex-grow-1 align-items-center">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-center justify-content-end justify-content-lg-between flex-wrap">
                            <!--begin::Menu Wrapper-->
                            <div class="header-menu-wrapper header-menu-wrapper-left py-lg-2" id="kt_header_menu_wrapper">
                                <!--begin::Menu-->
                            <h3> IR Surfers Martketplace </h3>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu Wrapper-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center py-3" style="margin-right: 30px;">
                                <!--begin::Dropdown-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Keluar" data-placement="left">
                                    <a href="#" class="btn btn-danger font-weight-bold px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt"></i></a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-md dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover">
                                            <li class="navi-header font-weight-bold py-4">
                                                <span class="font-size-lg">Choose Label:</span>
                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                            </li>
                                            <li class="navi-separator mb-3 opacity-70"></li>
                                            <li class="navi-item">
                                                <form action="{{ route('logout') }}" method="POST">
                                                    <input type="hidden" name="_token" value="wbgUlG3esFpjjyV9S6eSK35GGpOcTMB8B1G0EQmU"> <button class="btn navi-link">
                                        <span class="navi-text">
                                            <span class="label label-xl label-inline label-light-danger">Sign out</span>
                                        </span>
                                    </button>
                                   
                                    
                                        @csrf
                                  
                            
                                                </form>
                                               
                                  
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdown-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header Wrapper-->
                </div>

@include('admin.layouts.header')
 
@include('admin.layouts.sidebar')

@yield('content')

</div>
@include('admin.layouts._asset_footer')
</body>
</html>