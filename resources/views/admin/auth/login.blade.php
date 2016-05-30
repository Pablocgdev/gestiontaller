@extends('admin.template.main')

@section('title' , 'login')

@section('content')

	{!! Form::open (['route' => 'admin.auth.login' , 'method' => 'POST']) !!}

		<div class ="form-group">
			{!! Form::label ('email', 'Correo Electrónico') !!}
			{!! Form::email ('email', null, ['class' => 'form-control', 'placeholder' => 'ejemplo@gmail.com']) !!}
		</div>

		<div class ="form-group">
			{!! Form::label ('password', 'Password') !!}
			{!! Form::password ('password', ['class' => 'form-control', 'placeholder' => '***********']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Acceder', ['class' => 'btn btn-primary']) !!}
		</div>

	{!! Form::close () !!}
@endsection