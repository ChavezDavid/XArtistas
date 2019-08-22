@extends('layouts.admin')
@section('title', 'Crear Obra')

@section('customStyles')

@endsection

@section('content')
	<!-- BEGIN: Subheader -->
    

    <!-- END: Subheader -->
    <div class="m-content">
        <!--begin::Portlet-->
								<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Publicar
												</h3>
											</div>
										</div>
									</div>

									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right" action="{{route('obras.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<input type="text" class="form-control col-lg-8" name="nombre_obra" id="nombre_obra" placeholder="Nombre de la obra" required>
                                                <select name="categoria_obra" id="categoria_obra" class="form-control col-lg-4" required>
                                                    <option value="0">Categoria</option>
                                                    @foreach($categorias_obra as $categoria_obra)
                                                        <option value="{{$categoria_obra->id}}">{!!$categoria_obra->descripcion!!}</option>
                                                    @endforeach
                                                </select>
											</div>
											<div class="form-group m-form__group">
												<input type="file" name="archivo_obra" id="archivo_obra" class="form-control" required>
											</div>
											<div class="form-group m-form__group">
												<textarea name="descripcion_obra" id="descripcion_obra" class="form-control" cols="30" rows="10" placeholder="Descripción de la obra" required></textarea>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">Publicar</button>
											</div>
										</div>
									</form>

									<!--end::Form-->
								</div>

								<!--end::Portlet-->
    </div>
@endsection

@section('customScripts')

@endsection