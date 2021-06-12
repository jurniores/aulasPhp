<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create(Request $req){
        $hash = Hash::make('password', [
            'name' => $req->name,
            'email' => $req->email,
        ]);

        $user = User::create(['name'=>$req->name, 'email'=> $req->email, 'password'=>password_hash($req->password, PASSWORD_DEFAULT)]);

            $user->remember_token = $hash;
            $user->save();
        return response()->json([$user, $user->remember_token]);

    }
    public function show($id){
        $user = User::where('remember_token', $id);


        /*if(Hash::check($user->remember_token, $hashCompare)){
            return response()->json('São iguais');
        }*/
        return response()->json($user);

    }
    public function index(){
        return User::all();
    }
}
