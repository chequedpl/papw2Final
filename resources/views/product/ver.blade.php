@extends('app')
@section('content')

@if(isset($edit))




<table class="table table-hover">



	<thead>
		<th>Producto</th>
		<th>Descripción</th>
		<th>Precio</th>
		<th>Foto</th>
		<th>idUser</th>
	</thead>
	<tbody>

		<tr>

			<td>{{ $pp->name }}</td>
			<td>{{ $pp->description }}</td>
			<td>{{ $pp->price }}</td>
			<td>
				<img src="{{ $pp->photo1 }}" class="img-responsive" alt="Responsive image">
			</td>
			<td>{{ $pp->idUser }}</td>
		</tr>
		
	@endforeach
	</tbody>


	@endif
</table>
@else

ttt

@endif
@endsection

		
