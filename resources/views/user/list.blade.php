@extends('layouts.app')

@section('content')
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

    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">Usted está en: </div>
        <li><a href="#">Home</a></li>
        <li class="active"><a href="#">Lista de Usuarios</a></li>
    </ul>
    <div class="page-header">

        <div class="row">
            <!-- Page header, center on small screens -->
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Lista de Usuarios</h1>
            <div class="pull-right" style="padding-bottom: 2px">
                    <a href="{{ url("createUser") }}" class="btn btn-primary btn-labeled">
                        <span class="btn-label icon fa fa-plus"></span>Crear USUARIO
                    </a>
            </div>

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
    <!-- Javascript -->
    <script>
        init.push(function () {
            $('#jq-datatables-example').dataTable();
            $('#jq-datatables-example_wrapper .table-caption').text('Lista de Usuarios');
            $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Buscar...');
        });
    </script>
    <!-- / Javascript -->

    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Lista de Usuarios</span>
        </div>
        <div class="panel-body">
            <div class="table-primary">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                    <thead>
                    <tr>
                        <th>No Usuario</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Perfil</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUsers as $user)
                        <tr class="odd gradeX">
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->profile->name}}</td>
                            <td>{{$user->state}}</td>
                            <td class="center">
                                <a href="{{url('editUser/'.$user->id)}}"><img src="{{asset('/images/icons/editar.png')}}" width="30" height="30"></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
