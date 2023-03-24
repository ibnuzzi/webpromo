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
                    <button class="header-user"><img src="images/user.png" alt="user" /></button><a
                        href="home-category.html"><img src="images/removepromo.png" alt="logo" /></a><button
                        class="header-src"><i class="fas fa-search"></i></button>
                </div>
                <a href="home-category.html" class="header-logo"><img style="height:80px;" src="images/removepromo.png"
                        alt="logo" /></a>
                        <form action="{{url('tampilterbaru')}}" method="GET" class="header-form">
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
                                <a class="navbar-link" href="{{url('homeguests')}}">Beranda</a>
                            </li>
                            <!-- Product Link -->
                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="#">Kategori</a>
                                <ul class="dropdown-position-list">
                                    <div style="display: flex;">
                                        <div>
                                            <li><a href="product-simple.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Fast Food</title>
                                                        <path
                                                            d="M322 416c0 35.35-20.65 64-56 64H134c-35.35 0-56-28.65-56-64M336 336c17.67 0 32 17.91 32 40h0c0 22.09-14.33 40-32 40H64c-17.67 0-32-17.91-32-40h0c0-22.09 14.33-40 32-40"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path
                                                            d="M344 336H179.31a8 8 0 00-5.65 2.34l-26.83 26.83a4 4 0 01-5.66 0l-26.83-26.83a8 8 0 00-5.65-2.34H56a24 24 0 01-24-24h0a24 24 0 0124-24h288a24 24 0 0124 24h0a24 24 0 01-24 24zM64 276v-.22c0-55 45-83.78 100-83.78h72c55 0 100 29 100 84v-.22M241 112l7.44 63.97"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path d="M256 480h139.31a32 32 0 0031.91-29.61L463 112"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M368 112l16-64 47-16" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" d="M224 112h256" />
                                                    </svg>Promo Makanan</a></li>
                                            <li><a href="product-kecantikan.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Woman</title>
                                                        <path
                                                            d="M208 368v104a23.73 23.73 0 0024 24h0a23.73 23.73 0 0024-24"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path
                                                            d="M256 368v104a23.73 23.73 0 0024 24h0a23.73 23.73 0 0024-24V368M183 274a23.73 23.73 0 01-29.84 16.18h0a23.72 23.72 0 01-16.17-29.84l25-84.28A44.85 44.85 0 01205 144h102a44.85 44.85 0 0143 32.08l25 84.28a23.72 23.72 0 01-16.17 29.84h0a23.73 23.73 0 01-29.78-16.2"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <circle cx="256" cy="56" r="40" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-miterlimit="10" stroke-width="32" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M208 192l-48 160h192l-48-160" />
                                                    </svg>Promo Kecantikan</a></li>
                                            <li><a href="product-pakaian.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Shirt</title>
                                                        <path
                                                            d="M314.56 48s-22.78 8-58.56 8-58.56-8-58.56-8a31.94 31.94 0 00-10.57 1.8L32 104l16.63 88 48.88 5.52a24 24 0 0121.29 24.58L112 464h288l-6.8-241.9a24 24 0 0121.29-24.58l48.88-5.52L480 104 325.13 49.8a31.94 31.94 0 00-10.57-1.8zM333.31 52.66a80 80 0 01-154.62 0"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>Promo Pakaian</a></li>
                                            <li><a href="product-hiburan.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Megaphone</title>
                                                        <path
                                                            d="M407.94 52.22S321.3 160 240 160H80a16 16 0 00-16 16v96a16 16 0 0016 16h160c81.3 0 167.94 108.23 167.94 108.23 6.06 8 24.06 2.52 24.06-9.83V62c0-12.31-17-18.82-24.06-9.78zM64 256s-16-6-16-32 16-32 16-32M448 246s16-4.33 16-22-16-22-16-22M256 160v128M112 160v128"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                        <path
                                                            d="M144 288v168a8 8 0 008 8h53a16 16 0 0015.29-20.73C211.91 416.39 192 386.08 192 336h16a16 16 0 0016-16v-16a16 16 0 00-16-16h-16"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>Promo Hiburan</a></li>
                                            <li><a href="product-elektronik.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Desktop</title>
                                                        <rect x="32" y="64" width="448" height="320" rx="32" ry="32"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M304 448l-8-64h-80l-8 64h96z" />
                                                        <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32"
                                                            d="M368 448H144" />
                                                        <path
                                                            d="M32 304v48a32.09 32.09 0 0032 32h384a32.09 32.09 0 0032-32v-48zm224 64a16 16 0 1116-16 16 16 0 01-16 16z" />
                                                    </svg>Promo Elektronik</a></li>
                                            <li><a href="product-bioskop.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Film</title>
                                                        <rect x="48" y="96" width="416" height="320" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="384" y="336" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="384" y="256" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="384" y="176" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="384" y="96" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="48" y="336" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="48" y="256" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="48" y="176" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="48" y="96" width="80" height="80" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="128" y="96" width="256" height="160" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                        <rect x="128" y="256" width="256" height="160" rx="28" ry="28"
                                                            fill="none" stroke="currentColor" stroke-linejoin="round"
                                                            stroke-width="32" />
                                                    </svg>Promo Bioskop</a></li>
                                            <li><a href="product-valentaine.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Heart Circle</title>
                                                        <path
                                                            d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z"
                                                            fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                            stroke-width="32" />
                                                        <path
                                                            d="M256 360a16 16 0 01-9-2.78c-39.3-26.68-56.32-45-65.7-56.41-20-24.37-29.58-49.4-29.3-76.5.31-31.06 25.22-56.33 55.53-56.33 20.4 0 35 10.63 44.1 20.41a6 6 0 008.72 0c9.11-9.78 23.7-20.41 44.1-20.41 30.31 0 55.22 25.27 55.53 56.33.28 27.1-9.31 52.13-29.3 76.5-9.38 11.44-26.4 29.73-65.7 56.41A16 16 0 01256 360z" />
                                                    </svg>Promo Valentine</a></li>
                                            <li><a href="jasa-promo.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Walk</title>
                                                        <path
                                                            d="M314.21 482.32l-56.77-114.74-44.89-57.39a72.82 72.82 0 01-10.13-37.05V144h15.67a40.22 40.22 0 0140.23 40.22v183.36M127.9 293.05v-74.52S165.16 144 202.42 144M370.1 274.42L304 231M170.53 478.36L224 400"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                        <circle cx="258.32" cy="69.48" r="37.26" fill="none"
                                                            stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>Promo Jasa</a></li>
                                            <li><a href=""><svg style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Bag Handle</title>
                                                        <path
                                                            d="M80 176a16 16 0 00-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 00-16-16zM160 176v-32a96 96 0 0196-96h0a96 96 0 0196 96v32"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                        <path d="M160 224v16a96 96 0 0096 96h0a96 96 0 0096-96v-16"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>Katalog Belanja</a></li>
                                            <li><a href="product-liburan.html"><svg
                                                        style="height:20px; width:20px; margin-right:5px;"
                                                        xmlns="http://www.w3.org/2000/svg" class="ionicon"
                                                        viewBox="0 0 512 512">
                                                        <title>Airplane</title>
                                                        <path
                                                            d="M407.72 224c-3.4 0-14.79.1-18 .3l-64.9 1.7a1.83 1.83 0 01-1.69-.9L193.55 67.56a9 9 0 00-6.66-3.56H160l73 161a2.35 2.35 0 01-2.26 3.35l-121.69 1.8a8.06 8.06 0 01-6.6-3.1l-37-45c-3-3.9-8.62-6-13.51-6H33.08c-1.29 0-1.1 1.21-.75 2.43l19.84 71.42a16.3 16.3 0 010 11.9L32.31 333c-.59 1.95-.52 3 1.77 3H52c8.14 0 9.25-1.06 13.41-6.3l37.7-45.7a8.19 8.19 0 016.6-3.1l120.68 2.7a2.7 2.7 0 012.43 3.74L160 448h26.64a9 9 0 006.65-3.55L323.14 287c.39-.6 2-.9 2.69-.9l63.9 1.7c3.3.2 14.59.3 18 .3C452 288.1 480 275.93 480 256s-27.88-32-72.28-32z"
                                                            fill="none" stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="32" />
                                                    </svg>Promo Liburan</a></li>
                                        </div>
                                        <div style="display: flex;">
                                            <div>

                                            </div>
                                        </div>
                                </ul>
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
                                <a class="navbar-link dropdown-arrow" href="#">Halaman</a>
                                <ul class="dropdown-position-list">
                                    <li><a href="offer.html">penawaran</a></li>

                                    <li><a href="about.html">tentang kami</a></li>
                                    <li><a href="contact.html">kontak kami</a></li>
                                </ul>
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
    <section class="inner-section single-banner" style="background: url(images/single-banner.jpg) no-repeat center;">
        <div class="container">
            <h2>Cari Jenis-Jenis Promo Sesuai Dengan Keinginan mu</h2>

        </div>
    </section>
    <section class="inner-section shop-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-3">




                    <div class="shop-widget">
                        <h6 class="shop-widget-title">Filter Jenis Deals</h6>
                        <form><input class="shop-widget-search" type="text" placeholder="Search...">
                            <ul class="shop-widget-list ">
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand1"><label
                                            for="brand1">Promo Terbaru</label></div><span class="shop-widget-number">(13)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand2"><label
                                            for="brand2">Promo Terpopuler</label></div><span
                                        class="shop-widget-number">(28)</span>
                                </li>
                                <li>
                                    <div class="shop-widget-content"><input type="checkbox" id="brand3"><label
                                            for="brand3">Promo Unggulan</label></div><span
                                        class="shop-widget-number">(35)</span>
                                </li>

                            </ul><button class="shop-widget-btn"><i class="fas fa-search"></i><span>Cari Filter</span></button>
                            <br>
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
                        @foreach ($data as $row)
                        <div class="col">
                            <div class="product-card">
                                <div class="product-media">
                                    <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="/detpopuler/{{ $row->id}}"><img
                                            src="{{asset('sampul/'. $row->sampul)}}" alt="product"></a>
                                    <div class="product-widget"><a title="Product View" href="#" class="fas fa-eye"
                                            data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">

                                    <h6 class="product-name"><a href="">{{$row->namapromo}}</a></h6>
                                    <p style="color: red;">{{$row->masapromo}}</p>

                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bottom-paginate">
                                <p class="page-info">Menampilkan 20 dari 5 Hasil</p>
                                <ul class="pagination">

                                    <li class="page-item"><a class="page-link active" href="shop-4column.html">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="promo-list2.html">2</a></li>
                                    <li class="page-item"><a class="page-link" href="promo-list3.html">3</a></li>
                                    <li class="page-item"><a class="page-link" href="promo-list3.html">4</a></li>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="promo-list5.html">5</a></li>
                                    <li class="page-item"><a class="page-link" href="promo-list2.html"><i
                                                class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
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
                        <a class="footer-logo" href="#"><img src="images/removepromo.png" alt="logo" /></a>
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

</html>
