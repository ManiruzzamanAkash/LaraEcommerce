<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class PagesController extends Controller
{
   
   public function index()
   {
       
       $products=Product::orderBy('id','desc')->get();
       return view('frontend.pages.index',compact('products'));
   }
    public function contact()
   {
       return view('frontend.pages.contact');
   }
    public function about()
   {
       return view('frontend.pages.about');
   }
    public function search(Request $request)
    {
        $search= $request->search;
          $products=Product::orWhere('title','like','%'.$search.'%')
              ->orWhere('descrripation','like','%'.$search.'%')
              ->orWhere('author','like','%'.$search.'%')
              ->orWhere('publisher','like','%'.$search.'%')
              ->orWhere('category','like','%'.$search.'%')
              ->orWhere('price','like','%'.$search.'%')
              ->orderBy('id','desc')->get();
    return view('frontend.pages.product.search', compact('search' , 'products')); 
    }
    
}
