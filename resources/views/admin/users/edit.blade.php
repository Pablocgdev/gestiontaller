@extends ('admin.template.main')

@section('title', 'Editar usuario ' . $user -> name)

@section('content')

	{!! Form::open(['route' => ['admin.users.update', $user->id], 'method' => 'PUT']) !!}

		<div class="from-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', $user->name, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre completo']) !!}
		</div>
		
		<div class="from-group">
			{!! Form::label('email', 'Email') !!}
			{!! Form::email('email', $user->email, ['class' => 'form-control', 'required', 'placeholder' => 'Email']) !!}
		</div>

		<div class="from-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control'])!!}
		</div>

		<div class="from-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary'])!!}
		</div>

	{!! Form::close() !!}

@endsection