@extends('app')
@section('content')

<form method="POST" role="form" action="{{ url('check')}}" enctype="multipart/form-data" class="form-horizontal">
{{csrf_field()}}
				
			
				Email	<input type="email" name="Correo"  class="in">	<br>
				Password<input type="password" name="Contrasenia"  class="in"> <br>
	  			
				<input type="submit" name="submit" class="in" id="btn" >

			</form>

@endsection