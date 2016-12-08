@extends('app')

<style type="text/css">


#login{

	margin: auto; 
	width: 40%;
	max-width: 600px;
	padding: 60px;
	border: 1px solid rgba(0,0,0,0.2);
	text-align: center;
	border-radius: 5px;
	background-color: #0097a7;
	color: #ffffff;
}

.in{
	display: block;
	padding: 10px;
	width: 100%;
	margin: 15px 0;
	border: 1px solid rgba(0,0,0,0.2);
	border-radius:  5px;
	color: #000000;
}

#btnLogin{

	background-color: #000000;
	opacity: 0.9;
}

#btnLogin:hover{
	opacity: 1;
}

#btnLogin:active{
	transform: scale(0.9);
}

img{
	width: 250px;
	height: 120px;
	margin-top: 40px;
	margin-left: 42%;
	position: absolute;

}

</style>

@section('content')

@if(count($errors)>0)
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif

<div id="login">

		<form method="POST" role="form" action="{{ url('check')}}" enctype="multipart/form-data" class="form-horizontal">
		{{csrf_field()}}
						
					
						Email	<input type="email" name="Correo"  class="in">	<br>
						Password<input type="password" name="Contrasenia"  class="in"> <br>
			  			
						<input type="submit" name="submit" class="in" id="btnLogin" >

		</form>
</div>

@endsection