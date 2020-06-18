<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notify;
use Session;

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
        return view('welcome');
    }
}
