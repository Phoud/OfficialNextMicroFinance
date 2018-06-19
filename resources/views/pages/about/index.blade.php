@extends('pages.main')
@section('content')
@section ('title' , 'About')
    <section id="about" class="about-us">
      <div class="container">
        <div class="section-header">
          <h2>{{ __('locales.about') }}</h2>
        </div>
                 
         {!! isset($about) ? $about->content : "" !!}
    
    </div>
</section>

@endsection