<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
class RegisterController extends Controller
{
    //
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        dd($request);

        $usuario =  Usuario::create($request->validated());
           // $input = $request->all();
           // $input['usu_contrasena'] = Hash::make($input['usu_contrasena']);
           // $user = Usuario::create($input);
           // $usuario = new Usuario;
           // $usuario->usu_nombres = $request->usu_nombres;
           // $usuario->usu_apellidos = $request->usu_apellidos;
           // $usuario->usu_correo = $request->usu_correo;
           // $usuario->usu_contrasena = Hash::make($request->usu_contrasena);
           // $usuario->usu_cedula = $request->usu_cedula;
           // $usuario->save();
        return redirect('/login')->with('success', 'Si sirve xd');
    }
}
