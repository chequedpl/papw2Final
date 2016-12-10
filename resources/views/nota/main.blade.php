@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($notas))

	<thead>
		<th>Foto</th>
		<th>Descripción</th>
		<th>idUser</th>
	</thead>
	<tbody>

	@foreach($notas as $n)
		<tr>

			<td>
				<a href="nota/{{ $n->id }}"><img src="{{ $n->photo }}" width="250" height="150"> </a>
			</td>
			<td>{{ $n->description }}</td>
			<td>{{ $n->name }}</td>
			
		</tr>
		
		@endforeach
		
	</tbody>


	@endif
</table>

@endsection
		