<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>O'Pizza</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/crumina-fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/sty.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg"  src="/uploads/products/lg.png" />
    
    <!--Plugins styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/primary-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="{{ asset('app/css/rtl.css') }}">-->

    <!--External fonts-->
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>

<body class="">
     <div id="site-content">
         <header class="site-header">
            <div class="primary-header">
                <div class="container">
                     <a href="/" id="branding">
                        <img src="/uploads/products/lg.png" alt="Lincoln high School" width="40px" height="40px"><span style="color: #fff"><strong>O'Pizza</strong></span>
                     </a> 
                <div class="main-navigation">
                    <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                        <ul class="menu">
                             <li class="menu-item current-menu-item"><a  href="/">Home</a></li>
                        @if (Auth::guest())
                            <li class="menu-item"><a href="#menu">Menu</a></li>
                            <li class="menu-item"><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="menu-item"><a href="{{ url('/home') }}">Orders</a></li>
                            <li class="menu-item"><a href="{{ route('products.index') }}">product</a></li>
                            <li class="menu-item"><a href="{{ route('products.create') }}">New product</a></li>
                            <li class="menu-item dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                             <li>
                        <a href="{{ url('/logout') }}" width="100%" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout
                        </a>
                
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                             </li>
                       </ul>
                             </li>
                        @endif
                    </ul>
                    <ul class="nav-add">
                            <li class="cart">
                        <a href="#" class="js-cart-animate">
                            <i class="seoicon-basket"></i>
                             <span class="cart-count" style="background: #f26522;">{{ Cart::content()->count() }}</span>
                         </a>
                        <div class="cart-popup-wrap" >
                                <div class="popup-cart">
                                  <h4 class="title-cart align-center">${{ Cart::total() }}</h4> <br>
                                     <a href="/cart">
                                    <div class="btn btn-small" style="background: #f26522;">
                                    <span class="text" >View cart</span>
                                    </div>
                                    </a>
                                </div>
                             </div>
                         </li>
                    </ul>
             </div> 
         <div class="mobile-navigation"></div>
    </div> 
</div> 

<div class="home-slider">
  <div class="container">
      <div class="slider">
         <ul class="slides">
            <li>
               <div class="slide-caption">
                <span class="subheading"></span>
                   <h2 class="slide-title">Welcome</h2>
                        <p></p>
                        <p>It’s all about the pizza We cooked your desired Pizza Recipe</p>
                            <a href="#" class="button primary large">Order Now</a>
                             </div>
                            </li>
                            <li>
               <div class="slide-caption">
                    <h2 class="slide-title">Crunchy</h2>
                        <p>The crunchy crust with chocolate ,and soft chewy pizza base, gives a delicious texture with unique taste , takes your taste buds to another level.</p>
                         <a href="#" class="button primary large">Order Now</a>
                             </div>
                                <li>
                <div class="slide-caption">
                   <h2 class="slide-title">Delicious</h2>
                        <p>Stop in and say hi and see how locals name Delicious the best pizza. When you're hungry for beats and pizza come to our Delicious Pizza to satisfy that craving. Hope to see you soon!</p>
                     <a href="#" class="button primary large">Order Now</a>
                        </div>
                     </li>
                    </ul> 
               </div>
            </div>
         </div> 
    </div>
    
<div class="content-wrapper">

    @yield('page')

</div>

<!-- Footer -->
<footer class="footer">
        <div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Contact us</h3>
							<address>Ojodu Berger, Lagos</address><br><p>We pride ourselves in offering you the very best pizza, and we value your patronage.</p>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Social media</h3>
						
							<div class="social-links circle">
								<a href="https://www.facebook.com/" target="blank"><i class="fa fa-facebook"></i></a>
								<a href="https://google.com" target="blank"><i class="fa fa-google-plus"></i></a>
								<a href="https://twitter.com/" target="blank"><i class="fa fa-twitter"></i></a>
								<a href="https://pinterest.com" target="blank"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>
                
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Services</h3>
							<ul class="student-list">
								<li><a href="/">
										<img src="/uploads/products/pizza-3.jpg" width="50px" height="70px" alt="" class="avatar">
										<span class="fn"> Healty Pizza</span>
									</a></li>
								<li><a href="/">
										<img src="/uploads/products/delivery.jpg" width="50px" height="100px" alt="" class="avatar">
										<span class="average">Fastest Delivery</span>
                                    </a></li>
                                    <li><a href="/">
                                            <img src="/uploads/products/food.jpg" width="50px" height="70px" alt="" class="avatar">
                                            <span class="average">Original Recipes</span>
                                    </a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Have a Questions?</h3>
							<a href="#" class="fa fa-location-arrow"><span class="text">&nbsp; Ojodu Berger, Lagos</span></a>
                            <a href="#" class="fa fa-phone"> <span class="text">&nbsp; (+234) 08167 929 922</span></a>
                            <a href="#" class="fa fa-envelope-square"><span class="text">&nbsp; Info@pizza.com</span></a>
						</div>
                    </div>
				</div>
			</div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="{{ asset('app/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('app/js/crum-mega-menu.js') }}"></script>
<script src="{{ asset('app/js/swiper.jquery.min.js') }}"></script>
<script src="{{ asset('app/js/theme-plugins.js') }}"></script>
<script src="{{ asset('app/js/main.js') }}"></script>
<script src="{{ asset('app/js/form-actions.js') }}"></script>

<script src="{{ asset('app/js/velocity.min.js') }}"></script>
<script src="{{ asset('app/js/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('app/js/animation.velocity.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- ...end JS Script -->

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/app1.js') }}"></script>

<script>
    @if(Session::has('success'))
        toastr.success('{{ Session::get('success') }}');
    @endif
    @if(Session::has('info'))
        toastr.info('{{ Session::get('info') }}');
    @endif
</script>

</body>
</html>