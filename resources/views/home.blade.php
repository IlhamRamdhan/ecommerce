
@extends('layouts.master')

@section('css')

@endsection

@section('content')
<!-- Boot Slider Section Start  -->
    <div class="m-bot-60">
			<div id="bootstrap-touch-slider" class="carousel bs-slider fade  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="false" >

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
					<li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
					<li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
				</ol>

				<!-- SLIDES WRAPPER -->
				<div class="carousel-inner" role="listbox">
				
					<!-- Item Start -->
					<div class="item active">
						<img src="{{asset('assets/img/gallery/nike-logo-2048x1152.jpg')}}" alt="Slider Image" class="slide-image"/>
					
						<div class="slide-text">
							<div class="width-50 width-sm-60 width-xs-100 pull-left text-center">
								<div class="p-top-60 p-sm-top-0"></div>
								<div data-animation="animated fadeInDown" class="big-text border-tb m-bot-30 delay-0-5">New Shoes Collection</div>
								<div class="button-box">
									<a data-animation="animated bounceInDown" href="#" class="btn napa-btn-transparent delay-1 duration-1">view details</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Item End -->
                    
					<!-- Item Start -->
					<div class="item ">
						<img src="{{asset('assets/img/gallery/BANNER-LEATHER-JACKET-JIN.jpg')}}" alt="Slider Image" class="slide-image"/>
					
						<div class="slide-text">
							<div class="width-50 width-sm-60 width-xs-100 pull-left text-center">
								<div class="p-top-60 p-sm-top-0"></div>
								<div data-animation="animated fadeInDown" class="big-text border-tb m-bot-30 delay-0-5">New Jackets Collection</div>
								<div class="button-box">
									<a data-animation="animated bounceInDown" href="#" class="btn napa-btn-transparent delay-1 duration-1">view details</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Item End -->

					<!-- Item Start -->
					<div class="item ">
						<img src="{{asset('assets/img/gallery/9450edc9e2da48e07031c79b8f725010.jpg')}}" alt="Slider Image" class="slide-image"/>
					
						<div class="slide-text">
							<div class="width-50 width-sm-60 width-xs-100 pull-left text-center">
								<div class="p-top-60 p-sm-top-0"></div>
								<div data-animation="animated fadeInDown" class="big-text border-tb m-bot-30 delay-0-5">T-Shirt and Jeans Collection</div>
								<div class="button-box">
									<a data-animation="animated bounceInDown" href="#" class="btn napa-btn-transparent delay-1 duration-1">view details</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Item End -->


				</div>
				<!-- SLIDES WRAPPER End-->

				
				<!-- Control Start -->
				<a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
					<span class="angle"></span>
				</a>

				<a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
					<span class="angle"></span>
				</a>
				<!-- Control End -->
			</div>
			
		</div>
		<!-- Boot Slider Section End  -->
		
		<!-- Best Selling Products Start -->
    <section class="m-bot-50">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-heading heading-center p-left-7 p-right-7">
					<h3>Shoes Collection</h3>
				</div>
						<!-- Carousel Start -->
						<div id="shop_best_sell_carousel_alt">
						   @foreach($barangs as $barang)
							<!-- Single Product Start -->
							<div class="item">
								<div class="single-product">
									<div class="product-image">
										<img src="{{ asset('uploads') }}/{{ $barang->gambar }}"  alt="Image" class="img-responsive" />
										
										<div class="quick-view">
											<h4><a src="{{ asset('uploads') }}/{{ $barang->gambar }}"  data-lightbox="best-product-1" data-title="Your product name">{{ ($barang->nama_barang) }}</a></h4>
										</div>
										
										<div class="discount">
											<span> <b class="off">off</b></span>
										</div>
										
										<div class="favourite">
											<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
											<span class="faourite-desc">Add To Wishlist</span>
										</div>
									</div>
									
									<div class="product-desc">
										<div class="product-desc-inner">
											<h4><a href="shop-single.html">{{ ($barang->nama_barang) }}</a></h4>
											<div class="star-icons">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<p class="price">Rp. {{number_format ($barang->harga) }} </p>
                                            <span>Stok : </span>{{ ($barang->stok) }} Pasang
										</div>
										
										<div class="product-buttons">
											<a href="{{ url('pesan') }}/{{ $barang->id}}" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
											<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- Single Product End -->
						
						</div>
						<!-- Carousel End -->
					</div>
				</div>
			</div>
		</section>
		<!-- Best Selling Products End -->
		
		
		<!-- Recent Products Start -->
		<section class="m-bot-50">
			<div class="container">
				<div class="row">
					<div class="section-heading heading-center p-left-7 p-right-7">
						<h3>Jacket Collection</h3>
					</div>
					
					<!-- Carousel Start -->
					<div id="shop_recent_carousel_alt">
					
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/36_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/36_white.jpg" data-lightbox="recent-product-1" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/42_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/42_white.jpg" data-lightbox="recent-product-7" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/29_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/12_white.jpg" data-lightbox="recent-product-8" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="discount">
										<span>13% <b class="off">off</b></span>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
					</div>
					<!-- Carousel End -->
					
				</div>
			</div>
		</section>
		<!-- Recent Products End -->
		
		
		<!-- Banner Section Start -->
		<section class="m-bot-50">
			<div class="container">
				<div class="row">
					<!-- Banner Start -->
					<div class="col-sm-8">
						<div class="shop-banner">
							<div class="banner-img">
								<img src="assets/img/shop/banner/shop-banner-img-6.jpg" alt="Image" class="img-responsive" />
							</div>
							
							<div class="banner-desc-wrapper half-3">
								<div class="banner-desc">
									<div class="banner-desc-inner">
										<h3>Blue Jeans</h3>
										<h5>100+ Design & styles</h5>
										
										<a href="#" class="btn btn-block napa-btn-transparent">Shop now</a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Banner End -->
					
					<!-- Banner Start -->
					<div class="col-sm-4">
						<div class="shop-banner">
							<div class="banner-img">
								<img src="assets/img/shop/banner/shop-banner-img-7.jpg" alt="Image" class="img-responsive" />
							</div>
							<div class="banner-desc-wrapper">
								<div class="banner-desc">
									<div class="banner-desc-inner">
										<h3>Men's collections</h3>
										<a href="#" class="btn napa-btn-transparent">Shop now</a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Banner End -->
				</div>
				<!-- End row -->
			</div>
		</section>
		<!-- Banner Section End -->
		
		
		<!-- Feature Products Start -->
		<section class="m-bot-50">
			<div class="container">
				<div class="row">
					<div class="section-heading heading-center p-left-7 p-right-7">
						<h3>T-Shirt and Jeans Collection</h3>
					</div>
					
					<!-- Carousel Start -->
					<div id="shop_feature_carousel_alt">
					
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/05_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/05_white.jpg" data-lightbox="05_white.jpg" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/40_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/40_white.jpg" data-lightbox="40_white.jpg" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="discount">
										<span>25% <b class="off">off</b></span>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
						<!-- Single Product Start -->
						<div class="item">
							<div class="single-product">
								<div class="product-image">
									<img src="assets/img/shop/products/34_white.jpg" alt="Image" class="img-responsive" />
									
									<div class="quick-view">
										<h4><a href="assets/img/shop/products/large/34_white.jpg" data-lightbox="34_white.jpg" data-title="Your product name">Quick View</a></h4>
									</div>
									
									<div class="favourite">
										<a href="#"><span class="icon-circle"><i class="fa fa-heart"></i></span></a>
										<span class="faourite-desc">Add To Wishlist</span>
									</div>
								</div>
								
								<div class="product-desc">
									<div class="product-desc-inner">
										<h4><a href="shop-single.html">Your Product Name</a></h4>
										<div class="star-icons">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<p class="price">$48.00</p>
									</div>
									
									<div class="product-buttons">
										<a href="#" class="product-btn"><span class="icon"><i class="fa fa-shopping-basket"></i></span> Add to cart</a>
										<a href="shop-single.html" class="product-btn"><span class="icon"><i class="fa fa-file-text-o"></i></span> View details</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Single Product End -->
						
					</div>
					<!-- Carousel End -->
					
				</div>
			</div>
		</section>
		<!-- Feature Products End -->
@endsection

@section('scripts')

@endsection