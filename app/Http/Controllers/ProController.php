<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pro;

class ProController extends Controller
{

    public function showAll()
    {
        return view("products.showall");
    }


    public function getAll(Request $request)
    {
        $selector  = Pro::paginate(10);
        return response()->json([
            'response' =>$selector
        ]);
    }

    public function getBrands(Request $request)
    {
        $selector  = Pro::where('brand')->distinct()->get();
        return response()->json([
            'response' =>$selector
        ]);
    }


    public function getCategories(Request $request)
    {
        $selector  = Pro::select('*')->orderBy('id')->groupBy("brand")->get();
        return response()->json([
            'response' =>$selector
        ]);
    }
}
