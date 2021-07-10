<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
      <link type="text/css" href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
       <link type="text/css" href="{{asset('final_eagri/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('final_eagri/css/home-style.css')}}" rel="stylesheet">
    <link href="{{asset('final_eagri/css/card.css')}}" rel="stylesheet">
</head>

<body style="font-size: 18px; font-family: 'Fredericka the Great', cursive;">


<div class="fixed-top">

    <!--Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-light py-2">

        <!-- <a class="text-dark navbar-brand ml-4" href="#">E-Agriculture</a> -->
        <!-- <a class="btn btn-outline-success ml-4" href="{{route('home')}}">E-Agriculture</a> -->
    <a class="navbar-brand ml-4" href="{{route('home')}}"><img src="{{ asset('final_eagri/img/agri.png')}}"></a>

        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon "></span>
        </button>

        <div  class="collapse navbar-collapse" id="navbarResponsive">

              <div class="mx-auto">
                <form class="form-inline my-lg-0 mr-4" action="{{route('search')}}" method="get">
                    @csrf
                    <input  class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search" style="width: 500px">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <i class="fas fa-search" style="font-size:28px;color:green"></i>
                    </button>
                </form>
            </div>

               <div class="mr-4 ml-auto">
                     @if(Session::get('c_username'))
                      <a class="nav-item btn btn-outline-success" href="{{route('wishlist',['c_username'=>Session::get('c_username')])}}"><i class="far fa-heart"></i></a>
                     @endif
                   <a href="{{route('login')}}" class="nav-item btn btn-outline-success">Login</a>
                   <a href="{{route('signup')}}" class="nav-item btn btn-success ml-2">Signup</a>
               </div>
        </div>
</nav>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

          <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Summer Products</a>
                        <div class="dropdown-menu bg-danger nav-item" aria-labelledby="dropdownMenuLink">
                              @php($categories=App\categories_info::all()->where('categories_status',1))
                                @foreach($categories as $categorie)
                                     <a class="nav-link" href="{{route('Session_Categories',['crop_type'=>$categorie->id,'crop_session'=>1])}}">{{$categorie->categories_name}}</a>
                                @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Winter Products</a>
                        <div class="dropdown-menu bg-danger nav-item" aria-labelledby="dropdownMenuLink">
                          @php($categories=App\categories_info::all()->where('categories_status',1))
                                @foreach($categories as $categorie)
                                     <a class="nav-link" href="{{route('Session_Categories',['crop_type'=>$categorie->id,'crop_session'=>2])}}">{{$categorie->categories_name}}</a>
                                @endforeach
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Monsoon Products</a>
                        <div class="dropdown-menu bg-danger nav-item" aria-labelledby="dropdownMenuLink">
                           @php($categories=App\categories_info::all())
                                @foreach($categories as $categorie)
                                     <a class="nav-link" href="{{route('Session_Categories',['crop_type'=>$categorie->id,'crop_session'=>3])}}">{{$categorie->categories_name}}</a>
                                @endforeach
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">about us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>

                      <li class="nav-item">
                        <a class="nav-link" href="{{route('gallery')}}">Photo Gallery</a>
                    </li>

                    
                         @if (session()->has('c_username'))

                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="fa fa-1x fa-user">{{Session()->get('c_username')}}</i>
                        </a>
                        <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                             <a class="nav-link" 
                             href="{{route('cust_profile',['c_username'=>Session()->get('c_username')])}}">
                             <i class="fa fa-1x fa-user"></i>profile</a>
                             
                            <a class="nav-link" href="{{route('c_message')}}">
                                <i class="fas fa-comment"></i>confirm-buy
                            </a>
                             <a class="nav-link" href="{{route('cust_order_messages')}}"><i class="fas fa-comment"></i>orders</a>

                             <a class="nav-link" href="{{route('c_settings')}}"><i class="fas fa-user-cog"></i>setting</a>
                            <a class="nav-link" href="{{route('logout',['name'=>'c_username'])}}" onclick="return confirm('Are you sure you want to logout?');"><i class="fas fa-sign-out-alt"></i>logout</a>
                        </div>
                    </li>
                    @else
                            <li >
                                <a class="">
                                <i class="fa fa-2x fa-user mt-2"></i>
                               </a>
                            </li>
                    @endif

              </ul>
            </div>

    </nav>
</div>


 <div class="row justify-content-sm-center mx-3 content" id="top">

        <div class="bg-light col-lg-2 my-5">

            <h1 class="my-sm-5">Categories</h1>

            <div class="list-group text-lg-center">
                   @php($categories=App\categories_info::all()->where('categories_status',1))
                                @foreach($categories as $categorie)
                <a href="{{route('Categories',['crop_type'=>$categorie->id])}}" class="list-group-item btn btn-outline-primary">{{$categorie->categories_name}}</a>
                  @endforeach
            </div>
      
        </div>
        <!-- /.col-lg-3 -->


        <div class="col-lg-10 mt-lg-2">
            <h3 class="text-success">{{Session::get('bid_success')}}</h3>
        @yield('body')
        </div>
    </div>
    <!-- /.row -->



    <footer class="py-5 bg-dark">

        <div class="row nav text-light text-center">
            <div class="col-lg-3">
                <h2>Our website</h2>
              <p class=" text-justify ml-4">At agrobid,
                Innovation and simplicity makes us happy: our goal is to remove any technical or financial
                barriers that can prevent crops sell and buy. We're excited to
                help you on your journey!?</p>

              <h2 class="">Social Links</h2>
              <li class="nav-item" >
                <a href=""><i class="fab fa-2x fa-facebook" style="color: blue;"></i></a>
                <a href=""><i class="fab fa-2x fa-instagram ml-5" style="color:#E38EC4
                    ;"></i></a>
                <a href=""><i class="fab fa-2x fa-youtube ml-5" style="color: #ff6b6b;"></i></a>
                <a href=""><i class="fab fa-2x fa-github ml-5" style="color: white;"></i></a>
               </li>       

            </div>

              <div class="col-lg-3 text-center">
                <h2 class="text-center">Quick Links</h2>
                <li class="nav-item"><a class="nav-link" href="{{route('news_info')}}">News</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('gallery')}}">Photo Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="">Summer Crops</a></li>
                <li class="nav-item"><a class="nav-link" href="">Winter crops </a></li>
                 <li class="nav-item"><a class="nav-link" href="">Monsoon crops </a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#messageModal">feedback Us</a></li>
            </div>



            <div class="col-lg-3 text-center">
                <h2 class="text-center">Our Survices</h2>
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="">Live Support</a></li>
            </div>
                <div class="col-lg-3 text-center">
                <h4>Get In Touch</h4>
                <h4>Address</h4>
                <p>House #100, Uttara, Dhaka</p>
                <h4>Email</h4>
                <p>eagriculture@gmail.com</p>
                <h4>Phone</h4>
                <p class="mb-2">+8801989419776</p>      

            </div>
        </div>

    <p class="m-0 text-center text-white">Copyright &copy; AGROBID 2020</p>
    <!-- Message -->
    <!-- <button class="fixed-bottom btn btn-success float-right " data-toggle="modal" data-target="#messageModal">Feedback here</button> -->


    <!-- Message Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Feedback us</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="" method="post">
                <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" type="text" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" name="phone" type="tel" placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="5" name="message" placeholder="Message" class="form-control" required></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-warning">Send</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- product zoom view -->
<!-- <script src="{{asset('final_eagri/vendor/elevateZoom/jquery.elevatezoom.js')}}"></script> -->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fe5ddcba8a254155ab6467b/1eqcukpg0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>