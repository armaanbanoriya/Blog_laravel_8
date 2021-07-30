@extends('front.master')
@section('title','My Blogs..')

@section('content')

 <div class="section layout_padding">
    <div class="container">
        @foreach ($data as $item)
       <div class="row py-5">
          <div class="col-md-6">
             <img src="{{url('upload/'.$item->image)}}" class="desk_img" alt="#" >
          </div>
          <div class="col-md-6">
             <div class="full blog_cont">
                <h4>{{$item->title}}</h4>
                <h5>{{$item->created_at}}</h5>
                {!! Str::limit($item->description,1000 ) !!}
             </div>
             <br>
             <div class="button_section">
                <a class="btn btn-dark" href="{{'bloglist/'.$item->id}}">Read More</a>
             </div>
          </div>
       </div>
       @endforeach
    </div>
 </div>


 <!-- footer -->
 <footer>
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-6">
             <a href="{{url('/')}}"><img src="{{url('front/images/logo2.png')}}"  class="img-fluid" alt="#" /></a>
          </div>
          <div class="col-lg-2 col-md-6">
             <div class="footer_links">
                <h3>Quick link</h3>
                <ul>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Home</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Features</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Evens</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Markrting</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Blog</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a></li>
                   <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Contact</a></li>
                </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="footer_links">
                <h3>Instagram</h3>
                <ol>
                   <li><img class="img-responsive" src="{{url('front/images/footer_blog.png')}}" alt="#" /></li>
                   <li><img class="img-responsive" src="{{url('front/images/footer_blog.png')}}" alt="#" /></li>
                   <li><img class="img-responsive" src="{{url('front/images/footer_blog.png')}}" alt="#" /></li>
                   <li><img class="img-responsive" src="{{url('front/images/footer_blog.png')}}" alt="#" /></li>
                </ol>
             </div>
          </div>
          <div class="col-lg-3 col-md-6">
             <div class="footer_links">
                <h3>Contact us</h3>
                <form action="#">
                   <fieldset>
                      <div class="field">
                         <input type="text" name="name" placeholder="Your Name" required="" />
                      </div>
                      <div class="field">
                         <input type="email" name="email" placeholder="Email" required="" />
                      </div>
                      <div class="field">
                         <input type="text" name="subject" placeholder="Subject" required="" />
                      </div>
                      <div class="field">
                         <textarea placeholder="Message"></textarea>
                      </div>
                      <div class="field">
                         <div class="center">
                            <button class="reply_bt">Send</button>
                         </div>
                      </div>
                   </fieldset>
                </form>
             </div>
          </div>
       </div>
    </div>
    @endsection
