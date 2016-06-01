@extends ('admin.template.main')

@section('title', 'Crear usuario')

@section('content')

	{!! Form::open(['route' => 'admin.users.store', 'method' => 'POST']) !!}

		<div class="from-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo']) !!}
		</div>
		
		<div class="from-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => 'Email']) !!}
		</div>
		
		<div class="from-group">
			{!! Form::label('password', 'Password') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '***********']) !!}
		</div>
		
		<div class="from-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opción..', 'required'])!!}
		</div>

		<div class="from-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection