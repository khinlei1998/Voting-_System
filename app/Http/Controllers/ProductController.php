<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF;
Use Alert;
use App\Voter;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $products=Product::all();
        if(session('success')){
            Alert::success('Success', 'Product Created Successfully');
        }if(session('noti')){
            Alert::success('Success', 'Product Updated Successfully');
        }if(session('delete')){
            Alert::success('Success', 'Product Deleted Successfully');

        }if(session('fail')){
            Alert::error('Fail', 'This product has already been voted by user ');

        }
     
        return view('product.index',compact(['products']));

        // if($request->has('download')){
        //     $pdf = PDF::loadView('product.index');
        //     return $pdf->download('product.index');
        // }
    }

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request);
        $request->validate([
            'name' => 'required|min:2',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png',
           
        ]);
        if($request->hasFile('image')){
           $img=$request->image->store("img", "public");
           
        }
     
       $product=new product();
       $product->name=$request->name;
      
       $product->image=$img;
       $product->description=$request->description;
       $product->save();
     
        return redirect()->route('product.index')->with('success','created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
     
        return view('Product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:2',
            
        'description'=>'required',
           
        ]);
       if($request->hasfile('image')){
        $img=$request->image->store("img", "public");

       }else{
       $img=$product->image;
       }
       $product->name=$request->name;
       $product->description=$request->description;
       $product->image=$img;
       $product->save();
       return redirect()->route("product.index")->with('noti','updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $product = Product::findOrFail($id);
       
        $bb=$product->product_id;
        // dd($bb);
       $del_product=Voter::where('product_id',$bb)->get();
    //   dd($del_product);
    if( $del_product){
        $product->delete();

        return redirect()->route("product.index")->with('delete','deleted');
      
    }else{
        return redirect()->back()->with('fail','fail');
    }

  
    }
}
