<?php

namespace App\Http\Controllers;

use App\Mail\reclamo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function welcome () {
        return view('welcome');
    }

    public function contattaci () {
        return view('contattaci');
    }
    public function contattaci_submit(Request $request){
        $email= $request->input('email');
        $name= $request->input('name');
        $text= $request->input('text');

        Mail::to($email)->send(new reclamo);
        return redirect(route('reclamo_sorry'));
    }

    public function reclamo_sorry(){

        return view('reclamo_sorry');
    }

}
