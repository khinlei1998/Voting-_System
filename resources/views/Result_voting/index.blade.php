@extends('layouts.master')
@section('content_warpper')
<h2>Voting Result</h2>
        <!-- <a href="" class="" >
         <button type="button" class="btn btn-primary ">Restart Voting</button>
         </a> -->
@php


@endphp


<div class="row">
  
    <div class="col-md-11" style="border: 1px solid #d9d9d9;">
   
    @if($products_id)
        @foreach($products_id as $p_id)
       
       
            <p>{{$p_id->name}}</p>
            <div class="progress mb-3">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" 
                        role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                        style="width: {{$p_id->votercount*100/$all_product}}%">
                        
                    </div>
                    <!-- <p style="margin-top:8px;margin-left:5px;">{{$p_id->votercount*100/$all_product}}%"</p> -->
            </div>
   
        @endforeach
        @else
        <div class="alert alert-primary" role="alert">
           <p>Not Voted Yet!</p>
        </div>
        @endif   
    
 

   
        
      
   
</div>

@endsection