<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Perfil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //si el Gate no lo permite, sacar al usuario de acá
        if(Gate::denies(''))
        {
            return redirect()->route('home.index');
        }

        $usuarios = Usuario::orderBy('perfil_id')->orderBy('email')->get();
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $perfiles = Perfil::all();
        return view('usuarios.create',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfil $perfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perfil $perfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perfil $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfil $perfil)
    {
        //
    }

    public function login()
    {
        return view('usuarios.login');
    }

    public function autenticar(Request $request)
    {
        $credenciales = ['email'=>$request->email,'password'=>$request->password];

        if(Auth::attempt($credenciales))
        {
            //credenciales correctas
            $request->session()->regenerate();
            return redirect()->route('home.index');
        }
        return back()->withErrors('Credenciales incorrectas :(')->onlyInput('email');
    }

    //cerrar sesión
    public function logout()
    {
        Auth::logout();
        return redirect()->route('usuarios.login');
    }

    //muestra página con formulario para cambiar password
    public function contrasena()
    {
        return view('usuarios.contrasena');
    }
}

