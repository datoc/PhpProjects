<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\News;
use App\Rooms;
use DB;

class HotelController extends Controller {
    public function Index() {
        $data = News::orderBy("id", "DESC")->limit(3)->get();
        return view("index", ["data" => $data]);
    }

    public function Admin() {
        return view("add");
    }

    public function Acc() {
        $rooms = Rooms::orderBy("id", "DESC")->get();
        return view("accomodation")->with("rooms", $rooms);
    }

    public function Contact() {
        return view("contact");
    }

    public function Insert(Request $request) {
        $file = $request->file("img");
        $description = $request->input("desc");
        $date = $request->input("date");

        $this->validate($request, [
            "desc" => "required|max:200|min:40",
            "date" => "required|max:20|min:4",
            "img" => "required"
        ]);

        try {
            $news = new News();
            $news->image = $file->getClientOriginalName();
            $news->description = $description;
            $news->date = $date;
            $news->save();

            $file->move("img", $file->getClientOriginalName());
            return redirect("/admin")->with("adds", 1);
        }catch(Exception $e) {
            return redirect("/admin")->with("adds", 0);
        }
    }

    public function subscribe(Request $request) {
        $email = $request->input("email");
        $ins = DB::insert("INSERT INTO newsletter (email) VALUES('$email')");
        if($ins) return redirect()->route("home");
    }

    public function News() {
        $data = News::orderBy("id", "DESC")->paginate(15);
        return view("news", ["data" => $data]);
    }

    public function send(Request $request) {
        $fn = $request->input("fn");
        $email = $request->input("email");
        $subject = $request->input("subject");
        $msg = $request->input("msg");

        Mail::send([], [], function($message) {
            $message->to("info@hotel.com", "Email info");
            $message->from($email, "Hotel");
            $message->subject($subject);
            $message->body($msg);
        });
        return redirect("/contact");
    }

    public function addroom(Request $request) {
        if($request->has("room")) {
            $title = (string)$request->input("title");
            $persons = (int)$request->input("persons");
            $size = (string)$request->input("size");
            $view = (string)$request->input("view");
            $price = (int)$request->input("price");
            $image = $request->file("img");

            $this->validate($request, [
                "title" => "required|min:4",
                "persons" => "required",
                "size" => "required",
                "view" => "required",
                "price" => "required",
                "img" => "required"
            ]);

            try {
                $room = new Rooms();
                $room->persons = $persons;
                $room->size = $size;
                $room->view = $view;
                $room->price = $price;
                $room->image = $image;
                $room->save();

                $image->move("img", $image->getClientOriginalName());
                return redirect("/admin")->with("add", 1);
            }catch (Exception $e){
                return redirect("/admin")->with("add", 0);
            }
        }
    }
}