<?php

namespace App\Http\Controllers;

use app\Models\Careers;
use app\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $careers = Careers::all();
        return view("register", compact("careers"));
    }

    public function store(Request $request){
        $request->validated([
            "name" => "required|string|max:255",
            "email" => "required|unique:user,email|max:255",
            "password" => "required|min:8|confirmed",
            "carrer_id" => "required|exists:careers_id",
            "terms_accepted" => "required|string|max:255",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "carrer_id" => $request->career_id,
            "terms_accepted" => $request->has("terms_accepted"),
        ]);
        return redirect()->route("register")->with("success", "Usuario registrado exitosamente.");
    }
}
