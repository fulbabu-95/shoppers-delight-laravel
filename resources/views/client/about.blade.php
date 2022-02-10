<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About us - Shopper's Delight</title>
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
        /*
        .contact-us{
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            margin-bottom: 100px;
            margin-top: 100px;
        }*/
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
        .partner{
            padding: 10px;
            transition: all .3s ease-out; 
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            color: #000;
            border-radius: 10px;
            background-color: #1f4068;
        }
        .partner img{
            height: 350px;
            width: 100%;
            transition: all .3s ease-out;
            border-radius: 10px;
        }
        .partner img:hover{
            transition: all .3s ease-in;
            transform: scale(1.06);
            border-radius: 10px;
        }
        .partner:hover{
            cursor: pointer;
            transition: all .3s ease-in;
            border-radius: 10px;
        }
        .partner h3{
            color: #fff;
            text-align: center;
            margin-top: 10px;
            font-family: inherit;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .partner p{
            color: #fff;
            text-align: center;
            font-family: inherit;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
    </style>
  </head>
  <body class="goto-here"  style="background-color: rgb(244, 244, 244); background-image: url('frontend/images/scattered-forcefields.svg')">
  <!--Navbar-->

    @include('client_layouts.navbar')

    <!--Start Content-->
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontend/images/cover/mi-11t-pro-banner.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><p class="mr-2"><a href="{{url('home')}}">Home</a></p> <p>About Us</p></p>
            <h1 class="mb-0 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
                    <h2 style="color: #82ae46; text-align: center; margin-bottom: 25px; text-transform: uppercase; font-family: initial">Our Partner</h2>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <div class="partner">
                                    <img src="frontend/images/owner-2.jpg" alt="Owner">
                                    <div class="partner-title">
                                        <h3>Fahim Islam</h3>
                                        <p>Founder & CEO</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="partner">
                                    <img src="frontend/images/owner-3.jpg" alt="Owner">
                                    <div class="partner-title">
                                        <h3>Fulbabu</h3>
                                        <p>Co-Founder</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <div class="partner">
                                    <img src="frontend/images/owner-1.jpg" alt="Owner">
                                    <div class="partner-title">
                                        <h3>Fahim Islam</h3>
                                        <p>Co-Founder & Director</p>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>
        

    <!--End Content-->

    <!--Footer-->
    @include('client_layouts.footer')

    </body>
</html>