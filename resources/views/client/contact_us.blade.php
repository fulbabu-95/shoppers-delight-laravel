<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact us - Shopper's Delight</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="frontend/images/favico.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}"> 
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('forntend/css/fontawesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.timepicker.css')}}">

    
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <style type="text/css">
        .contact-us{
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 100px;
            margin-top: 100px;
        }
        .section-title p{
            color: #12bb73;
            text-transform: uppercase;
            font-size: 18px;
            font-family: Roboto,sans-serif;
        }
        .section-title h1{
            font-size: 40px;
            font-weight: 400;
            letter-spacing: 2px;
            text-transform: capitalize;
            font-family: inherit;
            color: #766161;
            margin-bottom: 25px;
        }
        .form-control{
            border: none;
            border-bottom: 1px solid #d7cece;
        }
        .form-control:focus{
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 1px solid #dc3545;
        }
        .message{
            height: 150px;
        }

        .main-btn-alt{
            color: #fff;
            background-color: #0000ff;
            border: none;
            padding: 10px;
            width: 100px;
            font-family: inherit;
            font-size: 20px;
            margin-left: 50%;
            transition: .3s all ease-in;
            border-radius: 5px;
        }
        .main-btn-alt:hover{
            background-color: #000;
            color: #fff;
            padding-right: 5px;
            border-radius: 5px;
            cursor: pointer;
            transition: .3s all ease-out;
            box-shadow: rgb(0 0 0 / 35%) 5px 5px 0px;
        }
    </style>
  </head>
  <body class="goto-here"  style="background-color: rgb(244, 244, 244)">
  <!--Navbar-->

    @include('client_layouts.navbar')

    <!--Start Content-->
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontend/images/cover/mi-11t-pro-banner.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{url('home')}}">Home</a></span> <span>Contact Us</span></p>
            <h1 class="mb-0 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
        <div class="container">
                <div class="contact-us">
                    @if (Session::has('status'))
						<div class="alert alert-success">
							{{Session::get('status')}}
						</div>
					@endif
                    <div class="section-title">
                        <p>HAVE ANY QUESTION?</p>
                        <h1>Let's Get In Touch</h1>
                    </div>
                    <form action="{{route('contact.sent')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <input type="text" class="form-control form-width" name="name" required placeholder="Name" aria-label="First name">
                            </div>
                            <div class="form-group col">
                                <input type="text" class="form-control form-width" name="email" required placeholder="Email" aria-label="Last name">
                            </div>
                        </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" required placeholder="Subject" aria-label="Last name">
                            </div>

                            <div class="form-group message">
                                <textarea name="message" placeholder="Message" required="" id="message" class="form-control"></textarea>
                            </div>
                            <button class="button main-btn-alt">Submit</button>
                    </form>
                </div>
        </div>
    </div>
        

    <!--End Content-->

    <!--Footer-->
    @include('client_layouts.footer')

    </body>
</html>