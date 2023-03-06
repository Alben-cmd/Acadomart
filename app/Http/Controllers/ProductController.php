<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }

    
    public function index()
    {
        $product = Product::get();
        return view('admin.products', compact('product'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'cover_image'  => 'required',

            ]);

           $path = public_path().'/images/product/'; 
            // create folder; images/product    
           $originalImage = $request->file('cover_image');
           $name = time().$originalImage->getClientOriginalName();
           $image = Image::make($originalImage);
           $image->resize(800, 960);
           $image->save($path.$name); 
           
           $product = new Product();

           $product->image=$name;
           $product->name =$request->name; 
        // $product->slug = Str::slug($product->name);
           $product->description = $request->description;
           $product->price = $request->price;
           $product->save();

           return redirect()->back()->with('success', 'product Added!');
   }

   public function show($id)
    {
        $product = Product::find($id);        
        return view('admin.single_product', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit_product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

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
        $product->image = $name; 
        }    
        

        $product->name =$request->name; 
        // $product->slug = $request->slug;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save(); 

        return redirect()->route('admin.product')->with('success', 'Product Updated!');
    }

    public function destroy($id)
    {
        Product::where('id', $id)->delete();   
        return redirect()->route('admin.product')->with('success', 'Product Deleted!');
    }
}
