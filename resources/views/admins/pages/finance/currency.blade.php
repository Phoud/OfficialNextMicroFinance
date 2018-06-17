@extends('admins.main')
@section('content')
@section('title', 'Currency')
@section('secondtitle', 'This is Currency page')
<div class="panel-body">
<ul class="nav nav-tabs nav-justified" id ="tab-menu">
	<li class="nav-item"><a data-toggle="tab" class="nav-link active" href="#tablao">Lao</a></li>
	<li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tabenglish">English</a></li>
</ul>
<form action="{{route('currency.store')}}" method="POST">
<div class="tab-content">
	{{ csrf_field() }}
	<div class="tab-pane active" id="tablao">
		<br>
		<h4>Lao</h4>
		<br>
		<textarea class="editor" name="body_la">{{isset($page_currency_la) ? $page_currency_la->content : ""}}</textarea>
	</div>
	
	<div class="tab-pane" id="tabenglish">
		<br>
		<h4>English</h4>
		<br>
		<textarea class="editor" name="body_en">{{isset($page_currency_en) ? $page_currency_en->content : ""}}</textarea>
	</div>
</div>

<button type="submit" class="btn btn-primary btn-block mt-3 save-button">Save</button>
</form>
</div>
@endsection