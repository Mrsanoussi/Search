<?php

namespace App\Http\Controllers;

use App\Sportschool;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    public function sportschoolfilter(Request $request, Sportschool $sportschool)
    {
        // Search for a user based on their name.
    if ($request->has('name')) {
        return $user->where('name', $request->input('name'))->get();
    }

    // Search for a user based on their city.
    if ($request->has('place')) {
        return $user->where('place', $request->input('place'))->get();
    }

    // Continue for all of the filters.

    // No filters have been provided, so
    // let's return all users. This is
    // bad - we should paginate in
    // reality.
    return Sportschool::all();
    }
}
