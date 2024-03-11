@extends('layouts.lay')

@section('title','Category')
@section('content')
<div class="row">
	<div class="col-md-8 mx-auto">
		<div class="card">
			<div class="d-sm-flex align-items-center justify-content-between mb-4 mx-auto">
				<h1 class="h3 mb-0 text-gray-800 mt-1">Edit Category</h1>
			</div>
			<div class="card-body">
				<!-- alert validate error karena nama sama -->
				@if ($errors->any())
				    <div class="alert alert-danger " role="alert">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
				<form action="/category-edit/{{ $category->id }}" method="post">
					@csrf
					<div>
						<label for="nama">Nama</label>
						<input type="text" name="nama" class="form-control " value="{{ $category->nama }}">
					</div>
					<div class="mt-3">
						<button class="btn btn-success" type="submit">Update</button>
					</div>
				</form>
				
			</div>
		</div>
	</div>

</div>

@endsection