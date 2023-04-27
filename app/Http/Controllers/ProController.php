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
        $selector  = Pro::select('*')->orderBy('id')->distinct()->get();
        return response()->json([
            'response' =>$selector
        ]);
    }


    public function search(Request $request)
    {
       
        if (empty($request->search)){
           
                if (
                    $request->cate1 != null ||
                    $request->cate4 != null ||
                    $request->cate3 != null 
                  
                ){
                   if (
                        $request->b1 !=null ||
                        $request->b2 !=null ||
                        $request->b3 !=null 
                   ){
                        $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                        ->where('brand','like','%'.$request->b1.'%')
                        ->orWhere('brand','like'," " .$request->b2." ")
                        ->orWhere('brand','like'," " .$request->b3." ")
                        ->orWhere('category','like'," " .$request->cate1." ")
                        ->orWhere('category','like'," " .$request->cate2." ")
                        ->orWhere('category','like'," " .$request->cate3." ")
                        ->paginate(10);

                        return response()->json([
                            'response' =>$selector,
                            'empty'=>1
                        ]);
                   }else{
                        $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                        ->where('brand','like','%'.$request->b1.'%')
                        ->orWhere('brand','like'," " .$request->b2." ")
                        ->orWhere('brand','like'," " .$request->b3." ")
                        ->paginate(10);

                        return response()->json([
                            'response' =>$selector,
                            'empty'=>2
                        ]);
                   }
                }elseif(
                    $request->b1    != null ||
                    $request->b2    != null ||
                    $request->b3    != null 
                    
                ){
                    if (
                        $request->cate1 != null ||
                        $request->cate4 != null ||
                        $request->cate3 != null 
                   ){
                        $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                        ->where('brand','like','%'.$request->b1.'%')
                        ->orWhere('brand','like'," " .$request->b2." ")
                        ->orWhere('brand','like'," " .$request->b3." ")
                        ->orWhere('category','like'," " .$request->cate1." ")
                        ->orWhere('category','like'," " .$request->cate2." ")
                        ->orWhere('category','like'," " .$request->cate3." ")
                        ->paginate(10);

                        return response()->json([
                            'response' =>$selector,
                            'empty'=>3
                        ]);
                   }else{
                        $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                        ->where('category','like',"%" .$request->cate1."%")
                        ->orWhere('category','like'," " .$request->cate2." ")
                        ->orWhere('category','like'," " .$request->cate3." ")
                        ->paginate(10);

                        return response()->json([
                            'response' =>$selector,
                            'empty'=>4
                        ]);
                   }
                }else{
                    $selector  = Pro::select('*')->orderBy('id','desc')->distinct()
                    ->where('brand','like','%'.$request->b1.'%')
                    ->orWhere('brand','like'," " .$request->b2." ")
                    ->orWhere('brand','like'," " .$request->b3." ")
                    ->orWhere('category','like'," " .$request->cate1." ")
                    ->orWhere('category','like'," " .$request->cate2." ")
                    ->orWhere('category','like'," " .$request->cate3." ")
                    ->paginate(10);
                    return response()->json([
                        'response' =>$selector,
                        'empty'=>5
                    ]);
                }
               
        }else{
          
            if (
                $request->cate1 != null ||
                $request->cate4 != null ||
                $request->cate3 != null 
              
            ){
               if (
                    $request->b1 !=null ||
                    $request->b2 !=null ||
                    $request->b3 !=null 
               ){
                    $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                    ->where('brand','like',"%".$request->search."%")
                    ->orWhere('category','like',"%".$request->search."%")
                    ->orWhere('product','like',"%".$request->search."%")
                    ->orWhere('brand','like',' '.$request->b1.' ')
                    ->orWhere('brand','like'," " .$request->b2." ")
                    ->orWhere('brand','like'," " .$request->b3." ")
                    ->orWhere('category','like'," " .$request->cate1." ")
                    ->orWhere('category','like'," " .$request->cate2." ")
                    ->orWhere('category','like'," " .$request->cate3." ")
                    ->paginate(10);

                    return response()->json([
                        'response' =>$selector,
                        'empty'=>1
                    ]);
               }else{
                    $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                    ->where('brand','like',"%".$request->search."%")
                    ->orWhere('category','like',"%".$request->search."%")
                    ->orWhere('product','like',"%".$request->search."%")
                    ->orWhere('brand','like',' '.$request->b1.' ')
                    ->orWhere('brand','like'," " .$request->b2." ")
                    ->orWhere('brand','like'," " .$request->b3." ")
                    ->paginate(10);

                    return response()->json([
                        'response' =>$selector,
                        'empty'=>1
                    ]);
               }
            }elseif(
                $request->b1    != null ||
                $request->b2    != null ||
                $request->b3    != null 
                
            ){
                if (
                    $request->cate1 != null ||
                    $request->cate4 != null ||
                    $request->cate3 != null 
               ){
                    $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                    ->where('brand','like',"%".$request->search."%")
                    ->orWhere('category','like',"%".$request->search."%")
                    ->orWhere('product','like',"%".$request->search."%")
                    ->orWhere('brand','like',' '.$request->b1." ")
                    ->orWhere('brand','like'," " .$request->b2." ")
                    ->orWhere('brand','like'," " .$request->b3." ")
                    ->orWhere('category','like'," " .$request->cate1." ")
                    ->orWhere('category','like'," " .$request->cate2." ")
                    ->orWhere('category','like'," " .$request->cate3." ")
                    ->paginate(10);

                    return response()->json([
                        'response' =>$selector,
                        'empty'=>1
                    ]);
               }else{
                    $selector  = Pro::select('brand','product','category')->orderBy('id','desc')->distinct()
                    ->where('brand','like',"%".$request->search."%")
                    ->orWhere('category','like',"%".$request->search."%")
                    ->orWhere('product','like',"%".$request->search."%")
                    ->orWhere('category','like'," " .$request->cate1." ")
                    ->orWhere('category','like'," " .$request->cate2." ")
                    ->orWhere('category','like'," " .$request->cate3." ")
                    ->paginate(10);

                    return response()->json([
                        'response' =>$selector,
                        'empty'=>1
                    ]);
               }
            }else{
                $selector  = Pro::select('*')->orderBy('id','desc')->distinct()
                ->where('brand','like',"%".$request->search."%")
                ->orWhere('category','like',"%".$request->search."%")
                ->orWhere('product','like',"%".$request->search."%")
                ->orWhere('brand','like'," ".$request->b1." ")
                ->orWhere('brand','like'," " .$request->b2." ")
                ->orWhere('brand','like'," " .$request->b3." ")
                ->orWhere('category','like'," " .$request->cate1." ")
                ->orWhere('category','like'," " .$request->cate2." ")
                ->orWhere('category','like'," " .$request->cate3." ")
                ->paginate(10);
                return response()->json([
                    'response' =>$selector,
                    'empty'=>3
                ]);
            }
        }
 
        
       
    }
}
