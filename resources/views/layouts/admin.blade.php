<!DOCTYPE html>
<?php
	use App\CategoriaObra;
	use App\User;

	$categorias_obra = CategoriaObra::all();
	$usuarios = User::all();

?>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="/vendors/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
        <!--
		<link href="/vendors/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		
		<link href="/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        -->
        <link href="/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
		<link href="/vendors/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles -->
		<link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/css/styles.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="/img/logo/favicon.ico" />

		@yield('customStyles')
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- BEGIN: Header -->
			<header id="m_header" class="m-grid__item    m-header " m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">

						<!-- BEGIN: Brand -->
						<div class="m-stack__item m-brand  m-brand--skin-dark ">
							<div class="m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-brand__logo">
									<a href="/" class="m-brand__logo-wrapper">
										<img alt="" src="/img/logo/logo_default_dark.png" />
									</a>
								</div>
								<div class="m-stack__item m-stack__item--middle m-brand__tools">

									<!-- BEGIN: Left Aside Minimize Toggle -->
									<a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Responsive Aside Left Menu Toggler -->
									<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
										<span></span>
									</a>

									<!-- END -->

									<!-- BEGIN: Topbar Toggler -->
									<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
										<i class="flaticon-more"></i>
									</a>

									<!-- BEGIN: Topbar Toggler -->
								</div>
							</div>
						</div>

						<!-- END: Brand -->
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
								<ul class="m-menu__nav">
									<li class="m-menu__item"><a href="/" class="m-menu__link"><span class="m-menu__link-text">Inicio</span><i class="m-menu__ver-arrow la la-angle-right"></i></a></li>
									<li class="m-menu__item"><a href="{{route('descubrir.index')}}" class="m-menu__link"><span class="m-menu__link-text">Descubrir</span><i class="m-menu__ver-arrow la la-angle-right"></i></a></li>
									<li class="m-menu__item">
										@auth
											<a href="{{route('obras.create')}}" class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only"><i class="fa fa-plus"></i></a>
										@endauth
										@guest
											<a href="{{route('login')}}" class="btn btn-success m-btn m-btn--icon btn-lg m-btn--icon-only"><i class="fa fa-plus"></i></a>
		  								@endguest
									</li>
									<form action="#" method="post" class="m-menu__item" name="buscar" id="buscar">
										@csrf
										<div class="row">
											<div class="col-ld-12">
												<input type="text" class="form-control" name="busqueda" id="busqueda" placeholder="Buscar">
											</div>
											<!--<div class="col-lg-2">
												<button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
											</div>-->
										</div>
									</form>
								</ul>
							</div>
							<!-- END: Horizontal Menu -->

							<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
                                        @auth
										<!--<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
											<i class="fa fa-bell"></i>
											</a>
										</li>-->
										<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
										 m-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic">
													<img src="/img/users/{{auth::user()->imagen}}" class="m--img-rounded m--marginless" alt="" />
												</span>
												<span class="m-topbar__username m--hide">Usuario</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center" style="background: url(/img/misc/user_profile_bg.jpg); background-size: cover;">
														<div class="m-card-user m-card-user--skin-dark">
															<div class="m-card-user__pic">
																<img src="/img/users/{{auth::user()->imagen}}" class="m--img-rounded m--marginless" alt="" />
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">{!!auth::user()->name!!}</span>
																<a href="#" class="m-card-user__email m--font-weight-300 m-link">{!!auth::user()->email!!}</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">Sección</span>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">Mi Perfil</span>
																				<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																			</span>
																		</span>
																	</a>
																</li>
																<!--<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Actividad</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Mensajes</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">FAQ</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="#" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Soporte</span>
																	</a>
																</li>-->
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
                                                                    <form action="{{route('logout')}}" method="POST">
																		@csrf
																		<button type="submit" class="btn btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Cerrar sesion</button>
																	</form>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
                                        @else
                                        	<li><a href="{{route('login')}}" class="noSubrayado">Iniciar sesión</a></li>
                                        	<li><a href="{{route('register')}}" class="noSubrayado">Registrarse</a></li>
                                        @endauth
									</ul>
								</div>
							</div>

							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>

			<!-- END: Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

					<!-- BEGIN: Aside Menu -->
					<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<!--<li class="m-menu__item" aria-haspopup="true"><a href="/" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Index</span>
									<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a>
								</li>-->
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Suscripciones</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							@foreach($usuarios as $usuario)
								<li class="m-menu__item" aria-haspopup="true"><a href="{{route('usuarios.show', $usuario->id)}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">{!!$usuario->name!!} {!!$usuario->last_names!!}</span></span></span></a></li>
							@endforeach
							<li class="m-menu__item" aria-haspopup="true"><a href="{{route('usuarios.index')}}" class="m-menu__link "><i class="m-menu__link-icon fa fa-angle-down"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Mostrar más</span></span></span></a></li>
							
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text">Categorías</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							@foreach($categorias_obra as $categoria_obra)
								<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link ">
								@if($categoria_obra->id == 1)
									<i class="m-menu__link-icon fa fa-image">
								@elseif($categoria_obra->id == 2)
									<i class="m-menu__link-icon fa fa-video">
								@elseif($categoria_obra->id == 3)
									<i class="m-menu__link-icon fa fa-music">
								@else
									<i class="m-menu__link-icon fa fa-book">
								@endif
								</i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">{!!$categoria_obra->descripcion!!}</span></span></span></a></li>
							@endforeach
							<!--<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon fa fa-video"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Video</span></span></span></a></li>
							<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon fa fa-music"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Audio</span></span></span></a></li>
							<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon fa fa-book"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Libro</span></span></span></a></li>
							-->
							<li class="m-menu__section ">
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-book"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Términos y condiciones</span></span></span></a></li>
							<li class="m-menu__item" aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-icon flaticon-lock"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Privacidad</span></span></span></a></li>
							<li class="m-menu__section ">
								<h4 class="m-menu__section-text"><span class="m-menu__link-icon la la-copyright"></span>Prueba Artistas 2019</h4>
								<i class="m-menu__section-icon flaticon-more-v2"></i>
							</li>
							<!--<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Base</span><i
									 class="m-menu__ver-arrow la la-angle-right"></i></a>
								<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Base</span></span></li>
										<li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Menu 1</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
												 class="m-menu__link-text">Menu 2</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Submenu</span></a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>-->
						</ul>
					</div>

					<!-- END: Aside Menu -->
				</div>

				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					@yield('content')
				</div>
			</div>

			<!-- end:: Body -->

			<!-- begin::Footer -->
			<!--<footer class="m-grid__item		m-footer ">
					
			</footer>-->

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="/vendors/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="/vendors/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="/vendors/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="/vendors/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="/vendors/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="/vendors/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="/vendors/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
        <!--
		<script src="/vendors/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="/vendors/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="/vendors/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="/vendors/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="/vendors/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="/vendors/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="/vendors/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="/vendors/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="/vendors/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js" type="text/javascript"></script>
		<script src="/vendors/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		
		<script src="/vendors/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="/vendors/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="/vendors/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="/vendors/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="/vendors/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="/vendors/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="/vendors/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>
		<script src="/vendors/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="/vendors/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="/vendors/jstree/dist/jstree.js" type="text/javascript"></script>
		<script src="/vendors/raphael/raphael.js" type="text/javascript"></script>
		<script src="/vendors/morris.js/morris.js" type="text/javascript"></script>
		<script src="/vendors/chartist/dist/chartist.js" type="text/javascript"></script>
		<script src="/vendors/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/charts/chart.init.js" type="text/javascript"></script>
		<script src="/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="/vendors/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="/vendors/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="/vendors/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="/vendors/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="/vendors/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="/vendors/js/framework/components/plugins/base/sweetalert2.init.js" type="text/javascript"></script>
        -->

        <script src="/vendors/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle -->
		<script src="/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="/js/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		@yield('customScripts')
	</body>

	<!-- end::Body -->
</html>