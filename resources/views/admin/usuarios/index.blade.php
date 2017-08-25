@extends('layouts.admin')

@section('css-style')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
@stop

@section('title','USUARIOS')

@section('content')

    {!! Alert::render() !!}

    {!! Session::get('messages') !!}

    <div class="row">
        <div class="col-md-4">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>REGISTRO </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['route' => 'registrar.usuario', 'method' => 'POST']) !!}
                    {!! Field::text('nombres') !!}
                    {!! Field::text('paterno') !!}
                    {!! Field::text('materno') !!}
                    {!! Field::email('email') !!}
                    {!! Field::password('password') !!}
                    {!! Form::submit('REGISTRAR', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>LISTADO </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                <table class="table table-striped table-bordered table-hover" id="Usuarios">
                    <thead>
                        <tr>
                            <th> Nombres </th>
                            <th> Paterno </th>
                            <th> Materno </th>
                            <th> Roles </th>
                            <th> Accion </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

@stop

@section('js-script')
{!! Html::script('assets/global/scripts/datatable.js') !!}
{!! Html::script('assets/global/plugins/datatables/datatables.min.js') !!}
{!! Html::script('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') !!}
{!! Html::script('assets/pages/scripts/table-datatables-buttons.min.js') !!}

<script>
$('#Usuarios').dataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar Usuarios :",
        "lengthMenu": "_MENU_ registros"
    },
    "bProcessing": true,
    "sAjaxSource": '{{ url('listado-usuarios') }}',
    "pagingType": "bootstrap_full_number",
    "columnDefs": [
                {  
                    'orderable': false,
                    'targets': '_all'
                },
                {
                    'targets':4,
                    'render': function ( data, type, row ) {
                      return ' \
                      <a href="editar-usuario/'+data+' " title="Eliminar" class="btn btn-icon-only green"><i class="fa fa-edit"></i></button> \
                      <a href="eliminar-usuario/'+data+' " title="Eliminar" class="btn btn-icon-only red"><i class="fa fa-trash"></i></a> \
                      ';
                    }
                }
            ],
    "columns": [
            { "data": "nombres","defaultContent": "" },
            { "data": "paterno","defaultContent": "" },
            { "data": "materno","defaultContent": "" },
            { "data": "roles","defaultContent": "" },
            { "data": "id","defaultContent": "" }
        ]
});
</script>
@stop