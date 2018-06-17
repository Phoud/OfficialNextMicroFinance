@extends('pages.main')
@section('content')
@section ('title' , 'Vision and Mission')
    <section id="clients" class="wow fadeInUp">
      <div class="container">
      	<div class="section-header">
          <h2>{{ __('locales.vision-mission') }}</h2>
        </div>
        <div class="section-header">
          {!! isset($page_vision) ? $page_vision->content : ""!!}
        </div>
      </div>
    </section><!-- #clients -->
    	@endsection