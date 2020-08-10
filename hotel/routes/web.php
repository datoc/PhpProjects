<?php
    Route::get("/", "HotelController@Index")->name("home");
    Route::get("/admin", "HotelController@Admin");
    Route::get("/news", "HotelController@News");
    Route::get("/accomodation", "HotelController@Acc");
    Route::get("/contact", "HotelController@Contact");
    
    Route::post("/insert", "HotelController@Insert");
    Route::post("/subscribe", "HotelController@subscribe");
    Route::post("/send", "HotelController@send");
    Route::post("/addroom", "HotelController@addroom");
?>