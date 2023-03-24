<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:53:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Lupa Password - GudangPromo</title>
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
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/user-auth.css') }}">
</head>

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
                    <div class="user-form-logo"><a href="index.html"><img src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}" alt="logo"></a></div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>khawatir?</h2>
                            <p>
                                Tidak masalah! Ikuti saja Cara Sederhananya</p>
                        </div>
                        <form class="user-form"  action="/lupapassword" method="post">
                            @csrf
                            <div class="form-group"><input type="email" name="email" class="form-control"
                                placeholder="Masukkan Email Kamu">
                            </div>
                            <div class="form-button">
                                <button type="submit">dapatkan tautan reset</button>
                            </div>
                        </form>
                    </div>
                    <div class="user-form-remind">
                        <p>
                            Kembali ke<a href="/login">masuk disini</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>GudangPromo | &COPY; Copyright by <a href="#">X-CODE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/reset-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:53:11 GMT -->

</html>
