
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('name')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('final_eagri/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('final_eagri/css/farmer-style.css')}}" rel="stylesheet">
</head>

<body style="font-size: 18px; font-family: 'Fredericka the Great', cursive;">
<div class="fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-3">

        <a class="navbar-brand ml-4" href="#"><img src="{{ asset('final_eagri/img/agri.png')}}"></a>

        <!-- <a class="btn btn-outline-success ml-4" target="_blank" href="{{route('home')}}">E-Agriculture</a> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('f_home')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">Crops</a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                         <a class="nav-link" href="{{route('crop_import')}}">Import crop</a>
                        <a class="nav-link" href="{{route('crop_manage')}}">Manage crop</a>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm_bid_messages')}}">Bid_messages</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('confirm_crops')}}">Confirm Crops</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm_order_messages')}}">Orders crops</a>
                </li>
               
                 @if (session()->has('f_username'))
                
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                        <i class="fa fa-user" style="font-size: 20px;">{{Session()->get('f_username')}}</i>
                    </a>
                    <div class="dropdown-menu bg-dark nav-item" aria-labelledby="dropdownMenuLink">
                        {{--<form class="form-inline" action="" method="post" enctype="multipart/form-data">--}}
                        <a class="nav-link" href="{{route('fa_profile',['f_username'=>Session()->get('f_username')])}}"> <i class="fa fa-1x fa-user"></i>profile</a>
                        <a class="nav-link" href="{{route('f_settings')}}"><i class="fas fa-comment"></i>setting</a>
                        <a class="nav-link" href="{{route('logout',['name'=>'f_username'])}}" onclick="return confirm('Are you sure you want to logout?');"><i class="fas fa-sign-out-alt"></i>logout</a>
                    </div>
                </li>
                @endif

            </ul>
            <form class="form-inline my-2 my-lg-0 mr-4">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fa fa-search" style="font-size:28px;color:green"></i>
                </button>
            </form>

        </div>

    </nav>
</div>


<div class="row justify-content-sm-center mx-3 my-5 content">


    <!-- /.col-lg-3 -->
    <div class="col-lg-12 mt-lg-0">

        @yield('body')

    </div>


</div>


<!-- Footer -->
  <footer class="py-5 bg-dark">

        <div class="row nav text-light mx-auto">
            <div class="col-lg-3 text-center">
                <h2>Our website</h2>
              <p class=" text-justify">At agrobid,
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
                <h2 class="">Quick Links</h2>
                <li class="nav-item"><a class="nav-link" target="_blank" href="">News</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('gallery')}}">Photo Gallery</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="">Live Support</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#messageModal">feedback Us</a></li>
               </div>



            <div class="col-lg-3 text-center">
                <h2 class="text-center">Our Survices</h2>
                <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('services')}}">Services</a></li>
                <li class="nav-item"><a class="nav-link" target="_blank" href="{{route('contact')}}">Contact</a></li>
               
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