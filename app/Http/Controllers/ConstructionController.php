<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notify;
use Session;
use Artesaos\SEOTools\Facades\SEOTools;

class ConstructionController extends Controller
{
    //
    public function email(Request $req){

        $email = $req->email;
        if($email == null){
            Session::flash('message', "Введите адрес электронной почты");
            return redirect()->back();
        }else{
            $notify  = new Notify;
            $notify->email = $email;
            $notify->save();
            Session::flash('message', "Мы вам сообщим!");
            return redirect()->back();
        }


    }
    public function index(){
        SEOTools::setTitle('Easypick.kz');
        SEOTools::setDescription('Разработка сайтов в Актобе');
        SEOTools::opengraph()->setUrl('http://easypick.kz');
        SEOTools::opengraph()->addProperty('type', 'articles')  ;
        SEOTools::twitter()->setSite('@Aslan050100');
        SEOTools::jsonLd()->addImage('https://easypick.kz/assets/images/logo.jpg');
        return view('welcome');
    }
}
