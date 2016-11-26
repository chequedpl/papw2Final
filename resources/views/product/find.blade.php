@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($productoSe))

	<thead>
		<th>Producto</th>
		<th>Descripción</th>
		<th>Precio</th>
		<th>Foto</th>
	</thead>
	<tbody>

	@foreach($productoSe as $p)
		<tr>

			<td><a href="product/{{ $p->id }}">{{ $p->name }}</a></td>
			<td>{{ $p->description }}</td>
			<td>{{ $p->price }}</td>
			<td>
				<img src="{{ $p->photo1 }}" width="250" height="150">
			</td>
		</tr>
		
		@endforeach
	</tbody>


	@endif
</table>


<table class="table table-hover">
	@if(isset($usuarioSe))

	<thead>
		<th>Usuarios</th>
		<th>Correo</th>
		<th>Foto</th>
	</thead>
	<tbody>

	@foreach($usuarioSe as $u)
		<tr>

			<td><a href='#'>{{ $u->name }}</a></td>
			<td>{{ $u->email }}</td>
			<td>
				<img src="{{ $u->pathavatar }}" width="250" height="150">
			</td>
		</tr>
		
		@endforeach
	</tbody>


	@endif
</table>


@endsection