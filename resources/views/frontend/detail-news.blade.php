@extends('layouts.header')
@section('content')
    <!-- START PAGE BANNER AND BREADCRUMBS -->
	<section id="page-banner">
		<div class="single-page-title-area overlay" data-background="{{asset('assets/img/stat.jpg')}}">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2 style="color:white;">News & <img src="{{asset('assets/img/waste.png')}}" style="width:300px;" alt=""> updates</h2>
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
							<li class="breadcrumb-item active">Detail News</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	<!-- START BLOG SECTION -->
    <section id="blog" class="section-padding">
        <div class="container">	 
			<div class="row">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="blog-single-image-wra text-center">
						<img class="img-fluid" src="{{URL::to('/')}}/assets/img/news/{{$data->image}}" alt="">
						<div class="blog-single-image-wra-des">
							<span class="sdate">{{$data->date}}</span>
							<h4>{{$data->title}}</h4>
						</div>
					</div>
					<div class="blog-single-des">
						<div class="row mb-5">
							<div class="col-12 ser-page-into">
								<h4>{{$data->subtitle}}</h4>
								<p>
								<?php 
								echo nl2br("$data->short_dep");
								?>
							</div>
						</div>
						<div class="blog-single-promo overlay section-back-image-2 text-center mb-5" data-background="{{URL::to('/')}}/assets/img/news/{{$data->image_two}}">
						</div>
						<p><?php 
								echo nl2br("$data->long_dep");
								?></p>
					 </div>
					<div class="blog-comment-list mt-5 col-12">
						<hr class="row">
					</div>	
					<div class="home-p-form-wrapper mt-5 mb-lg-0 mb-md-0 mb-5">
						<h4 class="row"></h4>
						<hr class="row">
						<div class="home-p-form">
							<form action="#">
								<div class="row">
									<div class="form-group col-lg-6 mb-3">
										<input name="aname" class="form-control" id="afirst-name" placeholder="First Name*" required="required" type="text">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="lname" class="form-control" id="lname" placeholder="Last name" required="required" type="text">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="aemail" class="form-control" id="aemail" placeholder="Email id*" required="required" type="email">
									</div>
									<div class="form-group col-lg-6 mb-3">
										<input name="asubject" class="form-control" id="asubject" placeholder="Subject" required="required" type="text">
									</div>									
									<div class="form-group col-lg-12 mb-3">
										<textarea rows="6" name="rmessage" class="form-control" id="adescription" placeholder="Your Message Here..." required="required"></textarea>
									</div>
									<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0">
										<a href="#" title="Click here to submit your message!" class="btn-style btn-filled btn-filled-2">Send Comment <i class="fa fa-paper-plane"></i></a>
									</div>
									<div class="form-group col-lg-7">
										<p><strong>Note:</strong> We promise that we don't do spam &amp; your mail id is confidential. </p>
									</div>
								</div>
							</form>								
						</div>
					</div>					 
 
				</div>
				<!-- end col -->
				<div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-5 pl-lg-5 pl-md-5 pl-sm-2 pl-2">
					<!-- end widget -->
					<div class="widget cat_wid mb-5">
						<h3 class="widget-title">More News</h3>
						<!-- end widget tittle-->
						<div class="widget-inner mt-5">
							@foreach($news as $new)
							<div class="blog-singleRecpost">
								<img src="{{URL::to('/')}}/assets/img/news/{{$new->image}}" alt="" class="img-fluid">
								<h6 class="blog-recTitle">
									<a href="#">{{$new->title}}</a>
								</h6>
								<p class="posted-on">{{$new->date}}</p>
								</div>
								@endforeach
							
						</div>
					</div>
					<!-- end widget -->
					<div class="widget cat_wid mb-5">
						<h3 class="widget-title">Anouncement</h3>
						<!-- end widget tittle-->
						<div class="widget-inner mt-5">
							<div class="category-menu">
								<ul>
									<li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
                                    <li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
                                    <li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
                                    <li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
                                    <li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
                                    <li><a href="#">ZeroWasteBhutan <span class="float-right">4 DEC 2018</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- end col -->
			</div>
			<!-- end row -->
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END BLOG SECTION -->
    @endsection