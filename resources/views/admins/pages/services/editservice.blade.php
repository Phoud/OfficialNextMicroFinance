@extends('admins.main')
@section('content')
@section('title', 'Services')
@section('secondtitle', 'Service')
<div class="panel-body">
<ul class="nav nav-tabs nav-justified" id ="tab-menu">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<form action="{{ route('edit.service.update', $service_la->service_key) }}" method="POST">
<div class="tab-content">
	{{ csrf_field() }}
	<div class="tab-pane active" id="tablao">
		<br>
		<h4>Lao</h4>
		<br>
		<div class="form-group">
		<label>Service icon</label>
		<input type="text" name="service_icon" class="form-control" value="{{ $service_la->service_icon }}">
		</div>
		<div class="form-group">
		<label>Service Name</label>
		<input type="text" name="service_name_la" class="form-control" value="{{ $service_la->service_name }}">
		</div>
		<br>
		
		<textarea class="editor" name="body_la">{{ $service_la->description }}</textarea>
	</div>
	
	<div class="tab-pane" id="tabenglish">
		<br>
		<h4>English</h4>
		<br>
		<div class="form-group">
		<label>Service icon</label>
		<input type="text" name="service_icon" class="form-control" value="{{ $service_en->service_icon }}">
		</div>
		<div class="form-group">
		<label>Service Name</label>
		<input type="text" name="service_name_en" class="form-control" value="{{ $service_en->service_name }}">
		</div>
		<br>
		<textarea class="editor" name="body_en">{{isset($service_en) ? $service_en->description : ""}}</textarea>
	</div>
</div>

<button type="submit" class="btn btn-primary btn-block mt-3 save-button">Update</button>
</form>

@endsection