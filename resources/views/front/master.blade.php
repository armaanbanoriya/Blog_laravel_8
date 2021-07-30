<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title','')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{url('front/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('front/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('front/css/responsive.css')}}">
      <!-- fevicon -->

      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('front/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
          img {
    max-width: 100%;
    height: auto;
        }
        @media(min-width: 997px)
        {
            .desk_img{
                width: 567px;
                height: 414px;
            }
            .bloglist_image{
                width: 796px;
                height: 308px;
            }
        }
        @media(max-width: 997px)
        {
            .desk_img{
                width: 307px;
                height: 224px;
            }
            .bloglist_image{
                width: 307px;
                height: 118px;
            }
        }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid" style="color: black;">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo2"> <a href="{{url('/')}}"><img src="{{url('front/images/logo2.png')}}" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                            @php
                            use Illuminate\Support\Facades\Auth;
                            @endphp
                            @php
                                   use App\Models\User;
                            @endphp



                           <ul class="menu-area-main mr-5">
                               @auth
                               <li>
                                <a href="{{url('logout')}}">Logout</a>
                                </li>
                               @else
                               <li>
                                <a href="{{url('gr')}}">Login</a>
                                </li>
                                <li>
                                    <a href="{{url('register')}}">Register</a>
                                </li>
                               @endauth


                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
     @yield('content')
      </footer>

      <div class="cpy">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 Design by <a href="#">Armaan Banoriya</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('front/js/jquery.min.js')}}"></script>
      <script src="{{url('front/js/popper.min.js')}}"></script>
      <script src="{{url('front/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('front/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('front/js/plugin.js')}}"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{url('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('front/js/custom.js')}}"></script>
   </body>
</html>
