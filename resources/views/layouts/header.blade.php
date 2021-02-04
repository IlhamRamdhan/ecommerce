<!-- Header Area End -->
<header class="header">
		<!-- START NAVIGATION -->
	    <nav class="navbar navbar-default navbar-fat navbar-shadow navbar-border navbar-sticky bootsnav">
	        <!-- Start Top Search -->
	        <div class="top-search top-search-fixed">
	            <div class="cover-wrapper">
	            	<div class="cover-inner-center">
	            		<div class="container">
	            			<form method="get">
	            				<div class="input-group">
				                    <input type="text" class="form-control" placeholder="Type & Press Enter" autofocus="" >
				                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
				                    <span class="input-group-addon close-search full-screen-butto"></span>
				                </div>
	            			</form>
	            		</div>
	            	</div>
	            </div>
	        </div>
	        <!-- End Top Search -->

	        <div class="container-fluid">

	            <!-- Start Atribute Navigation -->
	            <div class="attr-nav">
	                <ul>
					@guest
					@else
                        <li class="nav-item">
                        <?php
                            $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first(); 
                            if(!empty($pesanan_utama))
                            {
                                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                            }
                           
                        ?>
                        <a class="nav-link" href="{{ url('check-out') }}">
                        <i class="fa fa-shopping-cart"></i>
                        @if(!empty($notif))
                        <span class="badge badge-danger">{{ $notif }}</span>
                        @endif
                        </a>
                            </li>
							<li class="dropdown">
					<a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
	                        <ul class="dropdown-menu">
							<li> 
                                    <a class="dropdown-item" href="{{ url('profile') }}">
                                    Profile
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ url('history') }}">
                                    Riwayat Pemesanan
                                    </a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
	                        </ul>
	                </li>	
					@endguest
	                </ul>
					
					
	            </div>
	            <!-- End Atribute Navigation -->

	            <!-- Start Header Navigation -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('assets/img/logo.png') }}" class="logo" alt="Brand" >
	                </a>
	            </div>
	            <!-- End Header Navigation -->

	            <!-- Navbar Collapse  -->
	        <div class="collapse navbar-collapse" >
	            <ul class="nav navbar-nav navbar-right">
	                <li><a href="{{ url('home') }}" >Home</a></li>
	                <li><a href="{{ url('about') }}" >About us</a></li>
					<li><a href="{{ url('contact_us') }}" >Contact Us</a></li>
                    
				 </ul>
	        </div>   
	    </nav>
	    <!-- END NAVIGATION -->
	</header>
	<!-- Header Area End -->