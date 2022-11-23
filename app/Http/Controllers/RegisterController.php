<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\usuario;
class RegisterController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        dd($request);
        $usuario = usuario::create($request->validate());
    }
}
