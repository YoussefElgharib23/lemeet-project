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
									<a href="{{ route('admin.spaces.index') }}"><button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button></a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }}</h5><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Meeting Spaces') }}  </span><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Edit ') }}</span>
								</div>
							</div>					 
						</div>
						</div>
 
					</div>
					<!-- breadcrumb -->		 
					<!-- /row -->
					<!-- row -->
					<form method="POST" action="{{route('admin.spaces.update',['id'=>$content->id])}}">
											@csrf
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										{{ __(' Edit Meeting Space') }}
									</div>

									<div class="pd-30 pd-sm-40 bg-gray-200">
										
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Name') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input name="name" value="{{$content->name}}" class="form-control" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Address') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" value="{{$content->address}}" name="address" type="text">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Capacity') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" value="{{$content->capacity}}" name="capacity" type="number">
											</div>
										</div>
										<div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Price') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<input class="form-control" value="{{$content->price}}" name="price" type="number">
											</div>
										</div>
								        <div class="row row-xs align-items-center mg-b-20">
											<div class="col-md-4">
												<label class="form-label mg-b-0">{{ __('Description') }}</label>
											</div>
											<div class="col-md-8 mg-t-5 mg-md-t-0">
												<textarea class="form-control" name="description" type="text">{{$content->description}}</textarea>  
											</div>
										</div>
								        
										 	
											
																										 
									</div>
									<button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5 btn-block">{{ __('Save Changes') }}</button>
									</div>
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