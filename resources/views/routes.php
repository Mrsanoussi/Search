<?php

use Illuminate\Http\Request;

Route::get('/', function(Request $request){


    $sportschools = Sportschool::where(function($query){

        $min_price = Input::has('min_price') ? Input::get('min_price') : null;
        $max_price = Input::has('max_price') ? Input::get('max_price') : null;

        $sportschoolen = Input::has('sportscholen') ? Input::get('sportscholen') : [];

        if(isset($min_price) && isset($max_price)){
            $query->where('price', '>=' , $min_price)
                    ->where('price', '<=' , $max_price);
        }

    })->get();

    return View::make('/',compact(['sportschools']));
});