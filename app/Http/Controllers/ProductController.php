<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    //view all products
    public function all(){
        return view('homes.all', ['product' => Product::latest() ->filter
         (request(['category', 'search']))->paginate(4)]);
    }

    //view single products
    public function show(Product $product) {
        return view('homes.single', ['product' => $product]);
    }

    //create form
    public function create() {
        return view('homes.create');
    }

    //store form
    public function store(Request $request) {
        $FormFields = $request->validate([
            // 'user_id' => ['Auth::id()'],
            'name' => 'required',
            'phone_no' => 'required|digits:11',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:3000']
        ]);

        if($request->hasFile('logo')) {
            $file= $request->file('logo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $FormFields['logo']= $filename;
        }

        Product::create($FormFields);
        return redirect('/')->with('message', 'upload successful!');
    }

    //show edit form
    public function edit(Product $product) {
        return view('homes.edit', ['product' => $product]);
    }

    //update file
    public function update(Request $request, Product $product) {

        //make sure logged in user is owner
        if($product->user_id != auth()->id()){
            abort(403, 'unauthorized action');
        }

        $formFields = $request->validate([
            'name' => 'required',
            'phone_no' => 'required|digits:11',
            'price' => 'required',
            'category' => 'required',
            'description' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:3000'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $product->update($formFields);

        return back()->with('message', 'update successful!');
    }

    //delete product
    public function delete(Product $product) {

        //make sure logged in user is owner
        if($product->user_id != auth()->id()){
            abort(403, 'unauthorized action');
        }

        $product->delete();
        return redirect('/')->with('message', 'successful removal!');
    }
    

}
