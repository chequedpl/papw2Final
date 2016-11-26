@extends('app')
@section('content')

@if(isset($edit))




<table class="table table-hover">


	@if(isset($productos1))

	<thead>
		<th>Producto</th>
		<th>Descripción</th>
		<th>Precio</th>
		<th>Foto</th>
		<th>idUser</th>
	</thead>
	<tbody>

		<tr>

			<td>{{ $productos1->name }}</td>
			<td>{{ $productos1->description }}</td>
			<td>{{ $productos1->price }}</td>
			<td><img src="../{{ $productos1->photo1 }}"></td>
			<td>{{ $productos1->idUser }}</td>
		</tr>
		
	</tbody>


	@endif
</table>


<table class="table table-hover">
	@if(isset($comentarios))

	<thead>
		<th>Commentario</th>
		<th>Usuario</th>
	</thead>

	<tbody>

	@foreach($comentarios as $c)
		<tr>

			<td>{{ $c->comment }}</td>
			<td>{{ $c->idUser }}</td>
		</tr>
		
		@endforeach
	</tbody>


	@endif
</table>



	<form method="POST" role="form" action="{{ url('comment')}}" enctype="multipart/form-data" class="form-horizontal">
	{{csrf_field()}}

		Commentario		<input type="text" name="Comentario" class="in"> <br>
						<input type="text" name="idUsuario" placeholder="idusu">
						<input type="text" name="idProducto" value="{{ $productos1->id }}">
						<input type="submit" name="submit" class="in" id="btn" >

	</form>

@else


@endif
@endsection

		