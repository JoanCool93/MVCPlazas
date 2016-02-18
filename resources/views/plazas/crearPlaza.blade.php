@extends('layouts.dashboard')

@section('breadcrumb')
<!-- Patron  Active Reference-->
<ol class="breadcrumb">
	<li><a href="/">Home</a></li>
	<li><a href="/">Panel de administración</a></li>
	<li class="active">Crear plaza</li>
</ol>
@endsection

@section('contenido2')
<!--Contenido de la pagina -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Crear plaza</div>
                <div class="panel-body">
	                {!! Form::open(['route' => 'crearPlaza', 'method' => 'POST', 'class' => 'form']) !!}
						<div class="form-group">
						    {!! Form::label ('Descripción:') !!}
						    {!! Form::input('text', 'descripcion', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese descripción de la plaza']) !!}
						</div>
						<div class="form-group">
						    {!! Form::label ('Sueldo:') !!}
						    {!! Form::input('text', 'sueldo', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese sueldo de la plaza']) !!}
						</div>
						<div class="form-group">
						    {!! Form::label ('Sobresueldo:') !!}
						    {!! Form::input('text', 'sobresueldo', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese sobresueldo de la plaza']) !!}
						</div>
						<div class="form-group">
						    {!! Form::label ('Estimulo:') !!}
						    {!! Form::input('text', 'estimulo', null, ['class'=> 'form-control', 'placeholder' => 'Ingrese estimulo de la plaza']) !!}
						</div>
						<div class="form-group">
						    {!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
						</div>
					{!! Form::close() !!}	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection