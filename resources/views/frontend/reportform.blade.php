@extends('layouts.header')
@section('content')
	<!-- END HEADER SECTION -->
    <section id="page-banner">
		<div class="single-page-title-area overlay" data-background="assets/img/stat.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2>Report</h2>
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
							<li class="breadcrumb-item active">Report</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- START SLIDER SECTION -->
    <!-- START PROMO 2 SECTION -->
<section id="promot" class="section-padding bg-gray">
        <div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12 pr-lg-5 pr-md-5 pr-sm-0 pr-0 mb-lg-0 mb-md-4 mb-sm-4 mb-4">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>Report <span>Form</span></h3>
							</div>
						</div>
					</div>
					<!-- end section title -->
					<div class="home-p-form-wrapper">
						<div class="home-p-form">
							<form  method="post" action="{{ route('reportform/send') }}"  enctype="multipart/form-data">
                                    <!-- Success message -->
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                  @csrf
								<div class="row">
									<div class="form-group col-lg-6 mb-3">
										<input name="name" class="form-control" id="afirst-name" placeholder="Your Name*" required="required" type="text">
                                         <!-- Error -->
                                            @if ($errors->has('name'))
                                            <div class="error">
                                                {{ $errors->first('name') }}
                                            </div>
                                            @endif
                                    </div>
									<div class="form-group col-lg-6 mb-3">
										<input name="email" class="form-control" id="aemail" placeholder="Email id*" required="required" type="email">
                                        @if ($errors->has('email'))
                                        <div class="error">
                                            {{ $errors->first('email') }}
                                        </div>
                                        @endif
                                    </div>
									<div class="form-group col-lg-6 mb-3">
										<input name="locations" class="form-control" id="aphone" placeholder="Provide location here*" required="required" type="text">
                                        @if ($errors->has('locations'))
                                            <div class="error">
                                                {{ $errors->first('locations') }}
                                            </div>
                                        @endif
                                    </div>
									<div class="form-group col-lg-6 mb-3">
										<input name="image" class="form-control" id="asubject" placeholder="choose file" required="required" type="file">
                                        @if ($errors->has('image'))
                                            <div class="error">
                                                {{ $errors->first('image') }}
                                            </div>
                                            @endif
                                	</div>									
									<div class="form-group col-lg-12 mb-3">
										<textarea rows="6" name="descriptions" class="form-control" id="adescription" placeholder="Your descriptions Here..." required="required"></textarea>
                                        @if ($errors->has('descriptions'))
                                            <div class="error">
                                                {{ $errors->first('descriptions') }}
                                            </div>
                                         @endif
                                    </div>
                                  
									<div class="form-group col-lg-5 mb-lg-0 mb-md-0 mb-2 pr-0">
									<input type="submit" name="send" value="Submit"  class="btn-style btn-filled btn-filled-2">
                                    </div>
									<div class="form-group col-lg-7">
									</div>
								</div>
							</form>								
						</div>
					</div>
				</div>
				<!-- end col -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="row">
						<div class="col-12 text-left">
							<div class="section-title-2">
								<h3>What can you <span> Report?</span></h3>
							</div>
						</div>
					</div>
					<!-- end section title -->
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. <br> Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. <br> Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque posuere nunc justo tempus leo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					<a href="#" class="mt-4 btn-style btn-border btn-border-2">Read More</a>
				</div>
				<!-- end col -->				
			</div>
        </div>
        <!--- END CONTAINER -->
    </section>
    <!-- END PROMO 2 SECTION -->
    @endsection








