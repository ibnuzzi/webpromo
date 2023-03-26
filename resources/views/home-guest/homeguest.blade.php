<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/home-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:50:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="template" content="greeny" />
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template" />
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online" />
    <title>Beranda - Gudang Diskon</title>
    <link rel="icon" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/iconremove.png') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/flaticon/flaticon.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/icofont/icofont.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/fontawesome/fontawesome.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/venobox/venobox.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/slickslider/slick.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/niceselect/nice-select.min.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/home-category.css') }}" />

    <style>
        .product-disable::before::before {
            position: absolute;
            content: "Expired";
            top: 40%;
            left: 50%;
            z-index: 2;
            width: 100%;
            font-size: 15px;
            font-weight: 400;
            padding: 15px 0px;
            text-align: center;
            text-transform: uppercase;
            text-shadow: var(--instagram-tshadow);
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            color: var(--white);
            background: rgba(224, 152, 22, 0.9);
        }
    </style>

</head>

<body>
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Selamat datang di Gudang Promo sini adalah pusat Promo!</p>
                    </div>
                </div>

                <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select">
                        </div>
                        <div class="header-select">
                        </div>
                    </div>
                </div>

                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href="/faq">butuh bantuan</a></li>
                        <li><a href="/kontak">kontak kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <button class="header-user"><img
                            src="{{ 'template/mironmahmud.com/greeny/assets/ltr/images/user.png' }}"
                            alt="user" /></button><a href="home-category.html"><img
                            src="{{ 'template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png' }}"
                            alt="logo" /></a><button class="header-src"><i class="fas fa-search"></i></button>
                </div>
                <a href="home-category.html" class="header-logo"><img style="height:80px;"
                        src="{{ 'template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png' }}"
                        alt="logo" /></a>

                <form action="{{ url('/filter') }}" method="GET" class="header-form">
                    <input type="search" name="cari" value="{{ Request::get('cari') }}"
                        placeholder="Cari sesuatu..." /><button type="submit"><i class="fas fa-search"></i></button>
                </form>

                @guest
                    <a href="/login" class="header-widget" title="My Account">
                        <img src="{{ 'template/mironmahmud.com/greeny/assets/ltr/images/user.png' }}" alt="user" />
                    </a>
                @else
                    @if (Auth::user()->fotoprofil)
                        <a href="/profile" class="header-widget ms-auto" title="My Account">
                            <img style="height:50px; width:50px;"
                                src="{{ asset('fotoprofil/' . Auth::user()->fotoprofil) }}" alt="user" />
                        </a>
                    @else
                        <a href="/profile" class="header-widget" title="My Account">
                            <img src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/user.png') }}"
                                alt="user" />
                        </a>
                    @endif
                @endguest

            </div>
        </div>
        </div>
    </header>

    @if(Auth::check() && Auth::user()->role == 'promotor')
    <nav class="navbar-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-content">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="/berandapromotor">Beranda Promotor</a>
                                <ul class="dropdown-position-list">
                                    <div style="display: flex;">
                                        <div>
                                            <li class="navbar-item dropdown">
                                                <a class="navbar-link" href="/">Beranda Guest</a>
                                            </li>
                                        </div>
                                </ul>
                            </li>
                            <!-- Product Link -->
                            <li class="navbar-item dropdown-megamenu">
                                <a class="navbar-link dropdown-arrow" href="#">Kategori</a>
                                <div class="megamenu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="megamenu-wrap">
                                                    <h5 class="megamenu-title">Halaman Kategori</h5>
                                                    <ul class="megamenu-list row">
                                                        @foreach ($datak as $kategori => $row)
                                                            <li class="col-3"><a
                                                                    href="/produksimple/{{ $row->kategori }}/{{ $row->id }}">{{ $row->kategori }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <!-- End Link -->

                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown" href="about.html">Tentang Kami</a>

                            </li>
                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown" href="contact.html">Kontak Kami</a>

                            </li>



                        </ul>
                        <div class="navbar-info-group">
                            <div class="navbar-info">
                                <i class="icofont-ui-touch-phone"></i>
                                <p><small>hubungi kami</small><span>(+62) 55 6778 9098</span></p>
                            </div>
                            <div class="navbar-info">
                                <i class="icofont-ui-email"></i>
                                <p><small>email kami</small><span>xcode@gmail.com</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@else
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item dropdown">
                            <a class="navbar-link" href="/">Beranda</a>
                        </li>
                        <!-- Product Link -->
                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">Kategori</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">Halaman Kategori</h5>
                                                <ul class="megamenu-list row">
                                                    @foreach ($datak as $kategori => $row)
                                                        <li class="col-3"><a
                                                                href="/produksimple/{{ $row->kategori }}/{{ $row->id }}">{{ $row->kategori }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- End Link -->
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown" href="/tentangkami">Tentang Kami</a>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown" href="/kontak">Kontak Kami</a>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <div class="navbar-info">
                            <i class="icofont-ui-touch-phone"></i>
                            <p><small>hubungi kami</small><span>(+62) 55 6778 9098</span></p>
                        </div>
                        <div class="navbar-info">
                            <i class="icofont-ui-email"></i>
                            <p><small>email kami</small><span>xcode@gmail.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@endif
    <!-- Product Category -->
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4>
            <button class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-groceries"></i><span>groceries</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fruit"></i><span>fruits</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dairy-products"></i><span>dairy
                        farm</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i class="flaticon-crab"></i><span>sea
                        foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i class="flaticon-salad"></i><span>diet
                        foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i class="flaticon-dried-fruit"></i><span>dry
                        foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i class="flaticon-fast-food"></i><span>fast
                        foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-cheers"></i><span>drinks</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-beverage"></i><span>coffee</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-barbecue"></i><span>meats</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fish"></i><span>fishes</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Agujjim</a></li>
                    <li><a href="#">saltfish</a></li>
                    <li><a href="#">pazza</a></li>
                </ul>
            </li>
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div>
            <button class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/01.jpg" alt="product" /></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                class="action-plus" title="Quantity Plus">
                                <i class="icofont-plus"></i>
                            </button>
                        </div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/02.jpg" alt="product" /></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                class="action-plus" title="Quantity Plus">
                                <i class="icofont-plus"></i>
                            </button>
                        </div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/03.jpg" alt="product" /></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                class="action-plus" title="Quantity Plus">
                                <i class="icofont-plus"></i>
                            </button>
                        </div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/04.jpg" alt="product" /></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                class="action-plus" title="Quantity Plus">
                                <i class="icofont-plus"></i>
                            </button>
                        </div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="images/product/05.jpg" alt="product" /></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1" /><button
                                class="action-plus" title="Quantity Plus">
                                <i class="icofont-plus"></i>
                            </button>
                        </div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer">
            <button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form">
                <input type="text" placeholder="Enter your coupon code" /><button
                    type="submit"><span>apply</span></button>
            </form>
            <a class="cart-checkout-btn" href="checkout.html"><span class="checkout-label">Proceed to
                    Checkout</span><span class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <aside class="nav-sidebar">
        <div class="nav-header">
            <a href="#"><img src="images/diskonbg.png" alt="logo" /></a><button class="nav-close"><i
                    class="icofont-close"></i></button>
        </div>
        <div class="nav-content">
            <div class="nav-btn">
                <a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a>
            </div>
            <div class="nav-select-group">
                <div class="nav-select">
                    <i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div>
                <div class="nav-select">
                    <i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select>
                </div>
            </div>
            <ul class="nav-list">
                <li>
                    <a class="nav-link dropdown-link" href="home-category.html"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid.html">Home grid</a></li>
                        <li><a href="index.html">Home index</a></li>
                        <li><a href="home-classic.html">Home classic</a></li>
                        <li><a href="home-standard.html">Home standard</a></li>
                        <li><a href="home-category.html">Home category</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column.html">shop 5 column</a></li>
                        <li><a href="shop-4column.html">shop 4 column</a></li>
                        <li><a href="shop-3column.html">shop 3 column</a></li>
                        <li><a href="shop-2column.html">shop 2 column</a></li>
                        <li><a href="shop-1column.html">shop 1 column</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab.html">product tab</a></li>
                        <li><a href="product-grid.html">product grid</a></li>
                        <li><a href="product-video.html">product video</a></li>
                        <li><a href="product-simple.html">product simple</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="wallet.html">wallet</a></li>
                        <li><a href="wishlist.html">wishlist</a></li>
                        <li><a href="compare.html">compare</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="orderlist.html">order history</a></li>
                        <li><a href="invoice.html">order invoice</a></li>
                        <li><a href="email-template.html">email template</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                    <ul class="dropdown-list">
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="reset-password.html">reset password</a></li>
                        <li><a href="change-password.html">change password</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="blog-standard.html"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-standard.html">blog standard</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-author.html">blog author</a></li>
                    </ul>
                </li>
                <li>
                    <a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a>
                </li>
                <li>
                    <a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a>
                </li>
                <li>
                    <a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a>
                </li>
                <li>
                    <a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a>
                </li>
                <li>
                    <a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a>
                </li>
                <li>
                    <a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a>
                </li>
                <li>
                    <a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a>
                </li>
                <li>
                    <a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a>
                </li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info">
                    <i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info">
                    <i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    <div class="mobile-menu">
        <a href="index.html" title="Home Page"><i class="fas fa-home"></i><span>Home</span></a><button
            class="cate-btn" title="Category List"><i class="fas fa-list"></i><span>category</span></button><button
            class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a>
    </div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/jasa7.png"></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Jasa Pembuatan Website</a></h3>
                                <div class="view-meta">

                                    <p style="font-size: 16px;">BRAND :<a href="#">Jawon Virtual Marketing</a>
                                    </p>

                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>

                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>

                                <p class="mb-3">Promo pembuatan website baru dengan harga mulai dari Rp3.999.000,-
                                    Tahun
                                    Pertama. Dengan
                                    bonus berupa Free Domain (com, id, co.id, net, org), Garansi perbaikan jika
                                    Error/Kena Hack dan juga
                                    Free Revisi dan Maintance (1 bulan diawal). Jika bermitat silahkan <a
                                        href="#">Klik
                                        Link disini!.</a>
                                </p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Jasa</a></li>
                                        <li><a href="#">Website</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view2">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/makanan 1.jpg"></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Makanan Paket Special Hoka Ramen</a>
                                </h3>
                                <div class="view-meta">

                                    <p style="font-size: 16px;">BRAND :<a href="#">Hokben</a></p>

                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>

                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="mb-3">Paket special Hoka ramen kini sudah tersedia dengan menu barunya
                                    Spicy
                                    Ramen + 2 fried
                                    Dumpling + Ocha hanya Rp58.000 nett (Khusus Dine in atau Makan ditempat). Syarat dan
                                    ketentuan berlaku
                                </p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Makanan</a></li>
                                        <li><a href="#">Ramen</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view3">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/kecantikan 1.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Kecantikan Febulos Ella Skincare</a>
                                </h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">Brand :<a href="#">Fabulous</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>

                                <p class="mb-3">Promo kecantikan Fabulous Diskon naik sampai 30% untuk perawatan
                                    wajah
                                    dan Diskon 20%
                                    untuk produk kecantikan. Berlaku hanya di bulan Februari 2023</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Kecantikan</a></li>
                                        <li><a href="#">Skincare</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view6">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/elektronik/elektronik 2.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Kejutan Grosir</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Televisi atau Tv merupakan produk elektronik yang digunakan
                                    untuk mencari
                                    hiburan, berita dan informasi lainnya. Produk tv merupakan produk yang hampir semua
                                    rumah
                                    membutuhkannya, setiap kali orang pindah rumah, entah karena menikah dan lain
                                    sebagainya, tv menjadi
                                    barang yang wajib dibeli.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Elektronik</li>

                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view7">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/elektronik/elektronik 4.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Kejutan Grosir</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Elektronik</li>

                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view4">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/pakaian 3.png"></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Pakaian Lotte Mart</a></h3>
                                <div class="view-meta">

                                    <p style="font-size: 16px;">BRAND :<a href="#">Lotte Mart</a></p>

                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>

                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>

                                <p class="mb-3">Diskon produk The Warm Waffle hanya Rp100.000 hanya di Lotte Mart.
                                    Periode 6-10 Oktober
                                </p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Pakaian</a></li>
                                        <li><a href="#">RainyOutfit</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view5">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/valentine 3.png"></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Valentaine Chocolate Promo</a></h3>
                                <div class="view-meta">

                                    <p style="font-size: 16px;">BRAND :<a href="#">SuperIndo</a></p>

                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>

                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>

                                <p class="mb-3">SuperIndo kini menyediakan diskon Chocolate Valentaine dengan harga
                                    mulai dari Rp8.000
                                    sampai Rp33.000, Berlaku mulai 9-15 Februari (Promo berlaku di Jabodetabek,
                                    Palembang Diskon dan harga
                                    di kota lain bisa berbeda!).</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Valentaine</a></li>
                                        <li><a href="#">Coklat</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view8">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/makanan/makanan 5.jpg "></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">combo Mabar</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Makanan</li>
                                        <li><a href="#">Kentucky</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view9">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/liburan/liburan3.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Paket New Normal</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Driver profesinal dan handal, kenyamanan terjamin respon
                                    cepat.
                                    Sewa mobil di lombok murah hanya di New Normal terpercaya dan teraman.
                                    Layanan transportasi antarkota travel Banyuwangi Surabaya, Malang, Denpasar, Bali.
                                    Jemput antar alamat, keberangkatan rutin tiap hari, gratis 1x makan, gratis tiket
                                    ferry.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Liburan</li>
                                        <li><a href="#">Akhir Pekan</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view10">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/bioskop/bioskop6.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Paket New Normal</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Liburan</li>
                                        <li><a href="#">Akhir Pekan</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view11">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/elektronik/elektronik 7.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo potongan hingga 500.000</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Elektronik</li>

                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view12">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/kecantikan/kecantikan 8.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Cantik gak perlu mahal</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Gunakan produk kecantikan ini untuk kulit wajah putih instan.
                                    Dalam 3 hari wajah bebas dari jerawat.
                                    Cukup pakai sekali, Anda bisa langsung rasakan khasiatnya!.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Kecantikan</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="product-view13">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/promosi_jasa/jasa12.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Paket New Normal</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Jasa</li>
                                        <li><a href="#">Desain</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view14">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/promosi_jasa/jasa10.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Jasa Pembuatan Website</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Elektronik</li>

                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view15">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/promosi_jasa/jasa10.png"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Pembuatan Website</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Jasa</li>
                                        <li><a href="#">Website</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view16">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/pakaian/pakaian 10.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Diskon baju Kelas Executive!</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">
                                    DISKON 20% bagi bunda yang ikutan PO s/d 15 Desember 2020.
                                    3 BAJU CUMA 100.000.
                                    Harga IDR 85.000 sudah sepasang.
                                    Sangat nyaman untuk aktivitas sehari-hari.
                                    Selengkapnya baca 60+ kata – kata promosi baju.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Jasa</li>
                                        <li><a href="#">Website</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view17">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/Bioskop/bioskop8.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Cepat Kilat</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Bioskop</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view18">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/Hiburan/hiburan5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Cepat Kilat</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Selamat pagi sudah tau bakal liburan kemana hari ini?⁣ Coba
                                    kalian ke Duffan, mereka banyak opsi tempat liburan loh. Mulai dari omah budaya,
                                    flower garden sampai sampai batik gallery. Setelah menanti lama, merindukan liburan,
                                    kami akan buka kembali.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Hiburan/li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view17">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/Katalog/katalog5.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Cepat Kilat</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Katalog</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view19">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/valentine/valentaine 8.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Cepat Kilat</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit non
                                    tempora magni
                                    repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <p class="mb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum
                                    asperiores eius ex quia
                                    itaque.
                                    Harum, doloribus? Veritatis quas sequi harum rem possimus provident quaerat! Quos
                                    autem eius nesciunt
                                    inventore ad?</p>

                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Valentine</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="product-view20">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/makanan/makanan 3.jpg"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="#">Promo Cepat Kilat</a></h3>
                                <div class="view-meta">
                                    <p style="font-size: 16px;">BRAND:<a href="#">Username Promotor</a></p>
                                </div>
                                <div class="view-meta">
                                    <h6 style="color: red;">Berlaku Hingga : 28 February 2023</h6>
                                </div>
                                <p style="font-size:16px;font-weight: bold;">Deskripsi Promo</p>
                                <p class="view-desc mt-2">Monday Coffe Segar Hanya Rp 15.000.
                                    Bubble Enak Dengan Resep Baru.
                                    Akan Tersedia Stand Minuman JJ Disini.</p>


                                <div class="view-list-group">
                                    <label class="view-list-title">tag :</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">Makanan</li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Bagikan :</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="suggest-part">
        <div class="container">
            <ul class="suggest-slider slider-arrow">
                @foreach ($data as $kategori => $row)
                    <li>
                        <a class="suggest-card" href="/produksimple/{{ $row->kategori }}/{{ $row->id }}"><img
                                style="width:200px; height:200px;"
                                src="{{ asset('/fotoproduk/' . $row->fotoproduk) }}" alt="suggest" />
                            <h5>{{ $row->kategori }}</h5>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
    <div class="banner-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="home-category-slider slider-arrow slider-dots">
                        @foreach ($datab as $banner)
                            <a class="banner-card"><img style="height:500px;; width:100%;"
                                    src="{{ asset('/banner/' . $banner->banner1) }}" alt="banner" /></a>
                            <a class="banner-card"><img style="height:500px;; width:100%;"
                                    src="{{ asset('/banner/' . $banner->banner2) }}" alt="banner" /></a>
                            <a class="banner-card"><img style="height:500px;; width:100%;"
                                    src="{{ asset('/banner/' . $banner->banner3) }}" alt="banner" /></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img">
                        <a href="#"><img style="height:200px;" src="images/Hiburan/hiburan6.jpg"
                                alt="promo" /></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img">
                        <a href="#"><img style="height:200px;" src="images/Hiburan/hiburan7.jpg"
                                alt="promo" /></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="promo-img">
                        <a href="#"><img style="height:200px;" src="images/Hiburan/hiburan8.jpg"
                                alt="promo" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Promo Terbaru</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                @foreach ($baru->slice(0, 5) as $row)
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text new">Baru</label></div>
                                <a class="product-image" href="/detpromo/{{ $row->id }}"><img
                                        style="height: 200px; width:200px; margin-right: 50px;"
                                        src="{{ asset('sampul/' . $row->sampul) }}" alt="product" /></a>
                                <div class="product-widget"></div>
                            </div>
                            <div class="product-content">

                                <h6 class="product-name"><a href="#product-view" data-bs-toggle="modal"
                                        data-bs-target="#product-view">{{ $row->namapromo }}</a></h6>
                                <p style="color: red;">Berakhir {{ $row->masapromo }}</p>


                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
@if ($baru->count()>= 4)
<div class="row">
    <div class="col-lg-12">
        <div class="section-btn-25">
            <a href="/filter" class="btn btn-outline"><i class="fas fa-eye"></i><span>
                lebih
                banyak</span></a>
        </div>
    </div>
</div>
@endif
    <!-- <div class="section promo-part">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="promo-img">
            <a href="#"><img src="images/promo/home/promodiedit.jpg" alt="promo" /></a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
    {{-- <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Promo Unggulan</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">Top</label></div>
                            <button class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="#product-view6" data-bs-toggle="modal"
                                data-bs-target="#product-view6"><img style="height: 200px; width:200px;"
                                    src="images/elektronik/elektronik 2.png" alt="product" /></a>
                            <div class="feature-widget">

                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="#product-view6" data-bs-toggle="modal"
                                    data-bs-target="#product-view6">Big deal Promo</a></h6>
                            <p class="feature-desc">Big Deal Promo elektronik Terbaru, Terlaris, dan Termurah.
                                Syarat dan ketentuan berlaku.
                            </p>

                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1" /><button class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">Top</label></div>
                            <button class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="#product-view14" data-bs-toggle="modal"
                                data-bs-target="#product-view14"><img style="height: 200px; width:200px;"
                                    src="images/promosi_jasa/jasa10.jpg" alt="product" /></a>
                            <div class="feature-widget">

                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="#product-view14" data-bs-toggle="modal"
                                    data-bs-target="#product-view14">Jasa Website</a></h6>
                            <p class="feature-desc">Jasa Desain Web kualitas Premium design dan performance terbaik
                                1000
                                lebih web
                                kami buat.</p>

                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1" /><button class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">Top</label></div>
                            <button class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="#product-view16" data-bs-toggle="modal"
                                data-bs-target="#product-view16"><img style="height: 200px; width:200px;"
                                    src="images/pakaian/pakaian 10.jpg" alt="product" /></a>
                            <div class="feature-widget">

                            </div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="#product-view16" data-bs-toggle="modal"
                                    data-bs-target="#product-view16">Baju Executive</a></h6>
                            <p class="feature-desc">Diskon spesial mulai 20% hingga 25% untuk 100 pembeli pertama.
                                Dapatkan promonya
                                sebelum kehabisan!</p>

                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1" /><button class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label"><label class="label-text feat">Top</label></div>
                            <button class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                class="feature-image" href="#product-view7" data-bs-toggle="modal"
                                data-bs-target="#product-view7"><img style="height: 200px; width:200px;"
                                    src="images/elektronik/elektronik 4.png" alt="product" /></a>
                            <div class="feature-widget"></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="#product-view7" data-bs-toggle="modal"
                                    data-bs-target="#product-view7">Kejutan Grosir</a></h6>
                            <div class="feature-rating">
                                <i>

                                </i>
                            </div>

                            <p class="feature-desc">Kejutan Grosir Oppo hanya Rp3.499.000 dan LG smart TV hanya
                                Rp4.399.00</p>

                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity"
                                    value="1" /><button class="action-plus" title="Quantity Plus">
                                    <i class="icofont-plus"></i>
                                </button>
                                <div class="feature-card">
                                    <div class="feature-media">
                                        <div class="feature-label"><label class="label-text feat">Top</label></div>
                                        <button class="feature-wish wish"><i class="fas fa-heart"></i></button><a
                                            class="feature-image" href="product-video.html"><img
                                                src="images/product/alatkantor2.jpg" alt="product" /></a>
                                        <div class="feature-widget">
                                            <a title="Product Compare" href="compare.html"
                                                class="fas fa-random"></a><a title="Product View" href="#"
                                                class="fas fa-eye" data-bs-toggle="modal"
                                                data-bs-target="#product-view"></a>
                                        </div>
                                    </div>
                                    <div class="feature-content">
                                        <h6 class="feature-name"><a href="product-video.html">fresh organic green
                                                chilis</a></h6>
                                        <div class="feature-rating">
                                            <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                                class="active icofont-star"></i><i
                                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                                href="product-video.html">(3 Reviews)</a>
                                        </div>
                                        <h6 class="feature-price">
                                            <del>$34</del><span>$28<small>/piece</small></span>
                                        </h6>
                                        <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita
                                            dicta amet olor ut
                                            eveniet commodi...</p>
                                        <button class="product-add" title="Add to Cart"><i
                                                class="fas fa-shopping-basket"></i><span>add</span></button>
                                        <div class="product-action">
                                            <button class="action-minus" title="Quantity Minus"><i
                                                    class="icofont-minus"></i></button><input class="action-input"
                                                title="Quantity Number" type="text" name="quantity"
                                                value="1" /><button class="action-plus"
                                                title="Quantity Plus">
                                                <i class="icofont-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="feature-card">
                                            <div class="feature-media">
                                                <div class="feature-label"><label
                                                        class="label-text feat">feature</label></div>
                                                <button class="feature-wish wish"><i
                                                        class="fas fa-heart"></i></button><a class="feature-image"
                                                    href="product-video.html"><img src="images/product/12.jpg"
                                                        alt="product" /></a>
                                                <div class="feature-widget">
                                                    <a title="Product Compare" href="compare.html"
                                                        class="fas fa-random"></a><a title="Product View"
                                                        href="#" class="fas fa-eye" data-bs-toggle="modal"
                                                        data-bs-target="#product-view"></a>
                                                </div>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-name"><a href="product-video.html">fresh organic
                                                        green chilis</a></h6>
                                                <div class="feature-rating">
                                                    <i class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="icofont-star"></i><a href="product-video.html">(3
                                                        Reviews)</a>
                                                </div>
                                                <h6 class="feature-price">
                                                    <del>$34</del><span>$28<small>/piece</small></span>
                                                </h6>
                                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing
                                                    xpedita dicta amet olor ut
                                                    eveniet commodi...</p>
                                                <button class="product-add" title="Add to Cart"><i
                                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                                <div class="product-action">
                                                    <button class="action-minus" title="Quantity Minus"><i
                                                            class="icofont-minus"></i></button><input
                                                        class="action-input" title="Quantity Number"
                                                        type="text" name="quantity" value="1" /><button
                                                        class="action-plus" title="Quantity Plus">
                                                        <i class="icofont-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="feature-card">
                                            <div class="feature-media">
                                                <div class="feature-label"><label
                                                        class="label-text feat">feature</label></div>
                                                <button class="feature-wish wish"><i
                                                        class="fas fa-heart"></i></button><a class="feature-image"
                                                    href="product-video.html"><img src="images/product/13.jpg"
                                                        alt="product" /></a>
                                                <div class="feature-widget">
                                                    <a title="Product Compare" href="compare.html"
                                                        class="fas fa-random"></a><a title="Product View"
                                                        href="#" class="fas fa-eye" data-bs-toggle="modal"
                                                        data-bs-target="#product-view"></a>
                                                </div>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-name"><a href="product-video.html">fresh organic
                                                        green chilis</a></h6>
                                                <div class="feature-rating">
                                                    <i class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="icofont-star"></i><a href="product-video.html">(3
                                                        Reviews)</a>
                                                </div>
                                                <h6 class="feature-price">
                                                    <del>$34</del><span>$28<small>/piece</small></span>
                                                </h6>
                                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing
                                                    xpedita dicta amet olor ut
                                                    eveniet commodi...</p>
                                                <button class="product-add" title="Add to Cart"><i
                                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                                <div class="product-action">
                                                    <button class="action-minus" title="Quantity Minus"><i
                                                            class="icofont-minus"></i></button><input
                                                        class="action-input" title="Quantity Number"
                                                        type="text" name="quantity" value="1" /><button
                                                        class="action-plus" title="Quantity Plus">
                                                        <i class="icofont-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="feature-card">
                                            <div class="feature-media">
                                                <div class="feature-label"><label
                                                        class="label-text feat">feature</label></div>
                                                <button class="feature-wish wish"><i
                                                        class="fas fa-heart"></i></button><a class="feature-image"
                                                    href="product-video.html"><img src="images/product/14.jpg"
                                                        alt="product" /></a>
                                                <div class="feature-widget">
                                                    <a title="Product Compare" href="compare.html"
                                                        class="fas fa-random"></a><a title="Product View"
                                                        href="#" class="fas fa-eye" data-bs-toggle="modal"
                                                        data-bs-target="#product-view"></a>
                                                </div>
                                            </div>
                                            <div class="feature-content">
                                                <h6 class="feature-name"><a href="product-video.html">fresh organic
                                                        green chilis</a></h6>
                                                <div class="feature-rating">
                                                    <i class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="active icofont-star"></i><i
                                                        class="icofont-star"></i><a href="product-video.html">(3
                                                        Reviews)</a>
                                                </div>
                                                <h6 class="feature-price">
                                                    <del>$34</del><span>$28<small>/piece</small></span>
                                                </h6>
                                                <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing
                                                    xpedita dicta amet olor ut
                                                    eveniet commodi...</p>
                                                <button class="product-add" title="Add to Cart"><i
                                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                                <div class="product-action">
                                                    <button class="action-minus" title="Quantity Minus"><i
                                                            class="icofont-minus"></i></button><input
                                                        class="action-input" title="Quantity Number"
                                                        type="text" name="quantity" value="1" /><button
                                                        class="action-plus" title="Quantity Plus">
                                                        <i class="icofont-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-btn-25">
                                            <a href="shop-4column.html" class="btn btn-outline"><i
                                                    class="fas fa-eye"></i><span>Menampilkan
                                                    Lebih Banyak</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section> --}}
    <!-- <section class="section countdown-part">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mx-auto">
          <div class="countdown-content">
            <h3>special discount offer</h3>
            <p>Reprehenderit sed quod autem molestiae aut modi minus veritatis iste dolorum suscipit quis voluptatum
              fugiat mollitia quia minima</p>
            <div class="countdown countdown-clock" data-countdown="2022/12/22">
              <span class="countdown-time"><span>00</span><small>days</small></span><span
                class="countdown-time"><span>00</span><small>hours</small></span><span
                class="countdown-time"><span>00</span><small>minutes</small></span><span
                class="countdown-time"><span>00</span><small>seconds</small></span>
            </div>
            <a href="shop-4column.html" class="btn btn-inline"><i class="fas fa-shopping-basket"></i><span>shop
                now</span></a>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5">
          <div class="countdown-img">
            <img src="images/countdown.png" alt="countdown" />
            <div class="countdown-off"><span>100%</span><span>off</span></div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Promo Unggulan</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                @foreach ($unggul->slice(0, 4) as $row)
                    <div class="col">
                        <div class="feature-card">
                            <div class="feature-media">
                                <div class="feature-label"><label class="label-text feat">Unggul</label></div>
                                <button class="feature-wish wish"><i class="fas fa-heart"></i></button>
                                <a class="product-image" href="/detpromo/{{ $row->id }}"><img
                                        style="height: 200px; width:200px; margin-right: 50px;"
                                        src="{{ asset('sampul/' . $row->sampul) }}" alt="product" /></a>
                                <div class="feature-widget">

                                </div>
                            </div>
                            <div class="feature-content">
                                <h6 class="feature-name"><a href="#product-view6" data-bs-toggle="modal"
                                        data-bs-target="#product-view6">{{ $row->namapromo }}</a></h6>
                                <p class="feature-desc">{!! $row->deskripsipromo !!}
                                </p>

                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
            @if ($unggul->count()>= 4)
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-btn-25">
                            <a href="/filter" class="btn btn-outline"><i class="fas fa-eye"></i><span>lebih banyak</span></a>
                        </div>
                    </div>
                </div>
                @endif
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>Promo Terpopuler</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        @foreach ($populer->slice(0, 5) as $row)
                            <li>
                                <div class="product-card">
                                    <div class="product-media">
                                        <div class="product-label"><label class="label-text sale">Populer</label>
                                        </div>
                                        <button class="product-wish wish"><i class="fas fa-heart"></i></button>
                                        <a class="product-image" href="/detpromo/{{ $row->id }}"
                                            data-bs-target="#product-view"><img
                                                style="height: 200px; width:200px; margin-right: 50px;"
                                                src="{{ asset('sampul/' . $row->sampul) }}" alt="product" /></a>
                                        <div class="product-widget">
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h6 class="product-name"><a href="#product-view" data-bs-toggle="modal"
                                                data-bs-target="#product-view">{{ $row->namapromo }}</a></h6>
                                        <p style="color: red;">Berakhir {{ $row->masapromo }}</p>
                        @endforeach
                        <div class="product-action">
                        </div>
                </div>
            </div>
            </li>
            </ul>
        </div>
        </div>
        </div>
    </section>

                    @if ($populer->count()>= 4)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-btn-25">
                                    <a href="/filter" class="btn btn-outline"><i class="fas fa-eye"></i><span>
                                        lebih
                                        banyak</span></a>
                                </div>
                            </div>
                        </div>
                    @endif

    <div class="section promo-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href="#"><img style="height: 300px;" src="images/promo/home/promogeprek.jpg"
                                alt="promo" /></a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 px-xl-3">
                    <div class="promo-img">
                        <a href="#"><img style="height: 300px;" src="images/promo/home/promoseafood.jpg"
                                alt="promo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>

    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Promo Kilat</h2>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    @foreach ($kilat as $row)
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <a class="product-image" href="/detpromo/{{ $row->id }}"><img
                                            style="height: 200px; width:200px; margin-right: 50px;"
                                            src="{{ asset('sampul/' . $row->sampul) }}" alt="product" /></a>
                                    {{-- @if (Route::has('login'))
                                        @auth
                                            <a class="product-image" href="/detpromo/{{ $row->id }}"><img
                                                    style="height: 200px; width:200px; margin-right: 50px;"
                                                    src="{{ asset('sampul/' . $row->sampul) }}"
                                                    alt="product" /></a>
                                        @else
                                            <a class="product-image" href="/registerguest"><img
                                                    style="height: 200px; width:200px; margin-right: 50px;"
                                                    src="{{ asset('sampul/' . $row->sampul) }}"
                                                    alt="product" /></a>
                                        @endauth
                                    @endif --}}
                                    <div class="product-widget"></div>
                                </div>
                                <div class="product-content">

                                    <h6 class="product-name"><a href="#product-view" data-bs-toggle="modal"
                                            data-bs-target="#product-view">{{ $row->namapromo }}</a></h6>
                                    <p style="color: red;">Berakhir{{ $row->masapromo }}</p>


                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity"
                                            value="1" /><button class="action-plus" title="Quantity Plus">
                                            <i class="icofont-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @if ($kilat->count()>= 4)
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="/filter" class="btn btn-outline"><i class="fas fa-eye"></i><span>
                            lebih
                            banyak</span></a>
                    </div>
                </div>
            </div>
            @endif
            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/makanan3.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/perhiasan2.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/perhiasan3.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/perhiasan4.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/alatkantor2.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/alatkantor3.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/baju2.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/baju3.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/gitar2.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        style="height: 200px; width:200px;" src="images/product/gitar3.jpg"
                                        alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-disc">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/06.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/07.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/08.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/09.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/10.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/11.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/12.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/13.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/14.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img
                                        src="images/product/15.jpg" alt="product" /></a>
                                <div class="product-widget">
                                    <a title="Product Compare" href="compare.html" class="fas fa-random"></a><a
                                        title="Product View" href="#" class="fas fa-eye"
                                        data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="icofont-star"></i><a href="product-video.html">(3)</a>
                                </div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price">
                                    <del>$34</del><span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity"
                                        value="1" /><button class="action-plus" title="Quantity Plus">
                                        <i class="icofont-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25">
                        <a href="/tampilpopuler" class="btn btn-outline"><i class="fas fa-eye"></i><span>Tampilkan
                            lebih
                            banyak</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section brand-part">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>berbelanja berdasarkan merek</h2>
                    </div>
                </div>
            </div>
            <div class="brand-slider slider-arrow">
                {{-- foreach disini --}}
                @foreach ($brand as $b)
                    <div class="brand-wrap">
                        <div class="brand-media">
                            <img src="{{ asset('foto_merek/' . $b->fotomerek) }}" alt="brand" />
                            <div class="brand-overlay">
                                <a href="/detailbrand/{{ $b->namamerek }}/{{ $b->id }}"><i
                                        class="fas fa-link"></i></a>
                            </div>
                        </div>
                        <div class="brand-meta">
                            <h4>{{ $b->namamerek }}</h4>
                            {{-- <p>{{ $jumlahpromo }}</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-50">
                        <a href="#" class="btn btn-outline"><i class="fas fa-eye"></i><span>lihat semua
                                brand</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5 col-lg-6 col-xl-7">
          <div class="news-text">
            <h2>Get 20% Discount for Subscriber</h2>
            <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
          </div>
        </div>
        <div class="col-md-7 col-lg-6 col-xl-5">
          <form class="news-form">
            <input type="text" placeholder="Enter Your Email Address" /><button>
              <span><i class="icofont-ui-email"></i>Subscribe</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section> -->
    <!-- <section class="intro-part">
    <div class="container">
      <div class="row intro-content">
        <div class="col-sm-6 col-lg-3">
          <div class="intro-wrap">
            <div class="intro-icon"><i class="fas fa-truck"></i></div>
            <div class="intro-content">
              <h5>free home delivery</h5>
              <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="intro-wrap">
            <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
            <div class="intro-content">
              <h5>instant return policy</h5>
              <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="intro-wrap">
            <div class="intro-icon"><i class="fas fa-headset"></i></div>
            <div class="intro-content">
              <h5>quick support system</h5>
              <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="intro-wrap">
            <div class="intro-icon"><i class="fas fa-lock"></i></div>
            <div class="intro-content">
              <h5>secure payment way</h5>
              <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                    <div class="footer-widget">
                        <a class="footer-logo" href="#"><img
                                src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}"
                                alt="logo" /></a>
                        <p class="footer-desc"><a style="color:red;">Gudang Promo</a> adalah suatu website yang
                            berisi
                            tentang
                            brbagai macam diskon dengan berbagai macam kategori. Website ini adalah website resmi <a
                                href="#">X-CODE</a> yang dibuat untuk memenuhi tugas Mini Project bertemakan
                            Promo.</p>
                        <ul class="footer-social">
                            <li><a class="icofont-facebook" href="#"></a></li>
                            <li><a class="icofont-twitter" href="#"></a></li>

                            <li><a class="icofont-instagram" href="#"></a></li>
                            <li><a class="icofont-pinterest" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="footer-widget contact">
                        <h3 class="footer-title">kontak kami</h3>
                        <ul class="footer-contact">
                            <li>
                                <i class="icofont-ui-email"></i>
                                <p><span>xcode@gmail.com</span><span>gudangpromo@gmail.com</span></p>
                            </li>
                            <li>
                                <i class="icofont-ui-touch-phone"></i>
                                <p><span>+62 827 953 213</span><span>+62 827 953 214</span></p>
                            </li>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <p>Jl.Jendral Sudirman 1 Kabupaten Malang, Jawa Timur.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="footer-widget">
                        <h3 class="footer-title">tautan</h3>
                        <div class="footer-links">
                            <ul>
                                <li><a href="#">Akun Saya</a></li>


                                <li><a href="#">Promo Terbaik</a></li>
                                <li><a href="#">Promo Terbaru</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Lokasi</a></li>

                                <li><a href="#">Kontak</a></li>

                                <li><a href="#">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer-bottom">
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">X-CODE
                                TEAM</a></p>
                        <!-- <div class="footer-card">
              <a href="#"><img src="images/payment/jpg/01.jpg" alt="payment" /></a><a href="#"><img
                  src="images/payment/jpg/02.jpg" alt="payment" /></a><a href="#"><img src="images/payment/jpg/03.jpg"
                  alt="payment" /></a><a href="#"><img src="images/payment/jpg/04.jpg" alt="payment" /></a>
            </div> -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/nice-select.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/countdown.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/accordion.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/venobox.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/slick.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/main.js') }}"></script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/home-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:51:53 GMT -->

</html>
m
