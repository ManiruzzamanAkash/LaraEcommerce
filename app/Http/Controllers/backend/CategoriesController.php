<?php
namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Image;
use File;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('id','desc')->get();
        return view('backend.pages.categories.index', compact('categories'));
    }
    public function create()
    {
        $main_categories=Category::orderBy('name','desc')->where('parent_id',NULL)->get();
        return view('backend.pages.categories.create', compact('main_categories'));
    }
     public function store(Request $request)
    {
         
         $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image',
            
        ],
        [
          'name.required' => 'Please provide a category name',
          'image.image' => 'Please provide a valid image with .jpg, .png...',
        ]
      );
         $category = new Category();
         $category->name = $request->name;
         $category->descripation = $request->descripation;
         $category->parent_id = $request->parent_id;
         
         //image insert
         if(($request->image)>0)
         {
             
                 //insert image
            $image=$request->file('image');
            $img=time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/' .$img);
            Image::make($image)->save($location);
             $category->image = $img;
            
           
             
         }
         $category->save();
         
         session()->flash('success','A new category added successfully !!');
         return redirect()->route('admin.categories');
        
    }
    
    public function edit($id)
    {
        $category = Category::find($id);
        if(!is_null($category))
        {
             $main_categories=Category::orderBy('name','desc')->where('parent_id',NULL)->get();
            return view('backend.pages.categories.edit',compact('category','main_categories'));
        }
        else
        {
            return redirect()->route('admin.categories');
        }
    }
    
     public function update(Request $request,$id)
    {
         
         $this->validate($request,[
            'name' => 'required',
            'image' => 'nullable|image',
            
        ],
        [
          'name.required' => 'Please provide a category name',
          'image.image' => 'Please provide a valid image with .jpg, .png...',
        ]
      );
         $category =  Category::find($id);
         $category->name = $request->name;
         $category->descripation = $request->descripation;
         $category->parent_id = $request->parent_id;
         
         //image insert
         if(($request->image)>0)
         {
             //delete old image
             if(File::exists('images/categories/'.$category->image))
             {
                 File::delete('images/categories/'.$category->image);
             }
                 //insert image
            $image=$request->file('image');
            $img=time(). '.'.$image->getClientOriginalExtension();
            $location=public_path('images/categories/' .$img);
            Image::make($image)->save($location);
             $category->image = $img;
            
           
             
         }
         $category->save();
         
         session()->flash('success','A new category Updated successfully !!');
         return redirect()->route('admin.categories');
        
    }
    
    public function delete($id)
    {
        $category= Category::find($id);
        if(!is_null($category))
        {
            //if is is parent category, then delete all its sub category
            if($category->parent_id==null)
            {
                //delete sub category
                 $sub_categories=Category::orderBy('name','desc')->where('parent_id',$category->id)->get();
                foreach($sub_categories as $sub)
                {
                    if(File::exists('images/categories/'.$sub->image))
                    {
                        File::delete('images/categories/'.$sub->image);
                    }
                    $sub->delete();
                }
            }
            
            //delete category image
             if(File::exists('images/categories/'.$category->image))
             {
                 File::delete('images/categories/'.$category->image);
             }
            $category->delete();
        }
        session()->flash('success','product delete successful!!');
        return back();
    }
}
