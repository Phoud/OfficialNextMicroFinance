@extends('pages.main')
@section('content')
@section ('title' , 'Service Detail')
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>{{ $service_detail->service_name }}</h2>
        </div>
        <p>{!! $service_detail->description !!}</p>
        <div class="row">
          <div class="col-lg-12">
            
          </div>


         

        </div>

      </div>



    @endsection