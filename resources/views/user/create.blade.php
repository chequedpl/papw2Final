@extends('app')
@section('content')

<form method="POST" role="form" action="{{ url('user')}}" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
				Avatar <br>	<input type="file" name="Avatar">
				Nombre 	<input type="text" name="Nombre"  class="in">	<br>
				Email	<input type="email" name="Correo"  class="in">	<br>
				Password<input type="password" name="Contrasenia"  class="in"> <br>
				Fecha	<input type="date" name="Calendario" class="in"> <br>
				Genero
				<input type="radio" name="Genero" value="H"  id="generoH"checked> Hombre
	  			<input type="radio" name="Genero" value="M" id="generoF"> Mujer <br> <br>
	  			
				<input type="submit" name="submit" class="in" id="btn" >

			</form>


@endsection
		