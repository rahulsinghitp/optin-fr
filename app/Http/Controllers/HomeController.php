<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormSendMail;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function sendMail(Request $request){
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'postal_code' => 'required',
            'city'=>'required',
            'confirm_1'=>'required',
            'office_address_1' => 'required'
        ]);
        
        $details = [
            'salutation' => $request->get('salutation'),
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'office_address_1' => $request->get('office_address_1'),
            'office_address_2' => $request->get('office_address_2'),
            'city' => $request->get('city'),
            'province' => $request->get('province'),
            'postal_code' => $request->get('postal_code'),
            'speciality' => $request->get('speciality'),
            'email' => $request->get('email'),
        ];
        Mail::to('kumarsaurav06266@gmail.com')->send(new FormSendMail($details));
        return view('success');
    }
}
