@extends('layouts.admin')

@section('css-style')
{!! Html::style('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') !!}
{!! Html::style('assets/global/plugins/morris/morris.css') !!}
{!! Html::style('assets/global/plugins/fullcalendar/fullcalendar.min.css') !!}
{!! Html::style('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') !!}
@stop

@section('content')
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                <div class="visual">
                                    <i class="fa fa-comments"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{!! $productos !!}">0</span>
                                    </div>
                                    <div class="desc"> Productos </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                <div class="visual">
                                    <i class="fa fa-bar-chart-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{!! $pedidos !!}">0</span> </div>
                                    <div class="desc"> Pedidos </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                <div class="visual">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="{!! $marcas !!}">0</span>
                                    </div>
                                    <div class="desc"> Marcas </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                <div class="visual">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <div class="details">
                                    <div class="number"> 
                                        <span data-counter="counterup" data-value="{!! $categorias !!}"></span> </div>
                                    <div class="desc"> Categorias </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
@stop

@section('js-script')
{!! Html::script('assets/global/plugins/morris/morris.min.js') !!}
{!! Html::script('assets/global/plugins/counterup/jquery.waypoints.min.js') !!}
{!! Html::script('assets/global/plugins/counterup/jquery.counterup.min.js') !!}
@stop