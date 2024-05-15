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
            <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Niveles</h1>

            <div class="col-xs-12 col-sm-8">
                <div class="row">
                    <hr class="visible-xs no-grid-gutter-h">
                    <!-- "Create project" button, width=auto on desktops -->
                    <div class="pull-right col-xs-12 col-sm-auto"><a href="{{ url ('/crearhotel') }}" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Crear Nivel</a></div>

                    <!-- Margin -->
                    <div class="visible-xs clearfix form-group-margin"></div>
                </div>
            </div>
        </div>
    </div> <!-- / .page-header -->
    <!-- 11. $JQUERY_DATA_TABLES ===========================================================================

				jQuery Data Tables
-->
    <!-- Javascript -->
    <script>
        init.push(function () {
            $('#jq-datatables-example').dataTable();
            $('#jq-datatables-example_wrapper .table-caption').text('Hoteles');
            $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Search...');
        });
    </script>
    <!-- / Javascript -->

    <div class="panel">
        <div class="panel-body">
            <div class="table-primary">
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Nit</th>
                            <th>Correo</th>
                            <th>Ciudades</th>
                            <th>Info...</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>7363</td>
                            <td>Casemiro Hilton</td>
                            <td>837638738-2</td>
                            <td class="center">info@casemirohotel.com</td>
                            <td class="center">
                                Cartagena, Medellín, Cali
                            </td>
                            <td class="center"> Ver -- Actualizar -- Inventario</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- /11. $JQUERY_DATA_TABLES -->
@endsection