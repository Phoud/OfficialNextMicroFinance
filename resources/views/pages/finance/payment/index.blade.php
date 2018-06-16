@extends('pages.main')
@section('content')
@section ('title' , 'Finance')
<section id="intro" >
 <div class="container">

    <div class="intro-content">
      <h2> ຊ່ອງທາງໃນການຈ່າຍຄືນເງິນກູ້ <span>/How to Payment</span></h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>
    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('{{url('/')}}/img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('{{url('/')}}/img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('{{url('/')}}/img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('{{url('/')}}/img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('{{url('/')}}/img/intro-carousel/5.jpg');"></div>
    </div>
  </div>
  </section>

              
        <section id="about">
           <div class="container">
      <div class="row">
          <div>
           <h2 class="l-lg-6">How to Payment/ທ່ານ ສາມາດຈ່າຍເງິນກູ້ຄືນໃຫ້ສະຖາບັນໄດ້ດັ່ງນີ້:</h2>
          </div>
          <div class="img-responsive">
            <img src="{{url('/')}}/img/staff.jpg" alt="">
          </div>        
          <div class="col-lg-6 content">
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
            <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

            <ul>
              <h4><i class="ion-android-checkmark-circle"></i> 1. ທ່ານ ສາມາດຈ່າຍເງິນກູ້ຄືນໃຫ້ສະຖາບັນໄດ້ດັ່ງນີ້:.</h4>
              <h4><i class="ion-android-checkmark-circle"></i> 2. ຈ່າຍຜ່ານລະບົບ ATM ປະຕິບັດຕາມຂັ້ນຕອນທີ່ລະບຸໄວ້ໃນລະບົບ ATM .</h4>
               <li> ເຂົ້າບັນຊີສະຖາບັນຢຸ່ທະນາຄານ</li>
               <p> - ທະນາຄານການຄ້າຕ່າງປະເທດລາວ ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານພັດທະນາລາວ   ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານຮ່ວມພັດທະນາ    ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານພົງສະຫວັນ    ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານ STB     ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານ Acleda Lao    ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
                - ທະນາຄານສົ່ງເສີມກະສິກຳ   ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001
              </p>
               <h4><i class="ion-android-checkmark-circle"> 3.ຈ່າຍຜ່ານລະບົບ internet-banking ທຸກທະນາຄານ </i></h4>
               <li>ເຂົ້າບັນຊີສະຖາບັນຢຸ່ທະນາຄານ</li>
              <p>- ທະນາຄານການຄ້າຕ່າງປະເທດລາວ ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001 <br>
                 - ທະນາຄານພັດທະນາລາວ   ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001<br>
                 - ທະນາຄານຮ່ວມພັດທະນາ    ເລັກບັນຊີ 010xxxxxxxxxxxxxxx001</p>
            </ul>
          </div>
        </div>
</div>
      </section>
@endsection