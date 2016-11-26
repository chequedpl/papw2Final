@extends('app')
@section('content')

<table class="table table-hover">
	@if(isset($user))

	<thead>
		<th>Usuario</th>
		<th>Email</th>
		<th>Avatar</th>
		
	</thead>
	<tbody>

	@foreach($user as $u)

	<script type="text/javascript">
		
	</script>
		<tr>
			<td>{{ $u->name }}</td>
			<td>{{ $u->email }}</td>
			<td>
				<img src="{{ $u->pathavatar }}" class="img-responsive" alt="Responsive image">
			</td>
		</tr>
		@endforeach
	</tbody>


	@endif
</table>

@endsection
		