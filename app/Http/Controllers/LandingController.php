<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Contacto;

class LandingController extends Controller
{    
    public function index()
    {
        return view('welcome');
    }
    
    public function sendMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'email' => 'required|email',
            'phone' => 'nullable|max:12',
            'message' => 'required',
        ]);
        
        //$datos = Contacto::create($request->all());
            echo 'good job mate';
        //Mail::to($request->user())->send(new OrderShipped($order));  

        return $datos;
    }
}
