@extends('app')

<style type="text/css">
	
#table1, #table2 {

	margin: auto;
	margin-top: 10px;
	width: 50%;
	max-width: 500px;
	padding: 15px;
	border: 1px solid rgba(0,0,0,0.2);
	text-align: center;
	border-radius: 5px;
	background-color: #0097a7;
	color: #ffffff;
}

.in {

	display: block;
	padding: 5px;
	margin: 10px 0;
	width: 100%;
	border: 1px solid rgba(0,0,0,0.2);
	border-radius:  5px;
	color: #000000;
}


img{

	width: 100px;
	height: 100px;

}

#btn{

	background-color: #00bcd4;
	opacity: 0.8;
}

#btn:hover{
	opacity: 1;
}


#btn:active{
	transform: scale(0.95);
}
</style>
@section('content')

<table class="table table-hover">

	@if(isset($user))

		<div id="tabla1">
			<thead>
				<th>Usuario</th>
				<th>Email</th>
				<th>Avatar</th>
				<th>Cover</th>
			</thead>
		</div>
		<div id="tabla2">
			<tbody>
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						<img src="../{{ $user->pathavatar }}" width="250" height="150">
					</td>
					<td>
						<img src="../{{ $user->pathcover }}" width="250" height="150">
					</td>
				</tr>
			</tbody>
		</div>

	@endif
</table>

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
				<a href="../nota/{{ $n->id }}"> <img src="../{{ $n->photo }}" width="250" height="150"> </a>
			</td>
			<td>{{ $n->description }}</td>
			<td>{{ $n->idUser }}</td>
			<td>{{ $n->idCategorias }}</td>					
		</tr>
		
		@endforeach
	</tbody>


	@endif
</table>

@endsection
		