<?php

namespace App\Http\Middleware;
use Closure, App, Session;

class Locales
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->exists('lang')){
            $lang = $request->input('lang');
            $lang = $this->exists($lang)? $lang :'en';
            App::setLocale($lang);
            session::put('lang',$lang);
        }else{
            $lang = Session::has('lang') ? Session::get('lang') : 'en';
            App::setLocale($lang);
        }
        return $next($request);
    }

    public function exists($val){
        $exists =false;
        switch($val){
            //swith other langauges
            case 'la':
            case 'en':
               $exists =true;
               break;
            default;
               $exists =false;
               break;
        }
        return $exists;

    }
}

