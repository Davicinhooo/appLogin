<?php

namespace App\Http\Controllers;
use App\Models\Careers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        $careers = Careers::all();
        return view("register", compact("careers"));
    }

    public function store(Request $request){
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|unique:users,email|max:255",
            "password" => "required|min:8|confirmed",
            "career_id" => "required|exists:careers,id",
            "terms_accepted" => "required|string|max:255",
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "career_id" => $request->career_id,
            "terms_accepted" => $request->has("terms_accepted"),
        ]);
        return redirect()->route("register")->with("success", "Usuario registrado exitosamente.");
    }
}
