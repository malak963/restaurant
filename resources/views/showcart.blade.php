<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class=" navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link active">About</a>
                    <a href="service.html" class="nav-item nav-link active">Service</a>
                    <a href="menu.html" class="nav-item nav-link active">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="booking.html" class="dropdown-item active">Booking</a>
                            <a href="team.html" class="dropdown-item active">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item active">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link active">Contact</a>
                   
                        @auth
                        <a href="{{url('/showcart',Auth::user()->id)}}" class="nav-item nav-link">
                        Cart[{{$count}}]
                        </a>
                        @endauth

                        @guest
                        Cart[0]
                        @endguest
                    </a>
                    <div>
                    @if (Route::has('login'))
                            <div class="navbar-nav  ms-auto px-6 py-4 sm:block">
                                @auth
                                    <a class="bg-dark bg-hidden">
                                    <x-app-layout>
   
                                   </x-app-layout>
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                            @endauth

                        @endif
                        </div>
            
        </nav>

    </div>
</div>       
  
<div class="table table-border " >
  
                    <table style=" margin-top: 180px;" align="center" bgcolor="rgb(240, 103, 40);" class="table text-center"  border="3px">

                        <thead>
                            <th style=" font-size: 27px; color:white">Food Name</th>
                            <th style=" font-size: 27px; color:white">Price</th>
                            <th style=" font-size: 27px;color:white">Quantity</th>
                            <th style=" font-size: 27px;color:white">Action</th>
                        </thead>
                        <form action="{{url('orderconfirm')}}" method="post">
                            @csrf
                        @foreach($data as $data)
                        <tr>

                            <td style=" font-size: 20px; color:white">
                            <input type="text" name="foodname[]" value="{{$data->title}}" hidden>    
                            {{$data->title}}</td>
                            <td style=" font-size: 20px; color:white">
                            <input type="text" name="price[]" value="{{$data->price}}" hidden> 
                            {{$data->price}}</td>
                            <td style=" font-size: 20px; color:white">
                            <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden>     
                            {{$data->quantity}}</td>
                            
                        </tr>
                        @endforeach
                        @foreach($data2 as $data2)
                        <tr style=" position:relative;top:-100px;right:-1000px">
                        <td><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning">Remove</a></td>
                        </tr>
                        @endforeach
                      </table>
                      <div align="center" style="padding:10px;">
                            <button class="btn btn-primary" type="button" id="order">Order Now</button>
                      </div>
                      <div  id="appear" align="center" style="padding:10px;display:none;">
                        <div style="padding:10px;">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Name">
                        </div>
                        <div style="padding:10px;">
                            <label for="">Phone</label>
                            <input type="number" name="phone" placeholder="Phone Number">
                        </div>
                        <div style="padding:10px;">
                            <label for="">Address</label>
                            <input type="text" name="address" placeholder="Address">
                        </div>
                        <div style="padding:10px;">
                            
                            <input style="color: black;border-radius: 10px;" class="btn btn-success" type="submit" value="Order Confirm"  >
                            <button id="close" type="button" class="btn btn-danger">Close</button>
                        </div>
                      </div>
                      </form>
</div>                  
<script type="text/javascript">
    $("#order").click(
        function()
        {
            $("#appear").show();
        }
    );
    $("#close").click(
        function()
        {
            $("#appear").hide();
        }
    );
</script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>
