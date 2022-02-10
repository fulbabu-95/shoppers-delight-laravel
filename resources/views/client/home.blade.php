@extends('client_layouts.client')

@section('title')
    Welcome to our Shopper's Delight
@endsection

@section('content')

<style type="text/css">
  .product{
    border: 1px solid #c7cbe7;
  }
  .product .text h3{
    font-family: 'Poppins';
    font-weight: 500;
  }
  .product .text h3 a{
      color: #82ae46;
  }
  .product:hover{
    box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px;
    border: none;
  }
  .btn-style{
    color: #fff;
    border: 1px solid #fff;
    font-family: inherit;
    font-size: 1rem;
    border-radius: 50px;
    padding: 10px;
  }
  .btn-style:hover{
    background-color: #fff;
    color: #000;
  }
  .subheading{
    color: #fff;
  }
  #offer-time{
    color: #fff;
    font-size: 4rem;
    font-family: monospace;
  }
  
</style>
    <!-- start content -->
    <section id="home-section" class="hero">
			<div class="home-slider owl-carousel">
				@foreach ($sliders as $slider)
				<div class="slider-item" style="background-image: url(/storage/slider_images/{{$slider->slider_image}}); height: 500px">
					<div class="overlay"></div>
					<div class="container">
						<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
							<div class="col-md-12 ftco-animate text-center">
							<h1 class="mb-2 description1" style="font-family: inherit; font-size: 5rem; letter-spacing: 2px; color: #fff">{{$slider->description1}}</h1>
							<h2 class="subheading mb-4 description2" style="font-family: inherit font-size: 2rem;">{{$slider->description2}}</h2>
							<p class=""><a href="{{url('/')}}" class="btn-style">View Details</a></p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over 15,000 ৳</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Always Intake</h3>
                <span>Product well package</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Original Product</h3>
                <span>Best Quality ever</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Customers Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="">
									<div class="text text-center">
										<h2>Features</h2>
										<p>Protect the health of every home</p>
										<p><a href="#" class="btn btn-primary">Shop now</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/Others/19-117-794-S05.jpg)">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Processor</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/Others/hp.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="#">Monitor</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(frontend/images/others/330952.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Laptop</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(frontend/images/new_2022/Samsung-Galaxy-Z-Fold3-5G-image.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="#">Mobile</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Featured Products</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Shopper's elight is a very fast delivery e-commerce company in bangladesh.</p>
          </div>
        </div>   		
    	</div>
    	<div class="container">
    		<div class="row">
    			@foreach ($products as $product)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" class="img-prod" style="width: 100%; height: 200px; padding: 10px"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="Colorlib Template">
								<!--<span class="status">30%</span>-->
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$product->product_name}}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><!--<span class="mr-2 price-dc">$120.00</span>--><span class="price-sale">{{$product->product_price . ' ৳'}}</span></p>
									</div>
								</div>
								<div class="bottom-area d-flex px-3">
									<div class="m-auto d-flex">
										<a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
											<span><i class="ion-ios-menu"></i></span>
										</a>
										<a href="{{url('/addtocart/' . $product->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
											<span><i class="ion-ios-cart"></i></span>
										</a>
										<a href="#" class="heart d-flex justify-content-center align-items-center ">
											<span><i class="ion-ios-heart"></i></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
    		</div>
    	</div>
    </section>
		
		<section class="ftco-section img" style="background-image: url(frontend/images/cover/6ccrq5boafd7.jpg); height: 40rem;">
    	<div class="container">
				<div class="row justify-content-end">
          <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate" style="color: #fff;">
          	<span class="subheading" style="color: #fff;">Best Price For You</span>
            <h2 class="mb-4" style="color: #fff;">Deal of the day</h2>
            <h3><a href="#" style="color: #fff;">Asus Zenfone 6</a></h3>
            <p style="color: #fff; text-align: justify">Asus Zenfone 6 ZS630KL comes with 6.4 inches Full HD+ IPS LCD screen which is protected by a strong 6th generation Gorilla Glass. It has 6 or 8 GB RAM, up to 2.84 GHz octa-core CPU and Adreno 640 GPU. It is powered by Qualcomm Snapdragon 855 (7 nm) chipset</p>
            <span class="price" style="color: #fff;"> <del>৳ 47,999</del>  <a href="#" style="color: #fff;"> Now ৳45,000 Only</a></span>
            <div class="offer-timer">
              <p id="offer-time"></p>

              <script>
              var countDownDate = new Date("Feb 10, 2022 12:00:00").getTime();
              var x = setInterval(function() {
                var now = new Date().getTime();
                var distance = countDownDate - now;
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                document.getElementById("offer-time").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                if (distance < 0) {
                  clearInterval(x);
                  document.getElementById("offer-time").innerHTML = "EXPIRED";
                }
              }, 1000);
              </script>

            </div>

            <!-- <div id="timer" class="d-flex mt-5">
						  <div class="time" id="days"></div>
						  <div class="time pl-3" id="hours"></div>
						  <div class="time pl-3" id="minutes"></div>
						  <div class="time pl-3" id="seconds"></div>
						</div> -->
          </div>
        </div>   		
    	</div>
    </section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Our satisfied customer says</h2>
            <!-- <p>Shopper's Delight is a very fast delivery e-commerce company in bangladesh.</p> -->
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(frontend/images/jhankar-mahbub.jpeg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Assalamu Alaikum, I am <b>Jhankar Mahbub</b>, I will discuss today one of the best e-commerce company of today which is called Shoppers Daylight. It is a digital e-commerce based company. Here you will find everything original. They never misbehave with the customer. Lastly, the price of their products is low but the quality is good.</p>
                    <p class="name">Jhankar Mahbub</p>
                    <span class="position">Sr. Web Developer</span><br>
                    <span class="position">Programming Hero</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(frontend/images/anisul-islam.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Assalamu Alaikum, I am <b>Anisul Islam</b>, I will discuss today one of the best e-commerce company of today which is called Shoppers Daylight. It is a digital e-commerce based company. Here you will find everything original. They never misbehave with the customer. Lastly, the price of their products is low but the quality is good.</p>
                    <p class="name">Anisul Islam</p>
                    <span class="position">Software Engineer</span><br>
                    <span class="position">M-Files</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(frontend/images/tamim-shahriar-subeen.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line">Assalamu Alaikum, I am <b>Tamim Shahrier Subeen</b>, I will discuss today one of the best e-commerce company of today which is called Shoppers Daylight. It is a digital e-commerce based company. Here you will find everything original. They never misbehave with the customer. Lastly, the price of their products is low but the quality is good.</p>
                    <p class="name">Tamim Shahriar Subeen</p>
                    <span class="position">Sr. Software Engineer</span><br>
                    <span class="position">Mukto Software</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr>

		<section class="ftco-section ftco-partner">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="frontend/images/partner-1.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="frontend/images/partner-2.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="frontend/images/partner-3.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="frontend/images/partner-4.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-sm ftco-animate">
    				<a href="#" class="partner"><img src="frontend/images/partner-5.png" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    		</div>
    	</div>
    </section>

	


    <!-- end content -->
@endsection






		