<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Voter;
use DB;

class ResultController extends Controller
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
       
           
                   
                    $all_product = DB::table('products')->count();
                    $voter_id = DB::table('voters')
                   
                    ->select('product_id', DB::raw("count(product_id) as votercount"))
                   
                     ->groupBy('product_id');
                    
                  
                     $products_id = DB::table('products')
                     ->joinSub($voter_id, 'voter_id', function ($join) {
                         $join->on('products.product_id', '=', 'voter_id.product_id');
                     })->get();


                    // dd($products_id);
        
             return view('Result_voting.index',compact('products_id','all_product'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
