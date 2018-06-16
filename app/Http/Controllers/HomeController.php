<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;
use Route;
use App\Exchange;
class HomeController extends Controller
{
      public function index(Request $request){
      	return view('pages.home');
      }
      public function history(Request $request){
      $histories = Page::where('page_id', 'history')->get();
      $page_history_la = null;
      $page_history_en = null;
      foreach ($histories as $key => $history) {
      if($history->lang==="la"){
        $page_history_la = Page::find($history->id);
      }else{
        $page_history_en = Page::find($history->id);
      }
      }
      return view('pages.profile.history.index', compact("page_history_la", "page_history_en"));
          
      }
       public function vision_mission(Request $request){
          return view('pages.profile.vision_mission.index');
      }
       public function organization(Request $request){
          return view('pages.profile.organization.index');
      }

       public function about(Request $request){
      	return view('pages.about.index');
      }
         public function service(Request $request){
      	return view('pages.services.index');
      }
      //finance 
       public function finance(Request $request){
          return view('pages.finance.index');
        }

      public function credit_ability(Request $request){
          return view('pages.finance.credit-ability.index');
        }
          public function checkbalance(Request $request){
          return view('pages.finance.checkbalance_customer.index');
      }
        public function credit(Request $request){
          return view('pages.finance.credit.index');
      }
        public function currency(Request $request){
          $exchange = Exchange::all();
          return view('pages.finance.currency.index')->with('ex', $exchange);
      }
       public function payment(Request $request){
          return view('pages.finance.payment.index');
      }


      public function register(Request $request){
          return view('pages.register.index');
      
      }
       public function activity(Request $request){
          return view('pages.activity.index');
      }

      public function contact(Request $request){
          return view('pages.contact.index');
}

}
