<?php
/**
 * Created by PhpStorm.
 * User: hkd
 * Date: 19.09.16
 * Time: 13:58
 */

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit($id){
        $user = User::find($id);
        return view('settings', ['user' => $user]);
    }

    public function update($id, Request $request){
        $user = User::find($id);
        $user->token = $request->token;
        $user->save();
        return redirect('/');
    }

}