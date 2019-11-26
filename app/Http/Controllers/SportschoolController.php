<?php

namespace App\Http\Controllers;


use App\Category;
use App\Sportschool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;


class SportschoolController extends Controller
{
    public function index(Request $request)
    {
        if(request()->category){
            $sportschools = Category::with('sportschools')->whereHas('sportschools', function ($query){
                $query->where('name', request()->catagory)->get();
            });
            
            $categories = Category::all();
            
        } else {
            $sportschools = Sportschool::paginate(8);
            $categories = Category::all();
        }
        //dd($categories);
        //$sportschools = Sportschool::find(1);
        //$sportschools->categories()->attach(1);
        //dd($sportschools->categories);
    
       
        return view('index', [
            'sportschools' => $sportschools,
            'categories' => $categories,
            ]);
    }

    public function show(Sportschool $sportschool)
    {

        return view('app.show', ['sportschool' => $sportschool]);
    }

    public function create()
    {
        return view('app.create');
    }

    public function store(Request $request)
    {
        $sportschool = new Sportschool();
        $sportschool->name = $request->name;
        $sportschool->place = $request->place;
        $sportschool->description = $request->description;
        $sportschool->price = $request->price;
        $sportschool->showers = $request->showers;
        $sportschool->imagepath = $request->imagepath;
        $sportschool->url = $request->url;

        $sportschool->save();
        
        return redirect('index');
    }

    public function search(Request $request)
    {
        
        $sportschools = Sportschool::where('name', 'LIKE', '%' .$request->search. '%')
                                ->orWhere('place', 'LIKE','%' .$request->search. '%')->get();
        

        //dd($sportschool);
        

        return view('search', ['sportschools' => $sportschools]);
    }


    protected function validateArticle()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'showers' => 'required',
            'price' => 'required',
            'imagepath' => 'required',
            'url' => 'required'
        ]);
    }
}
