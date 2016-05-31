@extends('admin.template.main')

@section('title', 'Listado de Categorías')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoría</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
						
						<a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro que desea eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $categories->render() !!}
@endsection