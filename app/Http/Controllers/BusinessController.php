<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use Illuminate\Support\Str;
use Image;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');  
    }

    public function index()
    {
        $businesses = Business::all();
        return view('admin.business.index', compact('businesses'));
    }

    public function create()
    {
        return view('admin.business.create');
    }

    public function store(Request $request)
    {   
        // dd($request);
        $validatedData = $request->validate([

            'name' => 'required',
            'address' => 'required',
            'cover_image'  => 'required',

            ]);

           $path = public_path().'/images/business/'; 
            // create folder; images/business    
           $originalImage = $request->file('cover_image');
           $name = time().$originalImage->getClientOriginalName();
           $image = Image::make($originalImage);
           $image->resize(800, 960);
           $image->save($path.$name); 
           
           $business = new Business();

           $business->cover_image= $name;
           $business->name =$request->name; 
           $business->slug = Str::slug($business->name);
           $business->address = $request->address;
            
           if ($request->filled('link')) {
            $business->link = $request->link;
           }

           $business->save();

           return redirect()->back()->with('message', 'Business Added! Would you like to add a new business?');
   }

    public function edit($slug)
    {
        $business = Business::where('slug', $slug)->first();     
        return view('admin.business.edit', compact('business'));
    }

    public function update(Request $request, $slug)
    {
        $business = Business::where('slug', $slug)->first(); 

        $validatedData = $request->validate([

            'name' => 'required',
            'address' => 'required',

             ]);
            
        if($request->filled('link')){
            $business->link = $request->link;
        }

        if ($request->has('cover_image')) {
            $path = public_path().'/images/business/';      
            $originalImage = $request->file('cover_image');
            $name = time().$originalImage->getClientOriginalName();
            $image = Image::make($originalImage);
            $image->resize(270, 310);
            $image->save($path.$name); 
            $business->cover_image = $name; 
        }    

        $business->name =$request->name; 
        $business->slug = Str::slug($request->name);
        $business->address = $request->address;

        $business->save(); 

        return redirect()->route('businesses')->with('message', 'Business Updated!');
    }

    public function enable($slug)
    {
        $business = Business::where('slug', $slug)->first();
        $business->status = 1;
        $business->save();   
        return redirect()->route('businesses')->with('message', 'Business Enabled!');
    }

    public function disable($slug)
    {
        $business = Business::where('slug', $slug)->first();
        $business->status = 0;
        $business->save();   
        return redirect()->route('businesses')->with('message', 'Business Disabled!');
    }
}
