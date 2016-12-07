@extends('app')

<style type="text/css">

#pro {

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
<div id="pro">
<form method="POST" role="form" action="nota" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
				Foto	<input type="file" name="Foto" class="in"> <br>
				Descripcion	<input type="text" name="Descripcion"  class="in">	<br>			
				
				<input type="text" name="idUsuario" placeholder="usu" class="in">
				<input type="text" name="idCategoria" placeholder="cate" class="in">

				<input type="submit" name="submit" class="in" id="btn" >

			</form>
</div>
@endsection
		