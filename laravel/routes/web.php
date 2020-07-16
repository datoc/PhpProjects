<?php
    Route::get("/", "HomeController@Admin")->name("main");
    Route::get("/add", "HomeController@Add")->name("home");
    Route::post("/insert", "HomeController@insert");
    Route::get("/delete/{id}", "HomeController@Delete");
    Route::get("/mail", "HomeController@Mail");

    Route::get("/test", "HomeController@TestFunction");
?>