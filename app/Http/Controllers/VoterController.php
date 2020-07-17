<?php

namespace App\Http\Controllers;

use App\Voter;
use App\Product;
use Auth;
use Illuminate\Http\Request;
use DB;
use Alert;

class VoterController extends Controller
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
        if(session('voter')){
            Alert::success('Success', 'Your Voting is successful');
        }
        if(session('voter_cancel')){
            Alert::warning('Fail','Sorry,U voted once');        }
        return view('Voting.index',compact('products'));
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
    
         $user_id=DB::table('voters')->where('user_id',Auth::user()->id)->first();
      if($user_id){
        return redirect()->back()->with('voter_cancel','vote fail');
      }
        else{
                
                $vote=new Voter;
                $vote->product_id=$request->product_id;
                $vote->user_id=Auth::user()->id;
                $vote->status=1;
                $vote->save();
                return redirect()->route('vote.index')->with('voter','vote success');
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function show(Voter $voter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function edit(Voter $voter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voter $voter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voter  $voter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voter $voter)
    {
        
    }
    public function restart(Voter $voter)
    {
      
    }
}
