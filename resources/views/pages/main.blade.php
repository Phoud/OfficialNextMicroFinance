<!DOCTYPE html>
<html lang="en">
@include('_include.header')
@php
 
 $contactinfo = \App\Contactinfo::first();

@endphp
<body id="body">
@include('_include.navbar')
@yield('content')
@include('_include.footer')
</body>
</html>