<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Image;


class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }

    
    public function index()
    {
        $products = Product::get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $businesses = Business::all();
        return view('admin.products.create', compact('businesses'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'cover_image'  => 'required',
            'business' => 'required',

            ]);

           $path = public_path().'/images/products/'; 
            // create folder; images/product    
           $originalImage = $request->file('cover_image');
           $name = time().$originalImage->getClientOriginalName();
           $image = Image::make($originalImage);
           $image->resize(800, 960);
           $image->save($path.$name); 
           
           $product = new Product();

           $product->cover_image = $name;
           $product->name = $request->name; 
           $product->business_id = $request->business;
           $product->slug = Str::slug($request->name);
           $product->description = $request->description;
           $product->price = $request->price;
           $product->save();

           return redirect()->back()->with('message', 'product Added!');
   }

    public function edit($slug)
    {   
        $businesses = Business::all();
        $product = Product::where('slug', $slug)->first();
        return view('admin.products.edit', compact('businesses','product'));
    }

    public function update(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        $validatedData = $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',

             ]);

        if ($request->has('cover_image')) {
        $path = public_path().'/images/product/';      
        $originalImage = $request->file('cover_image');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 
        $product->cover_image = $name; 
        }    
        

        $product->name = $request->name; 
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save(); 

        return redirect()->route('products')->with('message', 'Product Updated!');
    }

    public function enable($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product->status = 1;
        $product->save();   
        return redirect()->route('products')->with('message', 'Product Enabled!');
    }

    public function disable($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product->status = 0;
        $product->save();   
        return redirect()->route('products')->with('message', 'Product Disabled!');
    }
}
