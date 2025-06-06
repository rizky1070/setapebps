@extends('layouts.dashboard')

@section('title')
    admin
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">PRIBADI</h1>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Tambah links</div>
						<a href="{{ route('links.index') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
			<div class="card-body">
				<form action="{{ route('links.store') }}" method="POST" enctype="multipart/form-data">
					@csrf
					@if ($message = Session::get('gagal'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">×</button> 
							<strong>{{ $message }}</strong>
						</div>
					@endif
					<div class="form-group">
						<label for="judul">Judul Link</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="judul">Link Asli</label>
						<input type="text" class="form-control" name="link">
					</div>
						<div class="form-group">
                    <label for="judul">Kategori</label>
                    <select class="form-control" name="category_user_id" id="">
                        @php
                            $sortedCategories = $category->sortBy('name');
                        @endphp
                        @foreach ($sortedCategories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                    </div>
					<div class="form-group">
						<button class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
@endsection