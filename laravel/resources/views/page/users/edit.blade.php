@extends('layouts.dashboard')

@section('title')
    edit admin
@endsection

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit user</h1>
</div>

<!-- Content Row -->
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Edit users</div>
						<a href="{{ route('link-user') }}" class="btn btn-primary btn-sm ml-auto">Back</a>
					</div>
				</div>
				
				<div class="card-body">
					<form action="{{ route('updateuser', $users->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
						@csrf
						@if ($message = Session::get('gagal'))
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">×</button> 
								<strong>{{ $message }}</strong>
							</div>
						@endif
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="name" value="{{ $users->name }}">
						</div>
						<div hidden>
							<input type="text" name="roles" value="{{ $users->roles }}">
						</div>
                        <div class="form-group">
							<label for="judul">username</label>
							<input type="text" value="{{ $users->username }}" class="form-control" name="username">
						</div>
						<div class="form-group">
							<label for="judul">Password</label>
							<input type="text" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm" type="submit">Save</button>
                        </div>
@endsection