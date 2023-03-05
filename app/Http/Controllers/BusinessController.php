<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessController extends Controller
{

    public function index()
    {
        $business = Business::get();
        return view('admin.business', compact('business'));
    }

    public function create()
    {
        return view('admin.add_business');
    }

    public function store(Request $request)
    {
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

           $business->image=$name;
           $business->name =$request->name; 
           $business->slug = Str::slug($business->name);
           $business->address = $request->address;
           $business->save();

           return redirect()->back()->with('success', 'Business Added!');
   }

   public function show($id)
    {
        $business = Business::find($id);        
        return view('admin.single_business', compact('business'));
    }

    public function edit($id)
    {
        $business = Business::find($id);
        return view('admin.edit_business', compact('business'));
    }

    public function update(Request $request, $id)
    {
        $business = Business::find($id);

        $validatedData = $request->validate([

            'name' => 'required',
            'address' => 'required',

             ]);

        if ($request->has('cover_image')) {
        $path = public_path().'/images/business/';      
        $originalImage = $request->file('cover_image');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(270, 310);
        $image->save($path.$name); 
        $business->image = $name; 
        }    
        

        $business->name =$request->name; 
        $business->slug = $request->slug;
        $business->address = $request->address;

        $business->save(); 

        return redirect()->route('admin.business')->with('success', 'Business Updated!');
    }

    public function destroy($id)
    {
        business::where('id', $id)->delete();   
        return redirect()->route('admin.business')->with('success', 'Business Deleted!');
    }
}
