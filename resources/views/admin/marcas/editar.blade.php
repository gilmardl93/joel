@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>ACTUALIZAR CATEGORIA </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['route' => 'actualizar.categoria', 'method' => 'POST']) !!}
                    @foreach($categoria as $row)
                    <input type="hidden" name="id" value="{!! $row->id !!}">
                    {!! Field::text('nombre',$row->nombre) !!}
                    {!! Form::submit('ACTUALIZAR',  ['class' => 'btn btn-primary']) !!}
                    <a class="btn btn-danger" href="{!! url('categorias') !!}">ATRAS</a>
                    @endforeach
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop