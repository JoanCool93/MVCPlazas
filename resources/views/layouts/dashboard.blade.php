@extends('layouts.principal')

@section('content')
<!--Contenido de la pagina -->
<div class="container">

    <!-- Encabezado de pagina -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Panel de Administración</h1>
            @yield('breadcrumb')
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Gestion de las plazas</div>
                <!-- List group -->
                <div class="list-group">
                    <a href="listaPlazas" class="list-group-item">Listado plazas</a>
                    <a href="crearPlaza" class="list-group-item">Crear plaza</a>
                    <a href="modificarPlaza" class="list-group-item">Modificar plaza</a>
                </div>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-md-9">
            @yield('contenido2')
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container -->

@endsection