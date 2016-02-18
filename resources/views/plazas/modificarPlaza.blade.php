@extends('layouts.dashboard')

@section('breadcrumb')
<!-- Patron  Active Reference-->
<ol class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li><a href="/">Panel de administración</a></li>
	<li class="active">Modificar plaza</li>
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
	                {!! Form::open(['route' => 'modificarPlaza', 'method' => 'PUT', 'class' => 'form']) !!}
						<div class="form-group">
						    {!! Form::label ('Porcentaje:') !!}
						    {!! Form::input('text', 'porcentaje', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese el porcentaje de modificación']) !!}
						</div>
						<div class="form-group">
						    {!! Form::label ('Sueldo:') !!}
							{!! Form::radio('columna', 'sueldo')!!}
						    {!! Form::label ('Sobresueldo:') !!}
							{!! Form::radio('columna', 'sobresueldo')!!}
						    {!! Form::label ('Estimulo:') !!}
							{!! Form::radio('columna', 'estimulo')!!}
						</div>
						<div class="form-group">
						    {!! Form::submit('Modificar',['class' => 'btn btn-primary']) !!}
						</div>
					{!! Form::close() !!}
	            </div>
	        </div>
	    </div>
    </div>
</div>
@endsection