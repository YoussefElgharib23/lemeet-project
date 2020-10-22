@extends('/layouts/app')

@section('content')
 <!-- main-content opened -->
<div class="container">
			<div class="main-content horizontal-content">
				<!-- container opened -->
				<div class="container">
					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex my-xl-auto right-content">						
								<div class="pr-1 mb-3 mb-xl-0">
									<a href="{{ route('admin.coupons.index') }}">
										<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button>
									</a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }}</h5>
									<span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Add Coupon') }} </span>
								</div>
							</div>					 
						</div>
					</div>
	 
					</div>
					<!-- breadcrumb -->		 
					<!-- row -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										 {{ __('Add A New Coupon') }}
									</div>
									<p class="mg-b-20">{{ __('All fields are required*') }} </p>
									<div class="pd-30 pd-sm-40 bg-gray-200">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Activate the coupon') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<div class="main-toggle on">
														<span></span>
												</div>
											</div>
										</div>

										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Coupon Code') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="{{ __('Coupon Code') }} " type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Title') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="{{ __('Coupon Title') }} " type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Value') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" placeholder="{{ __('Reducing Value') }} " type="text">
											</div>
										</div>	 
																	
								        <div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Type') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<select class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true">
												<option label="Choose one" data-select2-id="15">
												</option>
												<option value="Female" data-select2-id="31">
													{{ __('Percent Reduction') }}
												</option>
												<option value="Male" data-select2-id="32">
													{{ __('Third memorization') }}
												</option>
											</select> 
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Description') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<textarea class="form-control" placeholder=" " type="text"></textarea>  
											</div>
										</div>    													 
									</div>
										<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">{{ __('Add') }}</button>
										<button class="btn btn-dark pd-x-30 mg-t-5">{{ __('Cancel') }}</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->				 
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
		</div>
		<!-- End Page -->	
</div>	 
@endsection