@extends('layouts.header')
@section('content')
	<!-- END HEADER SECTION -->
    <section id="page-banner">
		<div class="single-page-title-area overlay" data-background="assets/img/stat.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2>Feedback</h2>
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
							<li class="breadcrumb-item active">Feedback</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- START SLIDER SECTION -->
    <section id="contactpage" class="section-padding">
        <div class="container">
				<div class="col-lg-7 mx-auto">
					<div class="contact-form-wrapper">
						<div class="contact-form">
							<form id="contact-form" class="form"  method="post" action="{{ route('feedback.store') }}">
							  <!-- Success message -->
								  @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{Session::get('success')}}
                                        </div>
                                    @endif
                                  @csrf
								<div class="row">
									<div class="form-group col-12 mb-3">
										<label>Name:</label>
										<input name="name" class="form-control" id="cname" required="required" type="text">
										@if ($errors->has('name'))
                                            <div class="error">
                                             {{ $errors->first('name') }}
                                            </div>
                                         @endif
									   </div>
									<div class="form-group col-12 mb-3">
										<label>Email:</label>
										<input name="email" class="form-control" id="cemail" required="required" type="email">
										@if ($errors->has('email'))
                                            <div class="error">
                                            {{ $errors->first('email') }}
                                            </div>
                                         @endif
									 </div>
									<div class="form-group col-12 mb-3">
										<label>Comments:</label>
										<textarea rows="6" name="comments" class="form-control" id="cmessage" placeholder="Your Message Here..." required="required"></textarea>
										@if ($errors->has('comments'))
                                            <div class="error">
                                                {{ $errors->first('comments') }}
                                            </div>
                                         @endif
									</div>
									<div class="form-group col-lg-12 mb-0 text-center">
										<div class="actions">
											<input value="Submit" name="submit" id="submitButton" class="btn btn-contact-bg" title="Click here to submit your message!" type="submit">
											<img src="assets/img/ajax-loader.gif" id="loader" style="display:none" alt="loading" width="16" height="16">
										</div>
									</div>
								</div>
							</form>								
						</div>
					</div>
				</div>
			</div>
			<!-- end row -->
        </div>
        <!--- END CONTAINER -->
    </section>
    </section>
@endsection