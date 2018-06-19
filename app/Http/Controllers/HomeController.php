<?php

namespace App\Http\Controllers;
use App\Page;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Middleware\Locales;
use App\Contactinfo;

use Route;
class HomeController extends Controller
{
      public function index(Request $request){
      	return view('pages.home');
      }
      public function history(Request $request){
      $page_history = Page::where('page_id', 'history')->where('lang', (new Locales)->getCurrentLang($request) )->first();
        if(!isset($page_history))
          return redirect()->route('home');
        return view('pages.profile.history.index', compact("page_history", "page_history"));
          
      }
       public function vision_mission(Request $request){
        $page_vision = Page::where('page_id', 'vision-mission')->where('lang', (new Locales)->getCurrentLang($request) )->first();
        if(!isset($page_vision))
          return redirect()->route('home');
        return view('pages.profile.vision_mission.index', compact("page_vision", "page_vision"));
      }
       public function organization(Request $request){
       $page_or = Page::where('page_id', 'organization')->where('lang', (new Locales)->getCurrentLang($request) )->first();
        if(!isset($page_or))
          return redirect()->route('home');
        return view('pages.profile.organization.index', compact("page_or", "page_or"));
      }

       public function about(Request $request){
        $about = Page::where('page_id', 'about')->where('lang', (new Locales)->getCurrentLang($request))->first();
        if(!isset($about))
          return redirect()->route('home');
      	return view('pages.about.index', compact("about"));
      }
         public function service(Request $request){
          $services = Service::where('lang', (new Locales)->getCurrentLang($request))->get();
      	return view('pages.services.index', compact("services"));
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
          return view('pages.finance.currency.index');
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

      public function contact(){
        $contactinfo = Contactinfo::first();
          return view('pages.contact.index', compact('contactinfo'));
}
      public function servicedetail(Request $request, $id){
        $service_detail = Service::where('service_key', $id)
        ->where('lang', (new Locales)->getCurrentLang($request) )->first();
        if(!isset($service_detail)) return redirect()->route('home');
        return view('pages.services.servicedetail', compact('service_detail'));
      }

}
