@extends('app')
@section('content')

<form method="POST" role="form" action="product" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
				Nombre <input type="text" name="Nombre"  class="in">	<br>
				Descripcion	<input type="text" name="Descripcion"  class="in">	<br>
				Precio	<input type="text" name="Precio"  class="in"> <br>
				Foto	<input type="file" name="Foto1" class="in"> <br>
				<input type="text" name="idUsuario">
				<input type="submit" name="submit" class="in" id="btn" >

			</form>

@endsection
		