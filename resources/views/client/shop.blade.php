@extends('client_layouts.client')
@section('title')
	Shop - Shopper's Delight
@endsection
@section('content')
<!-- start content -->
	
    <div class="hero-wrap hero-bread" style="background-image: url('{{asset('frontend/images/cover/mi-11t-pro-banner.jpg')}}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{url('home')}}">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
<!--End section-->

        <!--Start Content-->

        @yield('content')

        <!--End Content-->
<style type="text/css">
  .product{
    border: 1px solid #c7cbe7;
	border-radius: 5px;
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
	border-radius: 5px;
  }
</style>
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="{{url('/shop')}}" class="{{request()->is('shop') ? 'active' : ''}}">All</a></li>
						@foreach ($categories as $category)
							<li><a href="{{url('/view_product_by_category/' . $category->category_name)}}" class="{{request()->is('view_product_by_category/' . $category->category_name) ? 'active' : ''}}">{{$category->category_name}}</a></li>
						@endforeach
    				</ul>
    			</div>
    		</div>
    		<div class="row">
    			@foreach ($products as $product)
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="product">
							<a href="#" class="img-prod" style="width: 100%; height: 200px; padding: 10px"><img class="img-fluid" src="/storage/product_images/{{$product->product_image}}" alt="Colorlib Template">
								<!-- <span class="status">30%</span> -->
								<div class="overlay"></div>
							</a>
							<div class="text py-3 pb-4 px-3 text-center">
								<h3><a href="#">{{$product->product_name}}</a></h3>
								<div class="d-flex">
									<div class="pricing">
										<p class="price"><span class="price-sale">{{$product->product_price . ' ৳'}}</span></p>
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
    	<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <!--End Section-->

    @endsection