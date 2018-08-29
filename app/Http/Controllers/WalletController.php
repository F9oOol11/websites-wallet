<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Wallet;

class WalletController extends Controller
{
    public function add_new(Request $request)
    {
      $this->validate($request, [
        'link' => 'required|max:500|without_spaces',
        'web_name' => 'required|max:255'
      ]);
      $web = new Wallet;
      $web->user_id = auth()->user()->id;
      $web->web_link = $request->link;
      $web->web_name = $request->web_name;
      $web->save();
      return redirect('/home')->with('success', 'تم اضافة الموقع بنجاح');
    }
}
