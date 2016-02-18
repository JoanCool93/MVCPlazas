@extends('layouts.dashboard')

@section('breadcrumb')
<!-- Patron  active reference-->
<ol class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li><a href="/">Panel de administración</a></li>
	<li class="active">Listado plazas</li>
</ol>
@endsection

@section('contenido2')
<!--Contenido de la pagina -->
<div class="container">

    <!-- Campos de busqueda de plazas -->
    <div class="row">
        <div class="col-lg-9">
	        <div class="col-lg-5">
	        	<div class="form-group form-horizontal">
	                {!! Form::label ('Buscar por descripción:') !!}
	                {!! Form::input('text', 'descripcion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese la especie a buscar']) !!}
	            </div>
	        </div>
	    </div>
    </div>
</div>
<div class="container">

    <!-- Tabla para la visualizacion de plazas -->
    <div class="row">
        <div class="col-lg-8">
        	<table class="table">
				<thread>
					<th class="col-lg-1">Id:</th>
					<th class="col-lg-2">Descripción:</th>
					<th class="col-lg-2">Sueldo:</th>
					<th class="col-lg-2">Sobresueldo:</th>
					<th class="col-lg-2">Estimulo:</th>
					<th class="col-lg-3"><span align="center">Acciones</span></th>
				</thread>
				@foreach($plazas as $plaza)
				<tbody>
					<th class="col-lg-1">{{$plaza->idPlaza}}</th>
					<th class="col-lg-2">{{$plaza->descripcion}}</th>
					<th class="col-lg-2">{{$plaza->sueldo}}</th>
					<th class="col-lg-2">{{$plaza->sobresueldo}}</th>
					<th class="col-lg-2">{{$plaza->estimulo}}</th>
					<th class="col-lg-3">
						{!! link_to_route('eliminarPlaza', $title = 'Eliminar', $parameters = $plaza->idPlaza, $attributes = ['class'=>'btn btn-danger fa fa-trash'])!!}
					</th>
				</tbody>
				@endforeach
			</table>
			{!!$plazas->render()!!}
        </div>
    </div>
</div>
@endsection