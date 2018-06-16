@extends('admins.main')
@section('content')
@section('title', 'Currency')
@section('secondtitle', 'This is Currency page')
<div class="panel-body">
<form action="{{route('currency.store')}}" method="POST">
	{{ csrf_field() }}

              <div class="form-group">
              		       	  <h4>Flag</h4>
                <input type="text" name="flag" class="form-control" id="name" placeholder="Flag" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            	
              <div class="form-group">
              	<h4>Currency</h4>
                <input type="text" name="currency_name" class="form-control" id="name" placeholder="Currency" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
                  	
              <div class="form-group">
              	<label>Sales</label>
                <input type="text" class="form-control" name="sale" placeholder="Sales" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
                  	
               <div class="form-group">
               	<h4>Buy</h4>
                <input type="text" class="form-control" name="buy" placeholder="Buy" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
    
{{--          <div >Upload Exchange rate.</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
            	<h4>Currency</h4>
              <div class="form-group col-md-12">
                <input type="text" name="name" class="form-control" id="name" placeholder="Currency" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
                  	<h4>Sales</h4>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Sales" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
                  	<h4>Buy</h4>
               <div class="form-group col-md-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Buy" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
          </form> --}}
<button type="submit" class="btn btn-primary btn-block mt-3 save-button">Save</button>
</form>
</div>
@endsection