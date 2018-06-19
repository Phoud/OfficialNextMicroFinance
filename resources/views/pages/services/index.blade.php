@extends('pages.main')
@section('content')
@section ('title' , 'Service')
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>{{ __('locales.service') }}</h2>
        </div>

        <div class="row">
@foreach($services as $service)
          <div class="col-lg-6">
            <div class="box wow ">
              <div class="icon"><i class="fa fa-{{ $service->service_icon }}"></i></div>
              <h4 class="title"><a href="{{ route('servicedetail', $service->service_key) }}">{{ $service->service_name }}</a></h4>
              <p class="description"><a href="{{ route('servicedetail', $service->service_key ) }}">{{ __('locales.more') }}</a></p>
            </div>
          </div>
@endforeach
        </div>

      </div>



    @endsection
