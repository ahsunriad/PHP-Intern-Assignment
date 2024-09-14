<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::all();
        return view('products', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name',
            'category',
            'quantity',
            'price'
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        
        if ($request->has('image')){
            $file = $request->image;
            $fileExtension = $file->getClientOriginalExtension();
            $originalName = $file->getClientOriginalName();
            $originalName = $file->getClientOriginalName(); // Get original file name
            $fileName = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)) . '.' .$fileExtension;
            $file->move('assets/uploads/products/',$fileName);
            $product->image=$fileName;
        }
        $product->save();
        session()->flash('added', $product->name);
        return redirect('addProduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('addProduct');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('editProduct', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name',
            'category',
            'quantity',
            'price'
        ]);
        $product=Product::find($id);
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->quantity = $request->input('quantity');
        
        if ($request->has('image')){
            $file = $request->image;
            //dd($file);
            $fileExtension = $file->getClientOriginalExtension();
            $originalName = $file->getClientOriginalName();
            $originalName = $file->getClientOriginalName(); // Get original file name
            $fileName = str_replace(' ', '_', pathinfo($originalName, PATHINFO_FILENAME)) . '.' .$fileExtension;
            
            //dd($cleanedFileName);
            //$fileName = time().'.'.$fileExtension;
            $file->move('assets/uploads/products/',$fileName);
            $product->image=$fileName;
        }
        session()->flash('updated', $product->name);
        $product->update();
        $data = $product;
        return view('editProduct', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        if ($data->image){
            $path = 'assets/uploads/products/'.$data->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $status = $data->name;
        session()->flash('deleted', 'status');
        $data->delete();
        return redirect('products');
    }
}
