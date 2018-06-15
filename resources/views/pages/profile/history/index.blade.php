@extends('pages.main')
@section('content')
@section ('title' , 'History')
    <section id="about" class="wow fadeInUp">

      <div class="container">
        <div class="row">
          
          <div class="col-lg-6 about-img">
            <img src="{{url('/')}}/img/staff.jpg" alt="">
          </div>        
          <div class="col-lg-6 content">
            {!! isset($page_history_la) ? $page_history_la->content : ""!!}

          </div>
        </div>
      </div>                   
    </section><!-- #about -->
    	@endsection