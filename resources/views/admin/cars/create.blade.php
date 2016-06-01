@extends('admin.template.main')

@section('title', 'Agregar coche')

@section('content')

	{!! Form::open(['route' => 'admin.cars.store', 'method' => 'POST', 'files' => true]) !!}

		<div class="form-group">
			{!! Form::label('brand', 'Marca') !!}
			{!! Form::text('brand', null, ['class' => 'form-control', 'placeholder' => 'Marca del coche', 'required']) !!}
		</div> 

		<div class="form-group">
			{!! Form::label('model', 'Modelo') !!}
			{!! Form::text('model', null, ['class' => 'form-control', 'placeholder' => 'Modelo del vehículo', 'required']) !!}
		</div> 

		<div class="form-group">
			{!! Form::label('plate', 'Matrícula') !!}
			{!! Form::text('plate', null, ['class' => 'form-control', 'placeholder' => 'Matrícula del coche', 'required']) !!}
		</div> 

		<div class="form-group">
			{!! Form::label('notes', 'Notas') !!}
			{!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' => 'Notas del vehículo', 'required']) !!}
		</div> 

		<div class="form-group">
			{!! Form::label('category_id', 'Categoría') !!}
			{!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una categoría.', 'required']) !!}
		</div> 

		<div class="form-group">
			{!! Form::label('tags', 'Tags') !!}
			{!! Form::select('tags', $tags, null, ['class' => 'form-control','multiple', 'required', 'size=5']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('image', 'Imagen') !!}
			{!! Form::file('image') !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Agregar artículo', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection

