@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($notas))

	<thead>
		<th>Foto</th>
		<th>Descripción</th>
		<th>idUser</th>
		<th>idCategoria</th>
	</thead>
	<tbody>

	@foreach($notas as $n)
		<tr>

			<td>
				<a href="nota/{{ $n->id }}"> <img src="{{ $n->photo }}" width="250" height="150"> </a>
			</td>
			<td>{{ $n->description }}</td>
			<td><a href="user/{{ $n->id }}">{{ $n->name }} </a></td>
			<td>{{ $n->idCategorias }}</td>					
		</tr>
		
		@endforeach
	</tbody>


	@endif
</table>


<table class="table table-hover">
	@if(isset($usuario))

	<thead>
		<th>Usuarios</th>
		<th>Correo</th>
		<th>Foto</th>
	</thead>
	<tbody>

	@foreach($usuario as $u)
		<tr>

			<td><a href="user/{{ $u->id }}">{{ $u->name }}</a></td>
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