@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($productos))

	<thead>
		<th>Producto</th>
		<th>Descripción</th>
		<th>Precio</th>
		<th>Foto</th>
	</thead>
	<tbody>

	@foreach($productos as $p)
		<tr>
			<td>{{ $p->name }}</td>
			<td>{{ $p->description }}</td>
			<td>{{ $p->price }}</td>
			<td>
				<img src="{{ $p->photo1 }}" class="img-responsive" alt="Responsive image">
			</td>
		</tr>
		@endforeach
	</tbody>


	@endif
</table>

@endsection
		