@extends('pages.main')
@section('content')
@section ('title' , 'About')
    <section id="about" class="about-us">
      <div class="container">
        <div id ="content">                 
      <h3 class="shvb" itemprop="name">ກ່ຽວກັບພວກເຮົາ About Us</h3>
<img id="img" src="img/Nextlogo.jpg" alt="">
<h3 class="description">ທະນາຄານກຸງສີອະຍຸດທະຍາ ຈໍາກັດ (ມະຫາຊົນ) “ກຸງສີ” ໄດ້ເປີດປະຕູສູ່ຕະຫລາດ ສປປ ລາວ ຕັ້ງແຕ່ປີ 1994 ໂດຍ ເປີດສາຂາແຫ່ງທໍາອິດຂອງຕົນ ຢູ່ທີ່ນະຄອນຫລວງວຽງຈັນ, ຫລັງຈາກນັ້ນ ຕໍ່ມາໃນປີ 2009 ກໍ່ໄດ້ເປີດສາຂາແຫ່ງທີ່ສອງ ຢູ່ທີ່ແຂວງສະຫວັນນະເຂດ.<br>
Bank of Ayudhya PLC “Krungsri” opened its door in Lao PDR in 1994, with its first branch opened in Vientiane in 1994 followed by the second branch in Savannakhet in 2009.<br>
</h3>
<div class="cul">
  <div><p>
  ທະນາຄານກຸງສີໄດ້ເລີ່ມໃຫ້ບໍລິການທາງດ້ານທຸລະກິດການທະນາຄານ ຢ່າງຫລາກຫລາຍ&nbsp; ແກ່ລູກຄ້າ ທັງພາຍໃນ ແລະ ຕ່າງປະເທດ ນັບແຕ່ປີ 1994. ທະນາຄານກຸງສີ ຊ່ຽວຊານໃນການ ສະໜອງສິນເຊື່ອໃຫ້ແກ່ທຸລະກິດລາຍໃຫຍ່ ໃນສາມສະກຸນເງິນຄື: ກີບ, ໂດລາ ແລະ ບາດ, ລວມທັງການໃຫ້ບໍລິການທາງດ້ານເງິນຝາກ, ທຶນໝູນວຽນ, ການຈັດຫາເງິນທຶນທັງ ໄລຍະສັ້ນເຖິງຍາວ, ແລກປ່ຽນເງິນຕາຕ່າງປະເທດ (ທຸກສະກຸນເງິນ), ທຸລະກິດຕ່າງປະເທດ, ການຊຳລະທົ່ວໂລກ, ຜະລິດຕະພັນທາງດ້ານການເງິນຕ່າງໆ, ຈ່າຍເງິນເດືອນ ແລະ ບໍລິການໃຫ້ຄໍາປຶກສາທາງດ້ານການເງິນ.<br>
  Krungsri has been offering a wide range of banking services to our domestic and international client since 1994. We specialize in providing corporate banking solutions in three major currencies LAK , USD, and THB, including deposits, working capital, short to long term financing, foreign currency exchange (all major currencies), trade services, global payment, treasury products, payroll and consultancy services.<br>
  &nbsp;</p>
</div>
{{--   <h3 class="kssb Tmgtw" itemprop="description">ທະນາຄານກຸງສີອະຍຸດທະຍາ ຈໍາກັດ (ມະຫາຊົນ) “ກຸງສີ” ໄດ້ເປີດປະຕູສູ່ຕະຫລາດ ສປປ ລາວ ຕັ້ງແຕ່ປີ 1994 ໂດຍ ເປີດສາຂາແຫ່ງທໍາອິດຂອງຕົນ ຢູ່ທີ່ນະຄອນຫລວງວຽງຈັນ, ຫລັງຈາກນັ້ນ ຕໍ່ມາໃນປີ 2009 ກໍ່ໄດ້ເປີດສາຂາແຫ່ງທີ່ສອງ ຢູ່ທີ່ແຂວງສະຫວັນນະເຂດ.<br>
Bank of Ayudhya PLC “Krungsri” opened its door in Lao PDR in 1994, with its first branch opened in Vientiane in 1994 followed by the second branch in Savannakhet in 2009.<br>
     </h3> --}}
     </div>
      </div>
      <div>
         {{!!isset($page_about_en) ? $page_about_en->content : ""}}
      </div>
    </div>
</section>

<style type="text/css" media="screen">
#about {
  margin-left: 50px;
  margin-right: 50px;
  margin-top: 10px;
}

#content {

  margin-top: -60px;
}

.description {
    font-size: 24px;
}

p{
  font-size: 18px;
  color:#000px;
  text-indent: 4px;
}
#img {
  margin-top: 5px;
  height: 450px;
  max-width: 1100px;
  width: 100%;
  height: auto;
}
/*.sidebar {
  background-color: #333;
  width: 100%;
  height: 100%;
  width: 100px;
  height: 300px;
}*/

aside.left-panel {
  background: #272c33;
  display: table-cell;
  height: 100vh;
  min-height: 100%;
  padding: 0 25px;
  vertical-align: top;
  width: 200px;
  transition: width 0.3s ease; }
  .navbar {
  background: #272c33;
  border-radius: 0;
  border: none;
  display: block;
  margin: 0;
  margin-bottom: 100px;
  padding: 0; }
  .navbar .menu-title {
    border-bottom: 1px solid #4e4e52;
    color: #9496a1;
    clear: both;
    display: block;
    font-family: 'Open Sans';
    font-size: 14px;
    font-weight: 700;
    line-height: 50px;
    padding: 15px 0 0 0;
    text-transform: uppercase;
    width: 100%; }
  
</style>



</style>
</section>

    	@endsection