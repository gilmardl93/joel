@extends('layouts.admin')

@section('css-style')
{!! Html::style('assets/global/plugins/datatables/datatables.min.css') !!}
{!! Html::style('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') !!}
@stop

@section('title','CATEGORIAS')

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
                    {!! Form::open(['route' => 'registrar.categoria', 'method' => 'POST']) !!}
                    {!! Field::text('nombre') !!}
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
                <table class="table table-striped table-bordered table-hover" id="Categorias">
                    <thead>
                        <tr>
                            <th> Nombre </th>
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
$('#Categorias').dataTable({
    "language": {
        "emptyTable": "No hay datos disponibles",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "search": "Buscar Categoria :",
        "lengthMenu": "_MENU_ registros"
    },
    "bProcessing": true,
    "sAjaxSource": '{{ url('listado-categorias') }}',
    "pagingType": "bootstrap_full_number",
    "columnDefs": [
                {  
                    'orderable': false,
                    'targets': '_all'
                },
                {
                    'targets':1,
                    'render': function ( data, type, row ) {
                      return ' \
                      <a href="editar-categoria/'+data+' " title="Eliminar" class="btn btn-icon-only green"><i class="fa fa-edit"></i></button> \
                      <a href="eliminar-categoria/'+data+' " title="Eliminar" class="btn btn-icon-only red"><i class="fa fa-trash"></i></a> \
                      ';
                    }
                }
            ],
    "columns": [
            { "data": "nombre","defaultContent": "" },
            { "data": "id","defaultContent": "" }
        ]
});
</script>
@stop