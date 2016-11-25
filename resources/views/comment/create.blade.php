@extends('app')
@section('content')

	<form method="POST" role="form" action="{{ url('comment')}}" enctype="multipart/form-data" class="form-horizontal">
	{{csrf_field()}}

		Commentario		<input type="text" name="Comentario" class="in"> <br>
						<input type="text" name="idUsuario" placeholder="idusu">
						<input type="text" name="idProducto" placeholder="idProdu">
						<input type="submit" name="submit" class="in" id="btn" >

	</form>


@stop