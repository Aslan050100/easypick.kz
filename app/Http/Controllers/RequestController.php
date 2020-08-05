<?php

namespace App\Http\Controllers;

use App\Zapros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class RequestController extends Controller
{
    //
    public function getInfo(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $text = $request->text;
        $zapros = new Zapros;
        $zapros->name = $name;
        $zapros->phone = $phone;
        $zapros->message = $text;
        $zapros->save();
        $to_name = 'Аслан Айткулов';
        $to_email = 'easypick.kz@gmail.com';
        $data = array('name'=>$name,'phone'=>$phone,'text'=>$text);
        Mail::send('mail',$data,function ($message) use ($to_name,$to_email){
            $message->to($to_email)
                ->subject('Feedback Easypick');
        });
        return redirect()->back();

    }
}
