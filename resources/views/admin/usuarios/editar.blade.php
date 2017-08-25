@extends('layouts.admin')

@section('title','USUARIOS')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>ACTUALIZAR USUARIOS </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    {!! Form::open(['route' => 'actualizar.usuario', 'method' => 'POST']) !!}
                    @foreach($usuario as $row)
                    <input type="hidden" name="id" value="{!! $row->id !!}">
                    {!! Field::text('nombres', $row->nombres) !!}
                    {!! Field::text('paterno', $row->paterno) !!}
                    {!! Field::text('materno', $row->materno) !!}
                    {!! Field::email('email', $row->email) !!}
                    {!! Field::password('password') !!}
                    {!! Form::submit('ACTUALIZAR',  ['class' => 'btn btn-primary']) !!}
                    <a class="btn btn-danger" href="{!! url('usuarios') !!}">ATRAS</a>
                    @endforeach
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop