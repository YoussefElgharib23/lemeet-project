@extends('/layouts/app')

@section('content')

 <!-- main-content opened -->
			<div class="main-content horizontal-content">
				<!-- container opened -->
				<div class="container">
					<!-- breadcrumb -->
						<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex my-xl-auto right-content">						
								<div class="pr-1 mb-3 mb-xl-0">
									<a href="{{ route('admin.orders.index') }}"><button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-arrow-left"></i></button></a>
								</div>	
								<div class="pr-1 mb-3 mb-xl-0">
								   <div class="d-flex">
									<h5 class="content-title mb-0 my-auto">{{ __('Dashboard') }} </h5><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ {{ __('Booking Request Details') }} </span>
								</div>
							</div>					 
						</div>
					</div>
 
					</div>
					<!-- breadcrumb -->
					<div class="row row-sm">
						<div class="col-md-12 col-xl-12">
							<div class=" main-content-body-invoice">
								<div class="card card-invoice">
									<div class="card-body">
										<div class="invoice-header">
											<h1 class="invoice-title">{{ __('Invoice') }}</h1>
											<div class="billed-from">
												<h6>{{ __('Le Meet Group') }}</h6>
												<p>{{ __('Jaddah,Arabia Saudic') }}<br>
												{{ __('Tel Number') }}: 324 445-4544<br>
												{{ __('Email') }}: lemeet@contact.com</p>
											</div><!-- billed-from -->
										</div><!-- invoice-header -->
										<div class="row mg-t-20">
											<div class="col-md">
												<label class="tx-gray-600">{{ __('Billed To') }}</label>
												<div class="billed-to">
													<h6> </h6>
													<p> <br>
													{{ __('Tel No') }}:  <br>
													{{ __('Email') }}:  </p>
												</div>
											</div>
											<div class="col-md">
												<label class="tx-gray-600">{{ __('Invoice Information') }}</label>
												<p class="invoice-info-row"><span>{{ __('Invoice No') }}</span> <span>{{$orders->id}}</span></p>
												<!-- <p class="invoice-info-row"><span>{{ __('Project ID') }}</span> <span>{{$orders->id}}</span></p> -->
												<p class="invoice-info-row"><span>{{ __('Issue Date') }}:</span> <span>{{$orders->created_at}}</span></p>
												<p class="invoice-info-row"><span>{{ __('Due Date') }}:</span><span>{{$orders->deleted_at}}</span></p>
											</div>
										</div>
										<div class="table-responsive mg-t-40">
											<table class="table table-invoice border text-md-nowrap mb-0">
												<thead>
													<tr>
														<th class="wd-20p">{{ __('Type') }}</th>
														<th class="wd-40p">{{ __('Description') }}</th>
														<th class="tx-center">{{ __('Date') }}</th>
														<th class="tx-right"> {{ __('Price') }}</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>{{$orders->type}}</td>
														<td class="tx-12">{{$orders->description}}</td>
														<td class="tx-center">{{$orders->created_at}}</td>
														<td class="tx-right">{{$orders->price}} $</td>
													</tr>
										 
													<tr>
														<td class="valign-middle" colspan="2" rowspan="4">
															<div class="invoice-notes">
																<label class="main-content-label tx-13">{{ __('Notes') }}</label>
																<p>{{ __('Le meet is a great tool to find your meeting space ....') }}</p>
															</div> 
														</td>
														<td class="tx-right">{{ __('Sub-Total') }}</td>
														<td class="tx-right" colspan="2">${{$sub_total}}</td>
													</tr>
													<tr>
														<td class="tx-right">{{ __('Tax ') }}({{$orders->coupon}}%)</td>
														<td class="tx-right" colspan="2">{{$discount}}</td>
													</tr>
													<tr>
														<td class="tx-right tx-uppercase tx-bold tx-inverse">{{ __('Total Due') }}</td>
														<td class="tx-right" colspan="2">
															<h4 class="tx-primary tx-bold">${{$duo_total}}</h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<hr class="mg-b-40">
										<a href="#" class="btn btn-danger float-right mt-3 ml-2">
											<i class=" "></i>{{ __('Delete Order') }}
										</a>
										<div>
										<a onclick="print()"   class=" btn btnprn btn-success float-right mt-3" >
											<i class="mdi mdi-printer mr-1"  >{{ __('Print') }}</i>
                                            
									
										</a>

                                      
									</div>
									</div>
								</div>
							</div>
						</div><!-- COL-END -->
					</div>
@endsection
<script type="text/javascript">
	function print(){
 
            printd:{
                                                window.print()
                                                 }
                                              
                                      
	}
                                      	 
 </script>