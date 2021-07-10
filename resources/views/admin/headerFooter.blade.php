<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('final_eagri/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('final_eagri/vendor/font-awesome/css/all.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('final_eagri/css/admin.css')}}" rel="stylesheet">

</head>

<body style="font-size: 18px; font-family: 'Fredericka the Great', cursive;">

<div>

  
    <!-- Page Content -->
    <div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
        
          <!-- <a class="btn btn-outline-success ml-4" target="_blank" href="{{route('home')}}">E-Agriculture</a> -->
          <a class="navbar-brand ml-4" href="#"><img src="{{ asset('final_eagri/img/agri.png')}}"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('a_home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark " aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" href="{{route('all_farmer')}}">Farmers</a>
                            <a class="dropdown-item text-light" href="{{route('all_customer')}}">Buyers</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Crops
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" target="_blank" href="{{route('home')}}">Collection_crops</a>
                            <a class="dropdown-item text-light" href="{{route('published_crops')}}">Published crops</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-light" href="{{route('unpublished_crops')}}">Unpublished crops</a>
                             <a class="dropdown-item text-light" href="{{route('deleted_crops')}}">Deleted crops</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" href="{{route('add_categories')}}">Add Categories</a>
                            <a class="dropdown-item text-light" href="{{route('manage_categories')}}">Manage Categories</a>
                        </div>
                     </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                        </a>
                        <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item text-light" href="{{route('add_news')}}">Add News</a>
                            <a class="dropdown-item text-light" href="{{route('manage_news')}}">Manage News</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="https://dashboard.tawk.to/#/dashboard/5fe5ddcba8a254155ab6467b">Chat-box</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
                            <i class="fa fa-1x fa-user">{{Session::get('a_username')}}</i>
                        </a>
                        <div class="dropdown-menu nav-item bg-dark" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item text-light" href="{{route('a_profile')}}"> <i class="fa fa-1x fa-user"></i>profile</a>

                            <a class="dropdown-item text-light" href="{{route('a_settings')}}"><i class="fas fa-user-cog"></i>setting</a>

                            <a class="dropdown-item text-light" href="{{route('logout',['name'=>'a_username'])}}"onclick="return confirm('Are you sure you want to logout?');"><i class="fas fa-sign-out-alt"></i>logout</a>
                        </div>
                    </li>


                </ul>
                <form class="form-inline my-2 my-lg-0 mr-4" action="{{route('admin_search')}}" method="get">
                     @csrf
                    <input class="form-control mr-sm-2" type="search" name="search"  placeholder="Search">
                    <button class="btn btn-success my-2 my-sm-0 text-dark" type="submit">
                        <i class="fa fa-search">search</i>
                    </button>
                </form>
            </div>
        </nav>

        <div class="container-fluid">
         @yield('body')
        </div>
    </div>


</div>


 <footer class="bg-dark text-center text-light fixed-bottom">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="" href="">AGROBID</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('final_eagri/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('final_eagri/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>







