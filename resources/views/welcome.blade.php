@extends('public.layouts.app')

@section('page_header') 
                         
	@include('public.partials.page_header',[
		'title' =>  'Carousel'
	])
	
@endsection

@section('content')

<!-- ROW-1 OPEN -->
						<div class="row">
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">PUCESE</h3>
									</div>
									<div class="card-body">
										<div id="carousel-default" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/img/jovenes.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/rector.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/puce.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/pucese.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/jovenes-2.jpg" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Estudiantes</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<li data-target="#carousel-indicators" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/img/estudiantes.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/estudiantes-3.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/estudiantes-4.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/incripciones.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/puce.jpg" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-controls" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/img/jovenes-2.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/jovenes.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/estudiantes-4.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/pucese.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/img/puce.jpg" data-holder-rendered="true">
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-controls" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-controls" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with captions</h3>
									</div>
									<div class="card-body">
										<div id="carousel-captions" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/assets/images/media/9.jpg" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/10.jpg" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/11.jpg" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/12.jpg" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/13.jpg" data-holder-rendered="true">
													<div class="carousel-item-background d-none d-md-block"></div>
													<div class="carousel-caption d-none d-md-block">
														<h3>Slide label</h3>
														<p>Secure other greater pleasures</p>
													</div>
												</div>
											</div>
											<a class="carousel-control-prev" href="#carousel-captions" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carousel-captions" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators1" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators1">
												<li data-target="#carousel-indicators1" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators1" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators1" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/assets/images/media/14.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/15.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/16.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/17.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/18.jpg" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-4">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Carousel with top-right controls</h3>
									</div>
									<div class="card-body">
										<div id="carousel-indicators2" class="carousel slide" data-ride="carousel">
											<ol class="carousel-indicators2">
												<li data-target="#carousel-indicators2" data-slide-to="0" class="active"></li>
												<li data-target="#carousel-indicators2" data-slide-to="1" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="2" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="3" ></li>
												<li data-target="#carousel-indicators2" data-slide-to="4" ></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active">
													<img class="d-block w-100" alt="" src="/assets/images/media/19.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/20.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/21.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/22.jpg" data-holder-rendered="true">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" alt="" src="/assets/images/media/23.jpg" data-holder-rendered="true">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-1 CLOSED -->

						

@endsection