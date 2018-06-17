@extends('pages.main')
@section('content')
@section ('title' , 'History')
    <section id="about" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>{{ __('locales.history') }}</h2>
        </div>
        <div class="row">
          
          <div class="col-lg-6 about-img">
            <img style="padding-top: 36px;" src="{{ url('/') }}/img/{{isset($page_history) ? 'image/'. $page_history->image : "staff.jpg"}}" alt="">
          </div>        
          <div class="col-lg-6 content">
            {!! isset($page_history) ? $page_history->content : ""!!}

          </div>
        </div>
      </div>                   
    </section><!-- #about -->
    	@endsection