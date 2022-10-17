@extends('layout.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 center pt-5">
			<h1 class="m-5">Edit Student</h1>
			<div class="text-left"><a href="/" class="btn btn-outline-primary">Product List</a></div>

			<form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
				<div class="control-group text-left">
					<label for="title">Fullname</label>
					<div>
						<input type="text" id="title" class="form-control mb-4" name="fullname"
							placeholder="Enter Title" value="{!! $student->fullname !!}"
							required>
					</div>
				</div>
				<div class="control-group mt-2 text-left">
					<label for="body">Birthday</label>
					<div>
						<input type="date" id="title" class="form-control mb-4" name="birthday"
							value="{!! $student->birthday !!}"
							>
					</div>
				</div>

				<div class="control-group mt-2 text-left">
					<label for="body">address</label>
					<div>
						<input type="text" id="price" class="form-control mb-4" name="address"
							placeholder="Enter Price" value="{!! $student->address !!}"
							>
					</div>
				</div>

				@csrf
				@method('PUT')
				<div class="control-group text-left mt-2"><button class="btn btn-success">Update</button></div>
			</form>
		</div>
	</div>
</div>
@endsection
