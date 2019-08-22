@extends('layouts.admin')
@section('title', 'Usuarios')

@section('customStyles')

@endsection

@section('content')
	<!-- BEGIN: Subheader -->


    <!-- END: Subheader -->
    <div class="m-content">
		<div class="row">
			@foreach($usuarios as $usuario)
                <div class="col-lg-3">
                    <a href="{{route('usuarios.show', $usuario->id)}}" class="noSubrayado">
                        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
                            <div class="m-portlet__head">
                                <img src="/img/users/default_user.jpg" class="responsive imagenusuario" alt="">
                            </div>
                            <div class="m-portlet__body">
                                <div><h4>{!!$usuario->name!!} {!!$usuario->last_names!!}</h4></div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5>{!!$usuario->pais->nombre!!}</h5>
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