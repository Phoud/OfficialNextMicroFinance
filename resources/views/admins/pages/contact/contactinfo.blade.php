@extends('admins.main')
@section('content')
@section('title', 'Contact Information')
@section('secondtitle', 'Contact Information')

<form action="" method="post">
{{ csrf_field() }}
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" value="{{ $contactinfo->address }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Phone Number</label>
		<input type="text" name="phone" value="{{ isset($contactinfo) ? $contactinfo->phone: "" }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Email Address</label>
		<input type="email" name="email" value="{{ isset($contactinfo) ? $contactinfo->email: "" }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Twitter</label>
		<input type="text" name="twitter" value="{{ isset($contactinfo) ? $contactinfo->twitter: "" }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Facebook</label>
		<input type="text" name="facebook" value="{{ isset($contactinfo) ? $contactinfo->facebook: "" }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Instagram</label>
		<input type="text" name="instagram" value="{{ isset($contactinfo) ? $contactinfo->instagram: "" }}" class="form-control">
	</div>
	<div class="form-group">
		<label>Linkedin</label>
		<input type="text" name="linkin" value="{{ isset($contactinfo) ? $contactinfo->linkin: "" }}" class="form-control">
	</div>
	<button type="submit" class="btn btn-primary mb-5 btn-block">Save</button>
	
</form>

@endsection