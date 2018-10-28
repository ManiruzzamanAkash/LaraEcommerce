<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Image;


class ProductsController extends Controller
{
    
    public function index()
    {
        $products=Product::orderBy('id','desc')->get();
        return view('backend.pages.product.index')->with('products',$products);
    } 
    public function create()
    {
        return view('backend.pages.product.create');
    }
    
    public function edit($id)
    {
        $product=Product::find($id);
        return view('backend.pages.product.edit')->with('product',$product);
    }
    
    public function store(Request $request)
    {
         $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'price' => 'required',
        'rent' => 'required',
        'publisher' => 'required|max:255',
        'category' => 'required|max:255',
        'descripation' => 'required|max:255',
        
    ]);
        
        $product= new Product;
        $product->title = $request->title;
        $product->author = $request->author;
        $product->price = $request->price;
        $product->rent_charge = $request->rent;
        $product->publisher = $request->publisher;
        $product->category = $request->category;
        $product->descrripation = $request->descripation;
        $product->slug = str_slug($product->title);
        $product->save();
        //productImage model insert image
        if($request->hasFile('product_image'))
        {
            //insert image
            $image=$request->file('product_image');
            $img=time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/' .$img);
            Image::make($image)->save($location);
            $product_image =new ProductImage;
            $product_image->product_id=$product->id;
            $product_image->image=$img;
            $product_image->save();
        }
        return redirect()->route('admin.product.create');
    }
    public function update(Request $request,$id)
    {
         $request->validate([
        'title' => 'required|max:255',
        'author' => 'required|max:255',
        'price' => 'required',
        'rent' => 'required',
        'publisher' => 'required|max:255',
        'category' => 'required|max:255',
        'descripation' => 'required|max:255',
        
    ]);
        
        $product= Product::find($id);
        $product->title = $request->title;
        $product->author = $request->author;
        $product->price = $request->price;
        $product->rent_charge = $request->rent;
        $product->publisher = $request->publisher;
        $product->category = $request->category;
        $product->descrripation = $request->descripation;
        $product->save();
        //productImage model insert image
        if($request->hasFile('product_image'))
        {
            //insert image
            $image=$request->file('product_image');
            $img=time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/products/' .$img);
            Image::make($image)->save($location);
            $product_image =new ProductImage;
            $product_image->product_id=$product->id;
            $product_image->image=$img;
            $product_image->save();
        }
        return redirect()->route('admin.products');
    }
    public function delete($id)
    {
        $product= Product::find($id);
        if(!is_null($product))
        {
            $product->delete();
        }
        session()->flash('success','product delete successful!!');
        return back();
    }
}
//php artisan config:cache
//php artisan view:clear
//composer dump-autoload