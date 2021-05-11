@extends('layouts.header')
@section('content')
	
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section id="page-banner">
		<div class="single-page-title-area overlay" data-background="assets/img/stat.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2>Our Project</h2>
						</div>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
		<div class="single-page-title-area-bottom">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Our Projects</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->

	<!-- START SERVICE SECTION -->
    <section id="service" class="section-padding">
        <div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<h5>Check out all our projects</h5>
						<h3>Our <span>projects</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->
			<div class="row">
			<div class="col-12" style="display:flex;flex-wrap:wrap;">
			@foreach($projects as $project)	
				<div class="single-service-item mt-4 col-12 col-md-4 col-lg-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<img class="img-fluid" src="{{URL::to('/')}}/assets/img/project/{{$project->image}}" alt="">
						</div>
						<div class="single-service-title">
							<div class="single-service-text">
								<h5>{{$project->title}}</h5>
							</div>
						</div>
						<div class="single-service-dec">
							<p>{{$project->short_dep}}</p>
							<a href="#"class="sliderbtn-style">Read More</a>
						</div>	
					</div>
											
				</div>
				<!-- end single service -->
				@endforeach	
			</div>
			
			</div>
			<div class="row mt-5">
				<div class="col-12 text-center">
					<div class="serviceall-btn wow fadeInDown">
						<a href="#">Check All Our Projects <i class="icofont icofont-long-arrow-right"></i></a>
					</div>
				</div>
			</div>	
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END SERVICE SECTION -->
	<!-- START PROMO SECTION -->
    
@endsection