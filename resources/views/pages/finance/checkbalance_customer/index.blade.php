@extends('pages.main')
@section('content')
@section ('title' , 'Check balance and historical customer')
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
{{--         <div class="section-header">
          <h2>Testimonials</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>

            <div class="testimonial-item">
              <p>
                <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
              </p>
              <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>

        </div>--}}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<h2>Responsive Table</h2>
<h6>If you have a table that is too wide, you can add a container element with overflow-x:auto around the table, and it will display a horizontal scroll bar when needed.</h6>
<p>Resize the browser window to see the effect. Try to remove the div element and see what happens to the table.</p>

  <div class="limiter">
    <h2>Check your ability/ ຄິດໄລ່ເງິນກູ້ຢືມ ແລະ ຄວາມສາມາດການຢືມ.</h2>
    <div>
      <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</p>
    </div>
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table id ="idtable">
            <thead>
              <tr class="table100-head">
                <th class="column1">Date</th>
                <th class="column2">Order ID</th>
                <th class="column3">Name</th>
                <th class="column4">Price</th>
                <th class="column5">Quantity</th>
                <th class="column6">Total</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <td class="column1">2017-09-29 01:22</td>
                  <td class="column2">200398</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-28 05:57</td>
                  <td class="column2">200397</td>
                  <td class="column3">Samsung S8 Black</td>
                  <td class="column4">$756.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$756.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-26 05:57</td>
                  <td class="column2">200396</td>
                  <td class="column3">Game Console Controller</td>
                  <td class="column4">$22.00</td>
                  <td class="column5">2</td>
                  <td class="column6">$44.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-25 23:06</td>
                  <td class="column2">200392</td>
                  <td class="column3">USB 3.0 Cable</td>
                  <td class="column4">$10.00</td>
                  <td class="column5">3</td>
                  <td class="column6">$30.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-24 05:57</td>
                  <td class="column2">200391</td>
                  <td class="column3">Smartwatch 4.0 LTE Wifi</td>
                  <td class="column4">$199.00</td>
                  <td class="column5">6</td>
                  <td class="column6">$1494.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-23 05:57</td>
                  <td class="column2">200390</td>
                  <td class="column3">Camera C430W 4k</td>
                  <td class="column4">$699.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$699.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-22 05:57</td>
                  <td class="column2">200389</td>
                  <td class="column3">Macbook Pro Retina 2017</td>
                  <td class="column4">$2199.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$2199.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-21 05:57</td>
                  <td class="column2">200388</td>
                  <td class="column3">Game Console Controller</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-19 05:57</td>
                  <td class="column2">200387</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-18 05:57</td>
                  <td class="column2">200386</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-22 05:57</td>
                  <td class="column2">200389</td>
                  <td class="column3">Macbook Pro Retina 2017</td>
                  <td class="column4">$2199.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$2199.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-21 05:57</td>
                  <td class="column2">200388</td>
                  <td class="column3">Game Console Controller</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-19 05:57</td>
                  <td class="column2">200387</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                <tr>
                  <td class="column1">2017-09-18 05:57</td>
                  <td class="column2">200386</td>
                  <td class="column3">iPhone X 64Gb Grey</td>
                  <td class="column4">$999.00</td>
                  <td class="column5">1</td>
                  <td class="column6">$999.00</td>
                </tr>
                
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
    </style>
@endsection