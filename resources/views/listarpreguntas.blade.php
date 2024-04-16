@extends('layouts.app')
@section('content')
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">You are here: </div>
        <li><a href="{{ url ('/dashboard') }}">Home</a></li>
        <li class="active"><a href="#">Preguntas</a></li>
    </ul>
    <div class="page-header">
        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Preguntas Dimensión Salud</h1>

            <div class="col-xs-12 col-sm-8">
                <div class="row">
                    <hr class="visible-xs no-grid-gutter-h">
                    <!-- "Create project" button, width=auto on desktops -->
                    <div class="pull-right col-xs-12 col-sm-auto"><a href="#" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Create project</a></div>

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
                    <span class="panel-title">El bienestar físico como un estado de salud óptimo tanto físico como mental, donde cuerpo y mente están en equilibrio.</span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="inputEmail2" class="col-sm-6 control-label">¿Cómo calificarías tu salud general (mente-cuerpo)? </label>
                        <div class="col-sm-6">
                            <select class="form-control form-group-margin">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                        <label for="inputPassword" class="col-sm-6 control-label">¿Qué puntuación le darías a tu salud mental? </label>
                        <div class="col-sm-6">
                            <select class="form-control form-group-margin">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                        <label for="asdasdas" class="col-sm-6 control-label">¿Cómo calificarías tu salud física en comparación con personas de tu misma edad?</label>
                        <div class="col-sm-6">
                        <select class="form-control form-group-margin">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div> <!-- / .form-group -->
                    <div class="form-group">
                        <label class="col-sm-6 control-label">¿Qué tanto cuidado estás tomando con tu salud para mejorar o mantener tu bienestar físico y mental? </label>
                        <div class="col-sm-6">
                            <select class="form-control form-group-margin">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div> <!-- / .col-sm-10 -->
                    </div> <!-- / .form-group -->
                    <div class="form-group" style="margin-bottom: 0;">
                        <div class="col-sm-offset-6 col-sm-10">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div> <!-- / .form-group -->
                </div>
            </form>
        </div>
	</div>
@endsection