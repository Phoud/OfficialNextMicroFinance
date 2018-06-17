@extends('admins.main')
@section('content')
@section('title', 'History')
@section('secondtitle', 'This is History page')
<div class="panel-body">
<ul class="nav nav-tabs nav-justified" id ="tab-menu">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<form action="{{route('history.store')}}" method="POST" enctype="multipart/form-data">
	<br>

<img id="src" class="img-responsive mb-3" style="max-height: 100px;" src="{{ url('/') }}/img/{{isset($page_history_la) ? 'image/'. $page_history_la->image : "staff.jpg"}}" alt="">

<input type="file" name="image" id="target" class="form-control">
<script>
		var src = document.getElementById('src');
		var target = document.getElementById('target');

		var fr = new FileReader();
		fr.onload = function(e){
			src.src = this.result;
		};
		target.addEventListener("change", function(){
			if(target.files[0] != null){
				fr.readAsDataURL(target.files[0]);
			}
		
		})
	</script>
<div class="tab-content">
	{{ csrf_field() }}
	<div class="tab-pane active" id="tablao">
		<br>
		<h4>Lao</h4>
		<br>
		<textarea class="editor" name="body_la">{{isset($page_history_la) ? $page_history_la->content : ""}}</textarea>
	</div>
	
	<div class="tab-pane" id="tabenglish">
		<br>
		<h4>English</h4>
		<br>
		<textarea class="editor" name="body_en">{{isset($page_history_en) ? $page_history_en->content : ""}}</textarea>
	</div>
</div>

<button type="submit" class="btn btn-primary btn-block mt-3 save-button">Save</button>
</form>
</div>

@endsection