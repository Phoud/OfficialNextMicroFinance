@extends('pages.main')
@section('content')
@section ('title' , 'Service')
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>{{ __('locales.service') }}</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow ">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">ເງິນກູ້ຢືມສໍາລັບພະນັກງານ</a></h4>
              <p class="description">ກົດເພື່ອອ່ານເພີ່ມ</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow ">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">ເງິນກູ້ຢືມດ່ວນ</a></h4>
              <p class="description">ກົດເພື່ອອ່ານເພີ່ມ</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
            </div>
          </div>

        </div>

      </div>



    @endsection
