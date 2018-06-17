@extends('pages.main')
@section('content')
@section ('title' , 'Organization Chart')
    <section id="about" class="wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>{{ __('locales.organization-chart') }}</h2>
        </div>
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>        
          <div class="col-lg-12 content">
            
            {!! isset($page_or) ? $page_or->content : ""!!}

          </div>
        </div>
      </div>
    </section>
    	@endsection