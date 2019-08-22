@extends('layouts.admin')
@section('title', 'Descubrir')

@section('customStyles')

@endsection

@section('content')
	<!-- BEGIN: Subheader -->


    <!-- END: Subheader -->
    <div class="m-content">
		<div class="row">
				<div class="col-lg-12">
					<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
						<div class="m-portlet__body">
							<img src="/img/uploads/default_image.jpg" class="responsive imagenObra" alt="">
						</div>
						<div class="">
							<div class="row">
                                <div class="col-md-10 col-sm-9">
                                    <h4>{!!$obra->nombre!!}</h4>
                                </div>
                                <div class="col-md-2 col-sm-3">
									<h5><i class="flaticon-like"></i>{!!$obra->likes!!}</h5>
								</div>
                            </div>
							<div class="row">
								<div class="col-md-10 col-sm-9">
									<h6>{!!$obra->autor->name!!} {!!$obra->autor->last_names!!}</h6>
								</div>
								<div class="col-md-2 col-sm-3">
									<h5>{!!str_limit($obra->created_at, $limit = 10, $end = '')!!}</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
    </div>
@endsection

@section('customScripts')

@endsection