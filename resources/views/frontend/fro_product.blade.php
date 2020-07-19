@extends('frontend')
@section('product')
@include('sweetalert::alert')
<style>
body {
  font-family: proxima-nova, helvetica, arial, sans-serif;
  color: #333;
  font-size: 14px;
  line-height: 20px;
}

.promo-card {
  overflow: hidden;
  width: 260px;
  height: 350px;
  margin-bottom: 50px;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0 4px 21px -12px rgba(0, 0, 0, .66);
  -webkit-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: all 200ms ease;
  transition: all 200ms ease;
  font-size: 18px;
  cursor: pointer;
  display:inline-block;
 

}

.promo-card:hover {
  box-shadow: 0 34px 32px -33px rgba(0, 0, 0, .18);
  -webkit-transform: translate(0px, -3px);
  -ms-transform: translate(0px, -3px);
  transform: translate(0px, -3px);
}

.blog-bar {
  width: 4px;
  height: 45px;
  margin-top: 20px;
  float: left;
}

.blog-bar.color-pink {
  background-color: #f75e90;
}

.blog-bar.color-purple {
  background-color: #a15dc0;
}

.blog-bar.color-blue {
  background-color: #23b9b6;
}

.blog-post-text {
  margin-top: 19px;
  margin-right: 20px;
  margin-left: 20px;
  font-size: 17px;
  text-transform: uppercase;
}

.blog-description {
  font-size: 15px;
  text-transform: none;
}

.blog-description.pink-text {
  color: #f75e90;
}

.blog-description.purple-text {
  color: #a15dc0;
}

.blog-description.blue-text {
  color: #23b9b6;
}

/* Titles & containers */

.section-title {
  color: #f75e90;
  font-size: 26px;
  font-weight: 400;
  text-align: center;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.title-underline {
  display: block;
  width: 100px;
  height: 2px;
  margin-top: -10px;
  margin-right: auto;
  margin-left: auto;
  background-color: #23b9b6;
}

.promotion-section {
  padding-bottom: 80px;
  background-color: #f7f7f7;
}

.promo-flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  margin-top: 48px;
  -webkit-justify-content: space-around;
  -ms-flex-pack: distribute;
  justify-content: space-around;
  -webkit-flex-wrap: wrap;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
  -ms-flex-align: end;
  align-items: flex-end;
}

@media (max-width: 991px) {
  .promo-card {
    -webkit-box-flex: 0;
    -webkit-flex: 0 auto;
    -ms-flex: 0 auto;
    flex: 0 auto;
  }
}

/* Webflow Basics */

.w-container {
  margin-left: auto;
  margin-right: auto;
  max-width: 940px;
}
.w-container:before,
.w-container:after {
  content: " ";
  display: table;
}
.w-container:after {
  clear: both;
}
.w-container .w-row {
  margin-left: -10px;
  margin-right: -10px;
}
img{
    height:60%;
}
    </style>



<!-- 
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://use.typekit.net/drm0rpt.js"></script>
  <script type="text/javascript">
    try{Typekit.load();}catch(e){}
  </script>
</head>
<body>
 

     
    
      
      <!-- Cards First Row --->
      <h3>Vote Here</h3>
      <div class="promo-flex ">
      <?php
      $i=1;
      ?>
        @foreach($products as $product)
          <form action="{{url('vote')}}" method="GET">
            @csrf 
            <div data-ix="blog-card" class="w-clearfix w-preserve-3d promo-card" style="margin-right:40px;float:left;"><img width="100%"src="{{$product->image}}">
            <div class="blog-bar color-pink"></div>
            <div class="blog-post-text">
            {{$product->name}}
                 <input type="hidden" name="product_id" value="{{$product->product_id}}">
                 <input type="hidden" name="vote_id" value="{{$i++}}">
                 <input type="hidden" name="vote_id" value="{{$i++}}">
                 <input type="hidden" name="user_id" value="{{auth::user()->id}}">

                <div class="blog-description pink-text">{{$product->description}}</div>
            </div>
        
            
            <button class="btn btn-danger" type="submit" style="margin-top:20px;"><i class="fa fa-heart"></i></button>
            
            </div>
        </form>
        @endforeach
        
      </div>

   
      

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>

  


@endsection