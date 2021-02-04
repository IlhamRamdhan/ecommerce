@extends('layouts.master')

@section('content')

		<!-- Section Page Title Start -->
		<section class="page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h4>Pesanan</h4>
						<hr class="divider" />
						
						<ol class="breadcrumb">
						  <li>You are here:</li>
						  <li><a href="{{ url ('home') }}">Home</a></li>
                          <li class="active">{{ $barangs->nama_barang }}</li>
						</ol>
					</div>
				</div>
			</div>
		</section>
		<!-- Section Page Title End -->
		
		
		<!-- Products Details Start -->
		<section class="m-top-60 m-bot-80">
			<div class="container">
			
				<!-- Details Product Start -->
				<div class="row">
					<div class="col-xs-12">
						<div class="shop-single-product p-0">
							<div class="clearfix">
								<!-- Product Image Start -->
								<div class="col-md-4 p-0">
									<div class="flex-wrap">
										<div id="slider" class="flexslider">
											<ul class="slides">
												<li>
												  <img src="{{ asset('uploads') }}/{{ $barangs->gambar }}" alt="Image" />
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Product Image End -->
								
								
								<!--  About Product Start -->
								<div class="col-md-8 p-left-35 p-sm-left-15 p-right-0 p-sm-right-15">
									<div class="product-heading ">
										<h4>{{ $barangs->nama_barang }}</h4>
										<hr class="divider" />
										
										<ul class="project-details-list">
											<li><span>Harga : </span>Rp. {{number_format ($barangs->harga) }} </li>
											<li>
												<span>Rating:</span> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star"></i> 
												<i class="fa fa-star-half-o"></i> 
												<i class="fa fa-star-o"></i>
											</li>
											<li><span>Deliver : </span> 2-4 Working Days</li>
											<li><span>Stok : </span>{{ ($barangs->stok) }} Pasang</li>
										</ul>
									</div>
									
									<div class="m-right-30">
                                        <h5>Keterangan</h5>
										<p> {{ ($barangs->keterangan) }} </p>
										
                                        <form action="{{ url ('pesan') }}/{{$barangs->id}}" method="POST">
                                        @csrf
                                        <div class="m-bot-30">
											<div class="number-spinner">
												<input class="form-control quantity-box quantity-lg text-center" value="0" name="jumlah_pesan" type="number" />												
											</div>
                                         
                                            <span class="space-15"></span>
											<button type="submit" class="icon-btn-primary"><span class="icon"><i class="fa fa-shopping-basket"></i></span>Add to cart</button>
                                            </form>
										</div>

										<div class="clearfix">
											<div class="pull-left m-right-15">
												<p class="text-uppercase m-top-5 m-sm-bot-15">Share ON:</p>
											</div>
											
											<div class="pull-left">
												<ul class="list-social">
													<li>	
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
															<span class="icon">
															  <span class="icon-circle marion-bg-hover">
																<i class="fa fa-facebook"></i>
															  </span>
															</span>
														</a>
													</li>
													<li>	
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
															<span class="icon">
															   <span class="icon-circle sky-bg-hover">
																<i class="fa fa-twitter"></i>
															   </span>
															</span>
														</a>
													</li>
													<li>	
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
															<span class="icon">
															   <span class="icon-circle blue-bg-hover">
																<i class="fa fa-instagram"></i>
															   </span>
															</span>
														</a>
													</li>
													<li>	
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Rss">
															<span class="icon">
															   <span class="icon-circle orange-bg-hover">
																<i class="fa fa-rss"></i>
															   </span>
															</span>
														</a>
													</li>
													<li>	
														<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
															<span class="icon">
															   <span class="icon-circle pink-bg-hover">
																<i class="fa fa-dribbble"></i>
															   </span>
															</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!--  About Product End -->
								
								
								<!--  More about Product Start -->
								<div class="col-sm-12 p-0">
									<div class="napa-tabs">
										<!-- Nav tabs -->
										<ul class="nav" role="tablist">
											<li role="presentation" class="active"><a href="#tabs-1" aria-controls="tabs-1" role="tab" data-toggle="tab">Product Description</a></li>
											<li role="presentation"><a href="#tabs-2" aria-controls="tabs-2" role="tab" data-toggle="tab"> Reviews </a></li>
											<li role="presentation"><a href="#tabs-3" aria-controls="tabs-3" role="tab" data-toggle="tab">Buyers Guide</a></li>
											<li role="presentation"><a href="#tabs-4" aria-controls="tabs-4" role="tab" data-toggle="tab">Size Charts</a></li>
											<li role="presentation"><a href="#tabs-5" aria-controls="tabs-5" role="tab" data-toggle="tab">Specifications</a></li>
										</ul>
										

										<!-- Tab Content Start -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="tabs-1">
												<p>Lorem ipsum Non dolor fugiat Duis irure esse eiusmod aliquip laborum dolor ea cupidatat nostrud do elit esse occaecat Duis sit nostrud  
													cillum consequat eiusmod in do in commodo.Lorem ipsum Adipisicing exercitation qui ut in deserunt voluptate officia labore non dolor 
													laboris anim adipisicing magna tempor anim repr cillum reprehenderit irure Duis Duis esse mollit incididunt Excepteur venddiam laboris
													sit sint magna aliquip. Lorem ipsum Adipisicing exercitation qui ut in deserunt voluptate officia labore non dolor laboris anim adipisicing
													magna tempor anim reprehenderit cillum reprehenderit irure Duis Duis esse mollit incididunt Excepteur veniam laboris sit sint magna aliquip. 
													Lorem ipsum Magna irure deserunt ea et reprehenderit dolor aute sit deserunt proident
													mollit ea commodo. Voluptate laborum </p>
													
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante lorem, lacinia facilisis nunc non,
													imperdiet commodo tortor. Fusce et dui vulputate tellus scelerisque elementum. Morbi ut mi sed ex faucibus rhoncus eu sed felis. 
													Sed vitae ornare orci. Donec nisi ligula, consequat sit amet lobortis venenatis, vulputate et purus. Fusce quis facilisis lorem. 
													Proin est elit, lobortis a sollicitudin vitae, euismod ut eros. Quisque ultrices commodo neque, eu tincidunt ex facilisis vel. 
													Pellentesque et dictum ex. Nulla ligula nisi, scelerisque ac interdum pharetra, hendrerit vel mi. Maecenas rhoncus lacinia urna, 
													at congue lectus tincidunt sit amet. </p>
											</div>
											
											
											<!-- Review Start -->
											<div role="tabpanel" class="tab-pane fade" id="tabs-2">
												<ul class="comments-list">
													<li class="media">
														<a href="#" class="pull-left">
															<img src="{{asset('assets/img/blog/a_7.jpg')}}" alt="Image" class="media-object img-circle">
														</a>
														
														<div class="media-body">
															<div class="comment-info">
																<h4>
																	<a href="#">Greg Johnson <small>says:</small></a>
																	<span class="pull-right theme-color">
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star-half-o"></i> 
																		<i class="fa fa-star-o"></i>
																	</span>
																</h4>
																<span>December 29, 2016 at 8:51 pm</span>
															</div>
															<p>Lorem ipsum Ut enim esse irure veniam id Excepteur eu quis exercitation Excepteur magna velit minim fugiat eiusmod non dolore veniam ex magna consectetur ea labore tempor deserunt consectetur est occaecat tempor.</p>
														</div>
													</li>
													
													<li class="media">
														<a href="#" class="pull-left">
															<img src="{{asset('assets/img/blog/a_7.jpg')}}" alt="Image" class="media-object img-circle">
														</a>
														
														<div class="media-body">
															<div class="comment-info">
																<h4>
																	<a href="#">Greg Johnson <small>says:</small></a>
																	<span class="pull-right theme-color">
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star"></i> 
																		<i class="fa fa-star-half-o"></i> 
																		<i class="fa fa-star-o"></i>
																	</span>
																</h4>
																<span>December 29, 2016 at 8:51 pm</span>
															</div>
															<p>Lorem ipsum Ut enim esse irure veniam id Excepteur eu quis exercitation Excepteur magna velit minim fugiat eiusmod non dolore veniam ex magna consectetur ea labore tempor deserunt consectetur est occaecat tempor.</p>
														</div>
													</li>
												</ul>
											</div>
											<!-- Review End -->
											
											<div role="tabpanel" class="tab-pane fade" id="tabs-3">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante lorem, lacinia facilisis nunc non,
													imperdiet commodo tortor. Fusce et dui vulputate tellus scelerisque elementum. Morbi ut mi sed ex faucibus rhoncus eu sed felis. 
													Sed vitae ornare orci. Donec nisi ligula, consequat sit amet lobortis venenatis, vulputate et purus. Fusce quis facilisis lorem.
													Proin est elit, lobortis a sollicitudin vitae, euismod ut eros. Quisque ultrices commodo neque, eu tincidunt ex facilisis vel. 
													Pellentesque et dictum ex. Nulla ligula nisi, scelerisque ac
													interdum pharetra, hendrerit vel mi.</p>
											</div>
											
											<div role="tabpanel" class="tab-pane fade" id="tabs-4">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante lorem, lacinia facilisis nunc non,
													imperdiet commodo tortor. Fusce et dui vulputate tellus scelerisque elementum. Morbi ut mi sed ex faucibus rhoncus eu sed felis. 
													Sed vitae ornare orci. Donec nisi ligula, consequat sit amet lobortis venenatis, vulputate et purus. Fusce quis facilisis lorem. 
													Proin est elit, lobortis a sollicitudin vitae </p>
											</div>
											
											<div role="tabpanel" class="tab-pane fade" id="tabs-5">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ante lorem, lacinia facilisis nunc non,
													imperdiet commodo tortor. Fusce et dui vulputate tellus scelerisque elementum. Morbi ut mi sed ex faucibus rhoncus eu sed felis. 
													Sed vitae ornare orci. Donec nisi ligula, consequat sit amet lobortis venenatis, vulputate et purus. Fusce quis facilisis lorem.
													Proin est elit, lobortis a sollicitudin vitae, euismod ut eros. Quisque ultrices commodo neque, eu tincidunt ex facilisis vel. 
													Pellentesque et dictum ex. Nulla ligula nisi, scelerisque ac
													interdum pharetra, hendrerit vel mi.</p>
											</div>
										</div>
										<!-- Tab Content End -->
										
									</div>
								</div>
								<!--  More about Product End -->
								
							</div>
						</div>
					</div>
				</div>
				<!-- Details Product End -->
				
			</div>
		</section>
		<!-- Products Details End -->
		
	</main>
	<!-- MAIN END -->
@endsection
