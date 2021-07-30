@extends('front.master')
@section('title','Blog')
@section('content')
<div class="Blog-bg">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="Blogheading">
                <h3>{{$data->title}} </h3>
             </div>
          </div>
       </div>
    </div>
 </div>



       <!-- section -->
      <div class="section layout_padding blog_blue_bg light_silver">
          <div class="container">

             <div class="row">
                <div class="col-md-8 offset-md-2">
                   <div class="full">
                      <div class="big_blog">
                         <img class="img-responsive bloglist_image" src="{{url('upload/'.$data->image)}}" alt="#" />
                      </div>
                      <div class="blog_cont_2">
                         <h3>{{$data->title}}</h3>
                         <p class="sublittle">{{$data->created_at}}</p>
                         <p>{!! $data->description !!}</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- end section -->
   <!-- section -->

 <!-- end section -->
 <div class="container">
 @comments(['model' => $data])
</div>
 <!-- section -->
@endsection
