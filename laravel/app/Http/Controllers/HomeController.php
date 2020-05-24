<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Mail;

class HomeController extends Controller
{
    public function Mail() {
        
        Mail::send([], [], function($message) {
            $message->to("chechelashvili2013@mail.ru", "Title")->subject("Hello");
            $message->from("chechelashvili.dato111@gmail.com", "daka");
        });
        echo "ok";
    }

    public function Admin(Request $request) {
        $data = DB::select("SELECT * FROM users");
        return view("admin", ["data" => $data]);
    }

    public function Delete($id) {
        $del = DB::table("users")->where("id", $id)->delete();
        if($del) return redirect()->route("main");
        else echo "Not deleted";
    }

    public function Add() {
        return view("add");
    }

    public function insert(Request $request) {
        $avatar = $request->file("avatar");
        $name = $request->input("name");
        $lastname = $request->input("lastname");
        $email = $request->input("mail");
        $password = $request->input("password");

        $this->validate($request, [
            "avatar" => "required",
            "name" => "required|max:30",
            "lastname" => "required|max:30",
            "mail" => "required|max:40",
            "password" => "required|max:10|min:4"
        ]);

        $insert = DB::table("users")->insert([
            "avatar" => $avatar->getClientOriginalName(),
            "name" => $name,
            "lastname" => $lastname,
            "email" => $email,
            "password" => $password
        ]);

        $avatar->move("images", $avatar->getClientOriginalName());
        return redirect()->route("main");
    }
}