<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
	    <meta name="author" content="">
		<title>Plazas MVC</title>

		{!! Html::style('assets/css/bootstrap.css') !!}
		{!! Html::style('assets/estilosPropios.css') !!}
		{!! Html::style('assets/css/modern-business.css') !!}
		{!! Html::style('assets/font-awesome/css/font-awesome.min.css') !!}
		<!-- Fonts -->
		<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		    <div class="navbar-brand">
		    	{{-- <a class="navbar-brand" href="/"><img src="" alt="?" align="top" height="30" width="80"></img></a> --}}
		    </div>
		    <div class="container">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <!-- <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.jpg') }}" alt="Agricola Grain" height="30" width="80"></img></a> -->
		        </div>
		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		            <ul class="nav navbar-nav navbar">
		                
		            </ul>
		            <ul class="nav navbar-nav navbar-right">
				    
					</ul>
		        </div>
		        <!-- /.navbar-collapse -->
		    </div>
		    <!-- /.container -->
		</nav>

		<div class="container">
			@if (Session::has('errors'))
		    <div class="alert alert-warning" role="alert">
			<ul>
	            <strong>Oops! Algo ha salido mal : </strong>
			    @foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
		        @endforeach
		    </ul>
		    </div>
			@endif
    	</div>
    	@include('alertas.exito')
        @include('alertas.fallo')
		@yield('content')
		@yield('scripts')

		<hr>
		<!-- Footer -->
	    <footer>
	        <div class="row">
	            <div class="col-lg-12" align="center">
	                <p>Copyright &copy; Plazas MVC. 2016</p>
	            </div>
	        </div>
	    </footer>
		<!-- Scripts Propios-->
		{!! Html::script('assets/js/scriptsPropios.js') !!}
		<!-- jQuery -->
        {!! Html::script('assets/js/jquery.js') !!}

        <!-- Bootstrap Core JavaScript -->
        {!! Html::script('assets/js/bootstrap.min.js') !!}
	</body>
</html>
