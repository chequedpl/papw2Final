@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($usuarios))

	<thead>
		<th>usuario</th>
		<th>email</th>
		<th>avatar</th>
	</thead>
	<tbody>

	@foreach($usuarios as $u)
		<tr>
			<td>{{ $u->name }}</td>
			<td>{{ $u->email }}</td>
			<td>
				<img src="{{ $u->avatar }}" class="img-responsive" alt="Responsive image">
			</td>
		</tr>
		@endforeach
	</tbody>


	@endif
</table>

@endsection
		