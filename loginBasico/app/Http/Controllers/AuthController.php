<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        if(Auth::check()){
            return view('modules/all/index');
        }
        return view('modules/auth/login');
    }
    public function logear(Request $request)
    {
        $credenciales = $request->only("name", "password");
        if (Auth::attempt($credenciales)) {
            return redirect()->route('users');
        }else{
            return back()->withInput($credenciales);
        }
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
    public function agregarNuevo(){
        $item = new User();
        $item->name = 'Fer';
        $item->password = Hash::make('12345');
        $item->save();
        return $item;
    }
    public function __construct(){
        $this->middleware(['auth'])->only(['inSession']);
    }
    public function inSession(){
        return view('modules/all/index');        
    }

}
