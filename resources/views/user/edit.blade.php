@extends('layouts.puravida')

@section('content')
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">Usted está en: </div>
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Crear Usuario</a></li>
    </ul>
    <div class="page-header">

        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Crear Usuario</h1>

            <div class="col-xs-12 col-sm-8">
                <div class="row">
                    <hr class="visible-xs no-grid-gutter-h">
                    <!-- "Create project" button, width=auto on desktops -->
                    <!-- Margin -->
                    <div class="visible-xs clearfix form-group-margin"></div>
                </div>
            </div>
        </div>
    </div> <!-- / .page-header -->

    <div class="panel-heading">
        <span class="panel-title">Crear Usuario</span>
    </div>
    <div class="panel-body">
        <div id="formulario-div" class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger alert-dark">
                    <strong>Error!</strong><br/>
                    <br/>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ url('editUserPost') }}" method="POST" class="panel form-horizontal">
                {!! csrf_field() !!}
                <input type="hidden" name="hddIdUser" value="{{$infoUser->id}}" id="hddIdUser">
                <div id="collapseOne-info" class="panel-collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group no-margin-hr">
                                    <label class="control-label">Nombre:</label>
                                    <input type="name" id="name" name="name" required class="form-control"
                                           value="{{$infoUser->name}}" maxlength="255">
                                </div>
                                <div class="form-group no-margin-hr">
                                    <label class="control-label">Correo Electrónico:</label>
                                    <input type="email" id="email" name="email" required class="form-control"
                                           value="{{$infoUser->email}}" maxlength="255">
                                </div>
                                <div class="form-group no-margin-hr">
                                    <label class="control-label">Password:</label>
                                    <input type="password" id="password" name="password" required class="form-control"
                                           value="jddjkj32232dksj" maxlength="255">
                                </div>
                                <div class="form-group no-margin-hr">
                                    <label class="control-label">Perfil:</label>
                                    <select id="perfiles_id" name="perfiles_id" required class="form-control form-group-margin">
                                        @foreach($listProfile as $profile)
                                            <option value="{{$profile->id}}" {{$infoUser->perfiles_id == $profile->id ? 'selected':''}}>{{$profile->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group no-margin-hr">
                                    <label class="control-label">Estado:</label>
                                    <select id="estado" name="estado" class="form-control form-group-margin">
                                        @if($infoUser->estado == 'activo')
                                            <option value="activo" selected>activo</option>
                                            <option value="inactivo" >inactivo</option>
                                        @else
                                            <option value="activo" >activo</option>
                                            <option value="inactivo" selected>inactivo</option>
                                        @endif
                                    </select>
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-footer text-center">
                                    <a href="{{ url ('/listUser') }}" class="btn btn-primary">Cancelar</a>&nbsp;
                                    <button class="btn btn-primary" name="btnGuardar" value="btnGuardar">Guardar</button>
                                </div>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div> <!-- / .panel-body -->
                </div> <!-- / .collapse -->
            </form>
        </div>
    </div>

@endsection
