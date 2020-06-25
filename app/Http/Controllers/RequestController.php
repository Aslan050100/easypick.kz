<?php

namespace App\Http\Controllers;

use App\Zapros;
use Illuminate\Http\Request;


class RequestController extends Controller
{
    //
    public function getInfo(Request $request){
        $name = $request->name;
        $phone = $request->phone;
        $zapros = new Zapros;
        $zapros->name = $name;
        $zapros->phone = $phone;
        $zapros->save();
        return 'Successful!!';

    }
}
