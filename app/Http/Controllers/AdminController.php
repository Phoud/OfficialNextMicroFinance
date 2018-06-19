<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Contactinfo;

class AdminController extends Controller
{
    public function index(){
    	return view('admins.index');
    }

public function history(){
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
      return view('admins.pages.profile.history', compact("page_history_la", "page_history_en"));
     }
    
public function vision_mission(){
        $visions = Page::where('page_id', 'vision-mission')->get();
        $page_vision_la = null;
        $page_vision_en = null;
        foreach ($visions as $key => $vision) {
        if($vision->lang==="la"){
        $page_vision_la = Page::find($vision->id);
        }else{
        $page_vision_en = Page::find($vision->id);
        }
        }
        return view('admins.pages.profile.vision_mission', compact("page_vision_la", "page_vision_en"));
        }

 public function organization(){
          $organizations = Page::where('page_id', 'organization')->get();
          $page_organization_la = null;
          $page_organization_en = null;
          foreach ($organizations as $key => $organization) {
          if($organization->lang==="la"){
          $page_organization_la = Page::find($organization->id);
          }else{
          $page_organization_en = Page::find($organization->id);
          }
          }
          return view('admins.pages.profile.organization', compact("page_organization_la", "page_organization_en"));
}

    //Fiance
 public function finance(){
      return view('admins.pages.finance.index');
    }
      public function credit_ability(){

      return view('admins.pages.finance.credid-ability');
    }


    
     public function checkbalance(){
      return view('admins.pages.finance.checkbalance');
    }

 public function credit(){
        $credits = Page::where('page_id', 'credit')->get();
        $page_credit_la = null;
        $page_credit_en = null;
        foreach ($credits as $key => $credit) {
        if($credit->lang==="la"){
        $page_credit_la = Page::find($credit->id);
        }else{
        $page_credit_en = Page::find($credit->id);
        }
        }
        return view('admins.pages.finance.credit', compact("page_credit_la", "page_credit_en"));
}

public function payment(){
        $payments = Page::where('page_id', 'payment')->get();
        $page_payment_la = null;
        $page_payment_en = null;
        foreach ($payments as $key => $payment) {
        if($payment->lang==="la"){
        $page_payment_la = Page::find($payment->id);
        }else{
        $page_payment_en = Page::find($payment->id);
        }
        }
        return view('admins.pages.finance.payment', compact("page_payment_la", "page_payment_en"));
    }

public function currency(){
        $currencies = Page::where('page_id', 'currency')->get();
        $page_currency_la = null;
        $page_currency_en = null;
        foreach ($currencies as $key => $currency) {
        if($currency->lang==="la"){
        $page_currency_la = Page::find($currency->id);
        }else{
        $page_currency_en = Page::find($currency->id);
        }
        }
        return view('admins.pages.finance.currency', compact("page_currency_la", "page_currency_en"));
     }

public function service(){
        $services = Service::where('lang', 'la')->get();
       
        return view('admins.pages.services.service', compact("services"));
        }

public function contact(){
  $contactinfo = Contactinfo::first();
  return view('admins.pages.contact.contactinfo', compact('contactinfo'));
}

public function contactPost(Request $request){
    $this->validate($request, [
      'address'=>'required',
      'phone'=>'required',
      'email'=>'required'
    ]);
    $contact = Contactinfo::all();
    if(count($contact)>0){
      $update = Contactinfo::first();
      $update->address = $request->address;
      $update->phone = $request->phone;
      $update->email = $request->email;
      $update->twitter = $request->twitter;
      $update->facebook = $request->facebook;
      $update->instagram = $request->instagram;
      $update->linkin = $request->linkin;
      $update->save();
      return back()->with('success', 'Update successful.');
    }else{
      $save = new Contactinfo;
      $save->address = $request->address;
      $save->phone = $request->phone;
      $save->email = $request->email;
      $save->twitter = $request->twitter;
      $save->facebook = $request->facebook;
      $save->instagram = $request->instagram;
      $save->linkin = $request->linkin;
      $save->save();
      return back()->with('success', 'Save successful');
    }

    }

public function about(){
      $abouts = Page::where('page_id', 'about')->get();
      $page_about_la = null;
      $page_about_en = null;
      foreach ($abouts as $key => $about) {
      if($about->lang==="la"){
        $page_about_la = Page::find($about->id);
      }else{
        $page_about_en = Page::find($about->id);
      }
      }
      return view('admins.pages.about.about', compact("page_about_la", "page_about_en"));
     }

public function PostService(Request $request){
      $this->validate($request, [
         'body_la'=> 'required',
         'body_en' => 'required',
         'service_icon' => 'required',
         'service_name_la' => 'required',
         'service_name_en' => 'required'
        ]);

        $services_la = new Service;
        $services_la->service_icon = $request->service_icon;
        $services_la->service_name = $request->service_name_la;
        $services_la->description = $request->body_la;
        $services_la->lang = "la";
        $services_la->service_key = "service_key";
        $services_la->save(); 

        $service_en = new Service;
        $service_en->service_icon = $request->service_icon;
        $service_en->service_name = $request->service_name_en;
        $service_en->description = $request->body_en;
        $service_en->service_key = "service_key";
        $service_en->lang = "en";
        $service_en->save();

        #SAVE KEY
        $services_la->service_key = $services_la->id . "_" . $service_en->id;
        $service_en->service_key = $services_la->id . "_". $service_en->id;

        $services_la->save();
        $service_en->save();

      return back()->with('success', 'Saved successfully!');
    }


public function editservice($id){
      $service_la = Service::where('lang', 'la')->where('service_key', $id)->first();
      $service_en = Service::where('lang', 'en')->where('service_key', $id)->first();
      return view('admins.pages.services.editservice', compact('service_la', 'service_en'));
}

public function editservicepost(Request $request, $id){
  $this->validate($request, [
         'body_la'=> 'required',
         'body_en' => 'required',
         'service_icon' => 'required',
         'service_name_la' => 'required',
         'service_name_en' => 'required'
        ]);
        $services_la = Service::where('lang', 'la')->where('service_key', $id)->first();
        $services_la->service_icon = $request->service_icon;
        $services_la->service_name = $request->service_name_la;
        $services_la->description = $request->body_la;
        $services_la->save(); 

        $service_en = Service::where('lang', 'en')->where('service_key', $id)->first();
        $service_en->service_icon = $request->service_icon;
        $service_en->service_name = $request->service_name_en;
        $service_en->description = $request->body_en;
        $service_en->save();
      return back()->with('success', 'Update successfully!');
}

public function serviceDelete($id){

        $delete = Service::where('service_key', $id)->delete();

        return back();
}

public function PostAbout(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $abouts = Page::where('page_id', 'about')->get();
      if(count($abouts) > 0){
        $page_about_la = null;
        $page_about_en = null;
          foreach ($abouts as $key => $about) {
             if($about->lang==="la"){
                $page_about_la = Page::find($about->id);
              }else{
                $page_about_en = Page::find($about->id);
              }
          }
        if(!isset($page_about_la) || !isset($page_about_en)) return;
        $page_about_la->content = $request->body_la;
        $page_about_la->save();

        $page_about_en->content = $request->body_en;
        $page_about_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "about";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "about";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }

  //Profile Function

public function PostHistory(Request $request){
    $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $histories = Page::where('page_id', 'history')->get();
      if(count($histories) > 0){
        $page_history_la = Page::where('page_id', 'history')->where('lang', 'la')->first();
        $page_history_en = Page::where('page_id', 'history')->where('lang', 'en')->first();
        $getimageName=null;
        if($request->hasFile('image') ){
          $this->validate($request, ['image' => 'required|sometimes|image']);
          $file = $request->file('image') ;
          $getimageName = md5(date('Y-m-d h:m:s') . microtime()) . time() . '_attach_.' . $file->getClientOriginalExtension();
          $file->move(public_path('img/image'), $getimageName);
          unlink(public_path('img/image/'. $page_history_la->image ));
        }
        $page_history_la->content = $request->body_la;
        $page_history_la->image = isset($getimageName) ? $getimageName : $page_history_la->image;
        $page_history_la->save();

        $page_history_en->content = $request->body_en;
        $page_history_en->image = isset($getimageName) ? $getimageName : $page_history_en->image;
        $page_history_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{

        $this->validate($request, ['image' => 'required|sometimes|image']);
        $file = $request->file('image') ;
        $getimageName = time().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('img/image'), $getimageName);

        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "history";
        $save->image = $getimageName;
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "history";
        $save->image = $getimageName;
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }


public function PostOrganization(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $organizations = Page::where('page_id', 'organization')->get();
      if(count($organizations) > 0){
        $page_organization_la = null;
        $page_organization_en = null;
          foreach ($organizations as $key => $organization) {
             if($organization->lang==="la"){
                $page_organization_la = Page::find($organization->id);
              }else{
                $page_organization_en = Page::find($organization->id);
              }
          }
        if(!isset($page_organization_la) || !isset($page_organization_en)) return;
        $page_organization_la->content = $request->body_la;
        $page_organization_la->save();

        $page_organization_en->content = $request->body_en;
        $page_organization_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "organization";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "organization";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }


public function PostVision(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $visions = Page::where('page_id', 'vision-mission')->get();
      if(count($visions) > 0){
        $page_vision_la = null;
        $page_vision_en = null;
          foreach ($visions as $key => $vision) {
             if($vision->lang==="la"){
                $page_vision_la = Page::find($vision->id);
              }else{
                $page_vision_en = Page::find($vision->id);
              }
          }
        if(!isset($page_vision_la) || !isset($page_vision_en)) return;
        $page_vision_la->content = $request->body_la;
        $page_vision_la->save();

        $page_vision_en->content = $request->body_en;
        $page_vision_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "vision-mission";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "vision-mission";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }

//Finance Function

public function PostCredit(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $credits = Page::where('page_id', 'credit')->get();
      if(count($credits) > 0){
        $page_credit_la = null;
        $page_credit_en = null;
          foreach ($credits as $key => $credit) {
             if($credit->lang==="la"){
                $page_credit_la = Page::find($credit->id);
              }else{
                $page_credit_en = Page::find($credit->id);
              }
          }
        if(!isset($page_credit_la) || !isset($page_credit_en)) return;
        $page_credit_la->content = $request->body_la;
        $page_credit_la->save();

        $page_credit_en->content = $request->body_en;
        $page_credit_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "credit";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "credit";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }


    public function PostPayment(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $payments = Page::where('page_id', 'payment')->get();
      if(count($payments) > 0){
        $page_payment_la = null;
        $page_payment_en = null;
          foreach ($payments as $key => $payment) {
             if($payment->lang==="la"){
                $page_payment_la = Page::find($payment->id);
              }else{
                $page_payment_en = Page::find($payment->id);
              }
          }
        if(!isset($page_payment_la) || !isset($page_payment_en)) return;
        $page_payment_la->content = $request->body_la;
        $page_payment_la->save();

        $page_payment_en->content = $request->body_en;
        $page_payment_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "payment";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "payment";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }


public function PostCurrency(Request $request){
      $this->validate($request, ['body_la'=> 'required', 'body_en' => 'required']);
      $currencies = Page::where('page_id', 'currency')->get();
      if(count($currencies) > 0){
        $page_currency_la = null;
        $page_currency_en = null;
          foreach ($currencies as $key => $currency) {
             if($currency->lang==="la"){
                $page_currency_la = Page::find($currency->id);
              }else{
                $page_currency_en = Page::find($currency->id);
              }
          }
        if(!isset($page_currency_la) || !isset($page_currency_en)) return;
        $page_currency_la->content = $request->body_la;
        $page_currency_la->save();

        $page_currency_en->content = $request->body_en;
        $page_currency_en->save();
        return back()->with('success', 'Updated Successfully!');
      }else{
        $save = new Page;
        $save->content = $request->body_la;
        $save->lang = "la";
        $save->page_id = "currency";
        $save->save();

        $save = new Page;
        $save->content = $request->body_en;
        $save->lang = "en";
        $save->page_id = "currency";
        $save->save();
      }
      return back()->with('success', 'Saved successfully!');
    }


}
