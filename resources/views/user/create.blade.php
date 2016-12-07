@extends('app')

<style type="text/css">

#reg {

	margin: auto;
	margin-top: 10px;
	width: 50%;
	max-width: 500px;
	padding: 15px;
	border: 1px solid rgba(0,0,0,0.2);
	text-align: center;
	border-radius: 5px;
	background-color: #0097a7;
	color: #ffffff;
}

.in {

	display: block;
	padding: 5px;
	margin: 10px 0;
	width: 100%;
	border: 1px solid rgba(0,0,0,0.2);
	border-radius:  5px;
	color: #000000;
}


img{

	width: 100px;
	height: 100px;

}

#btn{

	background-color: #00bcd4;
	opacity: 0.9;
}

#btn:hover{
	opacity: 1;
}


#btn:active{
	transform: scale(0.95);
}
</style>

@section('content')
<div id="reg">

<form method="POST" role="form" action="{{ url('user')}}" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
				Avatar <br>	<input type="file" name="Avatar">
				Portada <br>	<input type="file" name="Cover">
				Nombre 	<input type="text" name="Nombre"  class="in">	<br>
				Email	<input type="email" name="Correo"  class="in">	<br>
				Password<input type="password" name="Contrasenia"  class="in"> <br>
				Fecha	<input type="date" name="Calendario" class="in"> <br>
				Genero
				<input type="radio" name="Genero" value="H"  id="generoH"checked> Hombre
	  			<input type="radio" name="Genero" value="M" id="generoF"> Mujer <br> <br>
	  			
				<input type="submit" name="submit" class="in" id="btn" >

			</form>
</div>

@endsection
		