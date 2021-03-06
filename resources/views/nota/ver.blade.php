@extends('app')

<style type="text/css">

#pro {

	margin: auto;
	width: 100%;
	max-width: 500px;
	padding: 15px;
	border: 1px solid rgba(0,0,0,0.2);
	text-align: center;
	border-radius: 5px;
	background-color: #f9f9f9;
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

@if(isset($edit))



<div id="pro">
	<table class="table table-hover">


		@if(isset($notas))

		<thead>
			<th>Foto</th>
			<th>Descripción</th>
		</thead>
		<tbody>

			<tr>

				<td><img src="../{{ $notas->photo }}"  width="250" height="150"></td>
				<td>{{ $notas->description }}</td>
			</tr>
			
		</tbody>


		@endif
	</table>
</div>

<table class="table table-hover">
	
	@if(isset($usuario))
	<thead>
		<th>Usuario</th>
		<th>Commentario</th>
		<th>Nombre</th>
		
	</thead>

	<tbody>

	@foreach($usuario as $u)
	
	<tr>
			<td><a href="../user/{{ $u->idUser }}">{{ $u->name }}</a></td>
			<td><img src="../{{ $u->pathavatar }}" width="250" height="150"></td>
			<td>{{ $u->comment }}</td>
		</tr>	

	@endforeach

	</tbody>

	
	@endif
</table>



	<form method="POST" role="form" action="../comment" >
	{{csrf_field()}}

		Commentario		<input type="text" name="Comentario" class="in"> <br>
						<input type="text" name="idUsuario" value="{{Auth::user()->id }}" hidden="">
						<input type="text"  name="idNotas" value="{{ $notas->id }}" hidden="">
						<input type="submit" name="submit" class="in" id="btn" >

	</form>

@else


@endif
@endsection

		