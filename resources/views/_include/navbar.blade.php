
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="fa fa-phone"></i><<a href="" title=""> +1 5589 55488 55</a>
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
<header id="header">
<div class="container">

  <div id="logo" class="pull-left">
    {{-- <h1><a href="/" class="scrollto">Reve<span>al</span></a></h1>
     <link href="img/apple-touch-icon.png" rel="logo"> --}}
    <!-- Uncomment below if you prefer to use an image logo -->
    <a href="/"><img src="{{ url('/') }}/img/micro.png" alt="Micro" title="Home" /></a>
  </div>

  <nav id="nav-menu-container">
    <ul class="nav-menu">          
      <li class="menu-has-children {{ ( Request::is('/') || Request::is('profile/*') ) ? 'menu-active' : '' }}"><a href="/">{{ __('locales.profile') }}</a>
        <ul>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'history' ? 'menu-active' : '' }}" href="{{route('history')}}">{{ __('locales.history') }}</a></li>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'vision-mission' ? 'menu-active' : ''}}" href="{{route('vision-mission')}}">{{ __('locales.vision-mission') }}</a></li>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'organization-chart' ? 'menu-active' : ''}}" href="{{route('organization-chart')}}">{{ __('locales.organization') }}</a></li>
         </ul>
    </li>    
      <li class="menu-has-children {{ ( Request::is('finance') || Request::is('finance/*') ) ? 'menu-active' : '' }}"><a href="{{route('finance')}}">{{ __('locales.finance') }}</a>
        <ul>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'credit_ability' ? 'menu-active' : '' }}" href="{{route('credit_ability')}}">{{ __('locales.credit_ability') }}</a></li>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'checkbalance' ? 'menu-active' : '' }}" href="{{route('checkbalance')}}">{{ __('locales.checkbalance') }}</a></li>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'credit' ? 'menu-active' : '' }}" href="{{route('credit')}}">{{ __('locales.credit') }}</a></li>
          <li class="nav-menu"><a class="{{Route::current()->getName() == 'payment' ? 'menu-active' : '' }}" href="{{route('payment')}}">{{ __('locales.payment') }}</a></li>
           <li class="nav-menu"><a class="{{Route::current()->getName() == 'currency' ? 'menu-active' : '' }}" href="{{route('currency')}}">{{ __('locales.currency') }}</a></li>
         </ul>
    </li> 
      <li class="{{ Route::current()->getName() == 'service' ? 'menu-active' : '' }}"><a href="{{route('service')}}">{{ __('locales.service') }}</a></li>
      <li class="{{ Route::current()->getName() == 'activity' ? 'menu-active' : '' }}"><a href="{{route('activity')}}">{{ __('locales.activity') }}</a></li>
   
      {{-- <li><a href="/contact">Contact</a></li> --}}
      <li class="{{ Route::current()->getName() == 'about' ? 'menu-active' : '' }}"><a href="{{route('about')}}">{{ __('locales.about') }}</a></li>
      <li class="{{ Route::current()->getName() == 'contact' ? 'menu-active' : '' }}"><a href="{{route('contact')}}">{{ __('locales.contact') }}</a></li>
      <li class="{{ Route::current()->getName() == 'register' ? 'menu-active' : '' }}"><a href="{{route('register')}}">{{ __('locales.register') }}</a></li>
      <li class="menu-has-children"><a href="{{Session::get('lang') }}">Languages</a>
        <ul>
      <li><a href="/?lang=en">English</a></li>
      <li><a href="/?lang=la">Laos</a></li> 
        </ul>
      </li>
    </ul>
  </nav><!-- #nav-menu-container -->
</div>
</header><!-- #header -->