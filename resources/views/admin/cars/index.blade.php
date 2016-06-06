@extends('admin.template.main')

@section('title', 'Lista de coches')

@section('content')
	<a href="{{ route('admin.cars.create')}}" class="btn btn-info">Registrar nuevo coche.</a>
		<!-- CAR FINDER -->	
		{!! Form::open(['route'=>'admin.cars.index', 'method' => 'GET', 'class' => 'navbar-form pull-right'])!!}
		
			<div class="input-group">
				{!! Form::text('plate', null, ['class' => 'form-control', 'placeholder' => 'Buscar coche..' , 'aria-describedy' => 'search']) !!}
				<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
			</div>
		{!! Form::close() !!}
	<!-- END CAR FINDER -->
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Marca</th>
			<th>Categoría</th>
			<th>Usuario</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach ($cars as $car)
				<tr>
					<td>{{ $car->id }}</td>
					<td>{{ $car->brand }}</td>
					<td>{{ $car->category->name }}</td>
					<td>{{ $car->user->name }}</td>
					<td>
					<a href="{{ route('admin.cars.edit', $car->id)}}" class="btn btn-success glyphicon glyphicon-pencil"></a>
					<a href="{{ route('admin.cars.destroy', $car->id) }}" onclick="return confirm('Seguro que desea eliminar el usuario?')" class="btn btn-danger glyphicon glyphicon-remove-circle"> </a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $cars->render() !!}
@endsection