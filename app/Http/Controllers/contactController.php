<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Validator;
use Mail;

class contactController extends Controller
{
    public function index(Request $request){
    $rules = array('name' => 'required|max:255', 'subject' => 'required|max:255', 'email' => 'required|email', 'phone' => 'digits_between:7,15', 'message' => 'required');
    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
    return response()->json([
    'status' => 'failed'
    ]);
    }
    Mail::send('emails.contact', ['subject' => $request->subject, 'sender' => $request->email, 'sender_name' => $request->name, 'coco' => $request->message, 'phone' => $request->phone], function($mail)use($request){
      $mail->from($request->email);
      $mail->to('faisal-2052@hotmail.com');
      $mail->subject($request->subject);

    });
    if(Mail::failures()){
      return response()->json([
        'status' => 'failed'
      ]);
    }
    return response()->json([
    'status' => 'passed'
    ]);
    }
}
