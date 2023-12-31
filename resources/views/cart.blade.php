<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>HSH DESIGN FOR FUTURE | Cart</title>

    <!-- Favicon  -->
    <link rel="icon" href="/user/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="/user/css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="/user/img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="/user/img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="{{route('index')}}"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href="{{route('shop.index')}}">Shop</a></li>
                    <li><a href="{{route('index')}}">Product</a></li>
                    <li class="active"><a href="{{route('cart')}}">Cart</a></li>
                    <li><a href="{{ route('checkoutpage') }}">Checkout</a></li>
                    <li> @if (session()->has('khachhang'))
                        <a>Xin chào: {{ session('khachhang')->HoTen }}</a>
                        
                         @endif
                    </li>
                </ul>
            </nav>
            @if(session('success'))
            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
            </div>
            @endif
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                @if (session()->has('khachhang'))
                    <a href="login" class="btn amado-btn mb-15"> <i class="fa-solid fa-right-to-bracket"></i>LOGOUT</a>
                @else
                    <a href="login" class="btn amado-btn mb-15"> <i class="fa-solid fa-right-to-bracket"></i>LOGIN</a>
                @endif
                <a href="#" class="btn amado-btn active">New this week</a>
            </div>
            
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
               
                <a href="#" class="fav-nav"><img src="img/core-img/favorites.png" alt=""> Favourite</a>
                <a href="#" class="search-nav"><img src="img/core-img/search.png" alt=""> Search</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->
        <table>

    <tbody>
        
    </tbody>
</table>

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <form method="POST" action="{{ route('add_to_order') }}">
                                <tbody>
                                @foreach(session('cart', []) as $MaSP => $item)
    <tr>
        <td class="cart_product_img">
            <a href="#"><img src="{{ asset('user/img/product-imgs/' . $item['image'] ) }}" alt="Product"></a>
        </td>
        <td class="cart_product_desc">
            <h5>{{ $item['tensp'] }}</h5>
        </td>
        <td class="price">
            <span class="price-val">{{ ($item['gia']) * ($item['quantity']) }} $</span>
        </td>
        <td>
    <div class="qty-btn d-flex">
        <div>
            <span class="qty-minus" onclick="decreaseQty(this);"><i class="fa fa-minus" aria-hidden="true"></i></span>
            <input type="number" class="qty-text" step="1" min="1" max="300" name="quantity" value="{{ $item['quantity'] }}">
            <span class="qty-plus" onclick="increaseQty(this);"><i class="fa fa-plus" aria-hidden="true"></i></span>
        </div>
    </div>
</td>

    </tr>
    @endforeach
</tbody>
    </table>
    <script>
    function increaseQty(element) {
        var input = element.previousElementSibling;
        var value = parseInt(input.value);
        input.value = value + 1;
    }

    function decreaseQty(element) {
        var input = element.nextElementSibling;
        var value = parseInt(input.value);
        if (value > 1) {
            input.value = value - 1;
        }
    }
</script>
            </form>
            </div>
                       
                    </div>
                    @php
                        $total = 0;
                        $count = 0;
                    @endphp
                   
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                            @foreach($cart as $item)
                            @php
                                $total += $item['quantity'] * $item['gia'];
                                $count += $item['quantity'];
                            @endphp
                            @endforeach
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>Number:</span> <span>{{ $count }}</span></li>
                                <li><span>total:</span> <span>{{ $total }}$</span></li>
                              
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="{{ route('checkoutpage') }}" class="btn amado-btn w-100">Checkout</a>
                               
                               
                            </div>

                           
                            
                        </div>
                    </div>
                  
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->

    <!-- ##### Newsletter Area Start ##### -->
    <section class="newsletter-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <!-- Newsletter Text -->
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="newsletter-text mb-100">
                        <h2>Subscribe for a <span>25% Discount</span></h2>
                        <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-lg-6 col-xl-5">
                    <div class="newsletter-form mb-100">
                        <form action="#" method="post">
                            <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row align-items-center">
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-4">
                    <div class="single_widget_area">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Copywrite Text -->
                        <p class="copywrite"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->& Re-distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
</p>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-lg-8">
                    <div class="single_widget_area">
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <nav class="navbar navbar-expand-lg justify-content-end">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                                <div class="collapse navbar-collapse" id="footerNavContent">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="shop.html">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="product-details.html">Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="cart.html">Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="/user/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/user/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/user/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="/user/js/plugins.js"></script>
    <!-- Active js -->
    <script src="/user/js/active.js"></script>

</body>

</html>