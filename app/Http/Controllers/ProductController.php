<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function make(Request $request)
    {
        
        return view("products.make");

    }


    public function create(Request $request)
    {

        if (isset(Auth::user()->id)){
            $valid = Validator::make($request->all(),[
                'desc' => "string | required | max:100",
            ]);

            if ($valid->fails()){
                return $this->catchErrors([
                    "desc" => $valid->errors()
                ]);
            }

            Product::create([
                'desc' =>$request->desc
            ]); 
            return $this->success();
        }else{

        }
    }

    public function show(Request $request)
    {
        
        return view("products.show");

    }

    public function showProducts(Request $request)
    {
       if (isset(Auth::user()->id)){
            return response()->json([
                "status" =>"success",
                "response" =>Product::all()
            ],200);
       }else{
            return $this->catchErrors([
                "response" =>"The user Unauthentication"
            ],401);
       }
    }


    public function success()
    {
        return response()->json([
            "status" =>"success",
            "code"   =>200,
            "response"=>[]
        ],200);
    }

    public function catchErrors(array $errors)
    {
       return response()->json([
            "status" =>"error",
            "code"   =>401,
            "response"=>$errors
       ],401);
    }


   

}
