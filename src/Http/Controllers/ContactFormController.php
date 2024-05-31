<?php

namespace laranew\Contactform\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use laranew\Contactform\Models\Contacts;
use laranew\Contactform\Mail\InquiryEmail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends BaseController{

    public function create(){
        return view('contactform::create');
    }

    public function store(Request $request){
        // return $request->all();
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',

        ]);

        Contacts::create($validated);

        // $admin_email = \config('contactform.admin_email');
        // if($admin_email === null || $admin_email === ''){
        //     echo 'admin email is not set';
        // }else{
        //     Mail::to($admin_email)->send(new InquiryEmail($validated));
        // }

        return back()->with('success','Mail send successfully');

    }
}