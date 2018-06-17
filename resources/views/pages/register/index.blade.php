@extends('pages.main')
@section('content')
@section ('title' , 'Register')
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Register</h2>
          <h4>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</h4>
        </div>
        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
                 <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" id="password" placeholder="Your password" data-rule="email" data-msg="Please enter your password" />
                <div class="validation"></div>
              </div>
               <div class="form-group col-md-6">
                <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Your password" data-rule="email" data-msg="Please confirm your passowrd" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->
@endsection