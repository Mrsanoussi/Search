<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function sportschoolfilter(){
        return sportschools::all();
    }
    public function allposts(Request $request){
        if(!empty($request->sportschool)){
            $data = news::whereIn('sportschool_id',$request->sportschool)->paginate(8);
            return response()->json($data);
        }
        $data = news::paginate(8);
        return response()->json($data);
    } 
}
