@extends('admins.main')
@section('content')
@section('title', 'Services')
@section('secondtitle', 'Service')
<div class="panel-body">
<ul class="nav nav-tabs nav-justified" id ="tab-menu">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<form action="{{route('service.store')}}" method="POST">
<div class="tab-content">
	{{ csrf_field() }}
	<div class="tab-pane active" id="tablao">
		<br>
		<h4>Lao</h4>
		<br>
		<div class="form-group">
		<label>Service icon</label>
		<input type="text" name="service_icon" class="form-control" placeholder="Service icon">
		</div>
		<div class="form-group">
		<label>Service Name</label>
		<input type="text" name="service_name_la" class="form-control" placeholder="Service name">
		</div>
		<br>
		
		<textarea class="editor" name="body_la">{{isset($page_service_la) ? $page_service_la->content : ""}}</textarea>
	</div>
	
	<div class="tab-pane" id="tabenglish">
		<br>
		<h4>English</h4>
		<br>
		<div class="form-group">
		<label>Service icon</label>
		<input type="text" name="service_icon" class="form-control" placeholder="Service icon">
		</div>
		<div class="form-group">
		<label>Service Name</label>
		<input type="text" name="service_name_en" class="form-control" placeholder="Service name">
		</div>
		<br>
		<textarea class="editor" name="body_en">{{isset($page_service_en) ? $page_service_en->content : ""}}</textarea>
	</div>
</div>

<button type="submit" class="btn btn-primary btn-block mt-3 save-button">Save</button>
</form>
{{-- Service List --}}
<br>
<hr>
	<table class="table">
		<thead>
			<tr class="table-primary">
				<th>Service Name</th>
				<th>Action</th>
				<th></th>
			</tr>
		
		</thead>
		<tbody>
			@foreach($services as $service)
			<tr>
				<td>{{ isset($service) ? $service->service_name :"" }}</td>
				<td><a type="button" href="{{ route('edit.service', $service->service_key) }}" class="btn btn-warning">Edit</a></td>
				
				<form action="{{ route('service.delete', $service->service_key) }}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="delete">
					
				
				<td><button type="submit" class="btn btn-danger">Delete</button></td>
				
				</form>
			</tr>

			@endforeach
			
		</tbody>
	</table>

</div>

@endsection