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
									<a href="{{ route('admin.users.index') }}">
										<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button>
									</a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }}</h5>
									<span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Add.User') }} </span>
								</div>
							</div>					 
						</div>
					</div>
	 
					</div>
					<!-- breadcrumb -->		 
					<!-- row -->
					<form class=" " action="{{ route('admin.users.add') }}" method='POST' action="" autocomplete="off">
						@csrf 
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										 {{ __('Add A New User') }}
									</div>
									<p class="mg-b-20">{{ __('All fields are required*') }} </p>
									<div class="pd-30 pd-sm-40 bg-gray-200">
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Name') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input required="" class="form-control" placeholder="{{ __('User Name') }} "  name="name" type="text" value="{{ old('name') }}">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label  class="form-label mg-b-0">{{ __('Email') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input required="" class="form-control "name="email" placeholder=" {{ __('User Email') }}" type="email">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Password') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input required="" type="password" name="password" id="password" class="form-control"   placeholder="{{ __('Password') }} ">
											</div>
										</div>										
										
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Phone Number') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input required="" class="form-control" name="phone" placeholder=" {{ __('User Phone Number') }}" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Role') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<select required="" class="form-control select2-no-search select2-hidden-accessible" data-select2-id="13" tabindex="-1" aria-hidden="true" name="role">
												<option label="Choose one" data-select2-id="15">
												</option>
												<option value="admin"  name="role" selected>
													{{ __('Admin') }}
												</option>
												<option value="user"  name="role">
													{{ __('User') }}
												</option>
											</select> 
											</div>
										</div>	
									 													 
									</div>
									     <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5 btn-block">{{ __('Create New User') }}</button>	 
									 
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
					</form>				 
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
		</div>
		<!-- End Page -->	
</div>	 
@endsection