@extends('layouts.app')
@section('content')
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ url ('/dashboard') }}">Home</a></li>
        <li class="active"><a href="#">Hoteles</a></li>
    </ul>
    <div class="page-header">
        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Crear Hotel</h1>

            <div class="col-xs-12 col-sm-8">
                <div class="row">
                    <hr class="visible-xs no-grid-gutter-h">

                    <!-- Margin -->
                    <div class="visible-xs clearfix form-group-margin"></div>
                </div>
            </div>
        </div>
    </div> <!-- / .page-header -->

    <div class="row">
		<div class="col-sm-12">
			<form class="panel form-horizontal">
				<div class="panel-heading">
					<span class="panel-title">Crear Hotel</span>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="inputEmail2" class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputEmail2" placeholder="Nombre">
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputEmail2" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputEmail2" placeholder="Email">
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputEmail2" class="col-sm-2 control-label">NIT</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputEmail2" placeholder="NIT">
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputEmail2" class="col-sm-2 control-label">Página Web</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="paginaweb" placeholder="http://....">
						</div>
					</div> <!-- / .form-group -->
					
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Dirección</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Dirección">
							<p class="help-block">Sede Principal.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Teléfono</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Teléfono">
							<p class="help-block">Sede Principal.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Latitud</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Latitud">
							<p class="help-block">Sede Principal.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Longitud</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="inputPassword" placeholder="Longitud">
							<p class="help-block">Sede Principal.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">No de Sedes</label>
						<div class="col-sm-10">
							<select class="form-control form-group-margin">
									<option>------</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select>
							<p class="help-block">Total de Sedes.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Niveles - Zonas</label>
						<div class="col-sm-10">
							<select class="form-control form-group-margin">
									<option>------</option>		
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select>
							<p class="help-block">Número de Pisos  o Zonas de la sede.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="inputPassword" class="col-sm-2 control-label">Categorías</label>
						<div class="col-sm-10">
							<select class="form-control form-group-margin">
									<option>------</option>		
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
							</select>
							<p class="help-block">Básico, Estándar, Premium.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="asdasdas" class="col-sm-2 control-label">Descripción Corta</label>
						<div class="col-sm-10">
							<textarea class="form-control"></textarea>
							<p class="help-block">Máximo 100 Carácteres.</p>
						</div>
					</div> <!-- / .form-group -->
					<div class="form-group">
						<label for="asdasdas" class="col-sm-2 control-label">Descripción General</label>
						<div class="col-sm-10">
							<textarea class="form-control"></textarea>
							<p class="help-block">Máximo 500 Carácteres.</p>
						</div>
					</div> <!-- / .form-group -->

					<script>
						init.push(function () {
							$("#dropzonejs-example").dropzone({
								url: "//dummy.html",
								paramName: "file", // The name that will be used to transfer the file
								maxFilesize: 0.5, // MB

								addRemoveLinks : true,
								dictResponseError: "Can't upload file!",
								autoProcessQueue: false,
								thumbnailWidth: 138,
								thumbnailHeight: 120,

								previewTemplate: '<div class="dz-preview dz-file-preview"><div class="dz-details"><div class="dz-filename"><span data-dz-name></span></div><div class="dz-size">File size: <span data-dz-size></span></div><div class="dz-thumbnail-wrapper"><div class="dz-thumbnail"><img data-dz-thumbnail><span class="dz-nopreview">No preview</span><div class="dz-success-mark"><i class="fa fa-check-circle-o"></i></div><div class="dz-error-mark"><i class="fa fa-times-circle-o"></i></div><div class="dz-error-message"><span data-dz-errormessage></span></div></div></div></div><div class="progress progress-striped active"><div class="progress-bar progress-bar-success" data-dz-uploadprogress></div></div></div>',

								resize: function(file) {
									var info = { srcX: 0, srcY: 0, srcWidth: file.width, srcHeight: file.height },
										srcRatio = file.width / file.height;
									if (file.height > this.options.thumbnailHeight || file.width > this.options.thumbnailWidth) {
										info.trgHeight = this.options.thumbnailHeight;
										info.trgWidth = info.trgHeight * srcRatio;
										if (info.trgWidth > this.options.thumbnailWidth) {
											info.trgWidth = this.options.thumbnailWidth;
											info.trgHeight = info.trgWidth / srcRatio;
										}
									} else {
										info.trgHeight = file.height;
										info.trgWidth = file.width;
									}
									return info;
								}
							});
						});
					</script>
					<!-- / Javascript -->

					<div class="panel">
						<div class="panel-heading">
							<span class="panel-title">Logo</span>
						</div>
						<div class="panel-body">
							<div id="dropzonejs-example" class="dropzone-box">
								<div class="dz-default dz-message">
									<i class="fa fa-cloud-upload"></i>
									Drop files in here<br><span class="dz-text-small">or click to pick manually</span>
								</div>
								<form action="//dummy.html">
									<div class="fallback">
										<input name="file" type="file" multiple="" />
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="form-group" style="margin-bottom: 0;">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="cancel" class="btn btn-primary">Cancelar</button>
						</div>
					</div> <!-- / .form-group -->
				</div>
			</form>
		</div>
	</div>


    
@endsection
