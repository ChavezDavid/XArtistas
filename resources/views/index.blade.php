@extends('layouts.admin')
@section('title', 'XArtistas')

@section('customStyles')

@endsection

@section('content')
	<!-- BEGIN: Subheader -->


    <!-- END: Subheader -->
    <div class="m-content">
		<div class="row">
			@foreach($obras as $obra)
				<div class="col-lg-6">
					<a href="{{route('obras.show', $obra->id)}}" class="noSubrayado">
						<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
							<div class="m-portlet__body">
								<img src="/img/uploads/default_image.jpg" class="responsive imagenObra" alt="">
							</div>
							<div class="">
								<div><h4>{!!$obra->nombre!!}</h4></div>
								<div class="row">
									<div class="col-md-10">
										<h6>{!!$obra->autor->name!!} {!!$obra->autor->last_names!!}</h6>
									</div>
									<div class="col-md-2">
										<h5><i class="flaticon-like"></i>{!!$obra->likes!!}</h5>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			@endforeach
		</div>
    </div>
@endsection

@section('customScripts')

@endsection