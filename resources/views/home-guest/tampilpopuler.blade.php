<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/shop-4column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:52:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>List Promo - GudangPromo</title>
    <link rel="icon" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/iconremove.png') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/icofont/icofont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/fonts/fontawesome/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/venobox/venobox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/slickslider/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/niceselect/nice-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/profile.css') }}"/>
</head>

<body>
    <div class="backdrop"></div><a class="backtop fas fa-arrow-up" href="#"></a>
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

                        <li><a href="{{url('faq')}}">butuh bantuan</a></li>
                        <li><a href="{{url('kontak')}}">kontak kami</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <button class="header-user"><img src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/user.png') }}" alt="user" /></button><a
                        href="home-category.html"><img src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}" alt="logo" /></a><button
                        class="header-src"><i class="fas fa-search"></i></button>
                </div>
                <a href="home-category.html" class="header-logo"><img style="height:80px;" src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}"
                        alt="logo" /></a>
                        <form action="{{url('tampilpopuler')}}" method="GET" class="header-form">
                            <input type="search" name="cari" value="{{Request::get('cari')}}" placeholder="Cari sesuatu..." /><button type="submit"><i class="fas fa-search"></i></button>
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
                <div class="header-widget-group">

                </div>
            </div>
        </div>
    </header>
    <nav class="navbar-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-content">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown">
                                <a class="navbar-link" href="{{url('homeguest')}}">Beranda</a>
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
                                                        @foreach ($kategori as $row)
                                                            <li class="col-3"><a
                                                                    href="/produksimple/{{ $row->kategori }}">{{ $row->kategori }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <!-- <li class="navbar-item dropdown-megamenu">
                    <a class="navbar-link dropdown-arrow" href="#">Kategori Promo</a>
                    <div class="megamenu">
                      <div class="container">
                        <div class="row row-cols-5">
                          <div class="col">
                            <div class="megamenu-wrap">

                              <ul class="megamenu-list">
                                <li><a href="product-simple.html">Promo Makanan</a></li>
                                <li><a href="#">Promo Kecantikan</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col">
                            <div class="megamenu-wrap">
                              <ul class="megamenu-list">
                                <li><a href="#">Promo Bioskop</a></li>
                                <li><a href="#">Promo Valentain</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="col">
                            <div class="megamenu-wrap">
                              <ul class="megamenu-list">
                                <li><a href="#">Promo Pakaian</a></li>
                                <li><a href="jasa-promo.html">Promo Jasa</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> -->
                                <!-- End Link -->

                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown" href="/tentangkami">Tentang Kami</a>
                                </li>
                                <li class="navbar-item dropdown">
                                    <a class="navbar-link dropdown" href="/kontak">Kontak Kami</a>
                                </li>
                            <!-- <li class="navbar-item dropdown">
                    <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                    <ul class="dropdown-position-list">
                      <li><a href="login.html">login</a></li>
                      <li><a href="register.html">register</a></li>
                      <li><a href="reset-password.html">reset password</a></li>
                      <li><a href="change-password.html">change password</a></li>
                    </ul>
                  </li> -->
                            <!-- <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="blog-standard.html">blog</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="blog-standard.html">standar blog </a></li>
                                </ul>
                            </li> -->
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
    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title"><i class="fas fa-align-left"></i><span>categories</span></h4><button
                class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-vegetable"></i><span>vegetables</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">asparagus</a></li>
                    <li><a href="#">broccoli</a></li>
                    <li><a href="#">carrot</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-groceries"></i><span>groceries</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Grains & Bread</a></li>
                    <li><a href="#">Dairy & Eggs</a></li>
                    <li><a href="#">Oil & Fat</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fruit"></i><span>fruits</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Apple</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Strawberry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dairy-products"></i><span>dairy farm</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Egg</a></li>
                    <li><a href="#">milk</a></li>
                    <li><a href="#">butter</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-crab"></i><span>sea foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Lobster</a></li>
                    <li><a href="#">Octopus</a></li>
                    <li><a href="#">Shrimp</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-salad"></i><span>diet foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Salmon</a></li>
                    <li><a href="#">Potatoes</a></li>
                    <li><a href="#">Greens</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-dried-fruit"></i><span>dry foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">noodles</a></li>
                    <li><a href="#">Powdered milk</a></li>
                    <li><a href="#">nut & yeast</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-fast-food"></i><span>fast foods</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">mango</a></li>
                    <li><a href="#">plumsor</a></li>
                    <li><a href="#">raisins</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-cheers"></i><span>drinks</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Wine</a></li>
                    <li><a href="#">Juice</a></li>
                    <li><a href="#">Water</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-beverage"></i><span>coffee</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Cappuchino</a></li>
                    <li><a href="#">Espresso</a></li>
                    <li><a href="#">Latte</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
                        class="flaticon-barbecue"></i><span>meats</span></a>
                <ul class="dropdown-list">
                    <li><a href="#">Meatball</a></li>
                    <li><a href="#">Sausage</a></li>
                    <li><a href="#">Poultry</a></li>
                </ul>
            </li>
            <li class="category-item"><a class="category-link dropdown-link" href="#"><i
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
            <div class="cart-total"><i class="fas fa-shopping-basket"></i><span>total item (5)</span></div><button
                class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/01.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/02.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/03.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/04.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
            <li class="cart-item">
                <div class="cart-media"><a href="#"><img src="images/product/05.jpg" alt="product"></a><button
                        class="cart-delete"><i class="far fa-trash-alt"></i></button></div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">existing product name</a></h6>
                        <p>Unit Price - $8.75</p>
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button></div>
                        <h6>$56.98</h6>
                    </div>
                </div>
            </li>
        </ul>
        <div class="cart-footer"><button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form"><input type="text" placeholder="Enter your coupon code"><button
                    type="submit"><span>apply</span></button></form><a class="cart-checkout-btn"
                href="checkout.html"><span class="checkout-label">Proceed to Checkout</span><span
                    class="checkout-price">$369.78</span></a>
        </div>
    </aside>
    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i
                    class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select></div>
                <div class="nav-select"><i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select></div>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid.html">Home grid</a></li>
                        <li><a href="index.html">Home index</a></li>
                        <li><a href="home-classic.html">Home classic</a></li>
                        <li><a href="home-standard.html">Home standard</a></li>
                        <li><a href="home-category.html">Home category</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column.html">shop 5 column</a></li>
                        <li><a href="shop-4column.html">shop 4 column</a></li>
                        <li><a href="shop-3column.html">shop 3 column</a></li>
                        <li><a href="shop-2column.html">shop 2 column</a></li>
                        <li><a href="shop-1column.html">shop 1 column</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab.html">product tab</a></li>
                        <li><a href="product-grid.html">product grid</a></li>
                        <li><a href="product-video.html">product video</a></li>
                        <li><a href="product-simple.html">product simple</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
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
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                    <ul class="dropdown-list">
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="reset-password.html">reset password</a></li>
                        <li><a href="change-password.html">change password</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-standard.html">blog standard</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-author.html">blog author</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info"><i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    <div class="mobile-menu"><a href="index.html" title="Home Page"><i
                class="fas fa-home"></i><span>Home</span></a><button class="cate-btn" title="Category List"><i
                class="fas fa-list"></i><span>category</span></button><button class="cart-btn" title="Cartlist"><i
                class="fas fa-shopping-basket"></i><span>cartlist</span><sup>9+</sup></button><a href="wishlist.html"
            title="Wishlist"><i class="fas fa-heart"></i><span>wishlist</span><sup>0</sup></a><a href="compare.html"
            title="Compare List"><i class="fas fa-random"></i><span>compare</span><sup>0</sup></a></div>
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 mt-2">
                            <div class="view-gallery">
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/makanan/makanan 1.jpg"></li>

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
                                <p class="view-desc mt-2">Bebas pilih Hokkaido Miso atau Tori Paitan sudah termasuk Fried Dumpling plus Ocha*, only 55k nett*. yang #pedasnyanampol!!!

                                    Cuss langsung dine in ke store HokBen terdekat. Sama-sama kita #ngerameninhokben</p>


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
    <section class="inner-section single-banner" style="background: url({{ asset('templatebanner/bannerwebpromosi.jpg   ') }}) no-repeat center;">
        <div class="container">
            <h2>Cari Jenis-Jenis Promo Sesuai Dengan Keinginan mu</h2>

        </div>
    </section>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">
                    @php
                    $no=0;
                    @endphp

                     @php
                     $no1=0;
                     @endphp

                    @php
                     $no2=0;
                     @endphp

                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter Jenis Deals</h6>
                        <form action="/filter" method="GET"><input class="shop-widget-search" type="text" placeholder="Search...">
                            @csrf
                            <ul class="shop-widget-list ">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="terbaru" name="pilihan" value="terbaru"><label
                                            for="brand1">Promo Terbaru</label></div><span class="shop-widget-number">@foreach ($data as $a)@php ++$no @endphp @endforeach{{$no}}</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="terpopuler" name="pilihan" value="terpopuler"><label
                                            for="brand2">Promo Terpopuler</label></div><span
                                        class="shop-widget-number">@foreach ($data as $a)@php ++$no1 @endphp @endforeach{{$no1}}</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="unggulan" name="pilihan" value="unggulan"><label
                                            for="brand3">Promo Unggulan</label></div><span
                                        class="shop-widget-number">@foreach ($data as $a)@php ++$no2 @endphp @endforeach{{$no2}}</span>
                                </li>
                                    @foreach ($kategori as $item)
                                    <li>
                                        <div class="shop-widget-content"><input type="checkbox" name="kategori" id="{{$item->kategori}}" value="{{$item->id}}"><label
                                                for="cate10">{{$item->kategori}}</label></div><span
                                            class="shop-widget-number"></span>
                                    </li>
                                    @endforeach

                            </ul><button class="shop-widget-btn mb-2" type="submit"><i class="fas fa-search"></i><span>Cari Filter</span></button>

                            </ul><button class="shop-widget-btn"><i class="far fa-trash-alt"></i><span>Hapus Filter</span></button>


                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-filter">
                                <div class="filter-show"><label class="filter-label">Tampil :</label><select
                                        class="form-select filter-select">
                                        <option value="1">10</option>
                                        <option value="2">20</option>
                                        <option value="3">30</option>
                                    </select></div>


                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-4">
                        @foreach ($data as $promo)
                        @if(\Carbon\Carbon::parse($promo->masapromo)->isPast())
                        <div class="col">
                            <div class="product-card product-disable">
                                <div class="product-media">
                                    <div class="product-label"></div>
                                    <a class="product-image" href="/deskripsifoto/{{ $promo->id }}"><img
                                            style="height: 200px; width:200px; margin-right: 50px margin-top: 50px;"
                                            src="sampul/{{ $promo->sampul }}" alt="product" /></a>
                                    <div class="product-widget"></div>
                                </div>
                                {{-- <div class="product-content">
                                    <h5 class="product-name">{{ $promo->namapromo }}</h5>
                                    <h6 class="mb-2">
                                        Status : <span class="badge {{ ($promo->status == 1) ? 'bg-success text-white' : 'bg-success text-white' }}" >{{ ($promo->status == 0) ? 'menunggu' : 'diterima' }} </span>
                                    </h6>
                                    <a href="/tampilpromo/{{ $promo->id }}">
                                        <button class="btn btn-success" type="button"><i class="fa-solid fa-pen"></i></button>
                                    </a>
                                    <a class="deletesiswa" href="{{ Route('deletepromo', ['id' => $promo->id]) }}" type="button" data-nama="{{ $promo->namapromo }}">
                                        <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        @else
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"></div>
                                    <a class="product-image" href="/deskripsifoto/{{ $promo->id }}"><img
                                            style="height: 200px; width:200px; margin-right: 50px margin-top: 50px;"
                                            src="sampul/{{ $promo->sampul }}" alt="product" /></a>
                                    <div class="product-widget"></div>
                                </div>
                                <div class="product-content">
                                    <h5 class="product-name">{{ $promo->namapromo }}</h5>
                                    <p style="color: red;">Berakhir{{$promo->masapromo}}</p>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                        {{$data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-4">
                    <div class="footer-widget">
                        <a class="footer-logo" href="#"><img src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}" alt="logo" /></a>
                        <p class="footer-desc"><a style="color:red;">Gudang Promo</a> adalah suatu website yang berisi
                            tentang
                            brbagai macam diskon dengan berbagai macam kategori. Website ini adalah website resmi <a
                                href="#">X-CODE</a> yang dibuat untuk memenuhi tugas Mini Project bertemakan Promo.</p>
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
                        <p class="footer-copytext">&copy; All Copyrights Reserved by <a href="#">X-CODE TEAM</a></p>
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
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/countdown/countdown.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/niceselect/nice-select.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/slickslider/slick.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/nice-select.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/countdown.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/accordion.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/venobox.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/slick.js')}}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/js/main.js')}}"></script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/shop-4column.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:52:54 GMT -->
<script>
    var checkboxes = document.getElementsByName('pilihan');
    var currentChecked = null;

    function checkboxClicked() {
        if (currentChecked != this) {
            currentChecked = this;
            for (var i = 0; i < checkboxes.length; i++) {
                if (checkboxes[i] != currentChecked) {
                    checkboxes[i].checked = false;
                }
            }
        }
    }

    for (var i = 0; i < checkboxes.length; i++) {
        checkboxes[i].addEventListener('click', checkboxClicked);
    }
    </script>
    <script>
        // Menangani submit form pencarian dengan AJAX
$('#search-form').submit(function(e) {
    e.preventDefault();

    var url = $(this).attr('action');
    var query = $('input[name="query"]').val();

    $.ajax({
        url: url,
        type: 'GET',
        data: {
            query: query
        },
        success: function(data) {
            $('#search-results').html(data);
        }
    });
});
    </script>
</html>
