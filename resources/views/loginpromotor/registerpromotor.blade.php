<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:53:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="template" content="greeny" />
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template" />
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online" />
    <title>Daftar - GudangPromo</title>
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
    <link rel="stylesheet" href="{{ asset('template/mironmahmud.com/greeny/assets/ltr/css/user-auth.css') }}" />
</head>

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo">
                        <a href="index.html"><img
                                src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/images/removepromo.png') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Gabung Sekarang!</h2>
                            <p>Siapkan Akun Baru Dalam Satu Menit</p>
                        </div>
                        <div class="user-form-group">


                            <form class="user-form" action="/registerUser" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group"><label class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" value="{{ old('name') }}" name="name" placeholder="Masukkan Nama Kamu" />
                                    </div>
                                </div>
                                @error('name')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group">
                                    <div class="form-group"><label class="form-label">Nama Merek</label>
                                        <input type="text" class="form-control" value="{{ old('namamerek') }}" name="namamerek" placeholder="Masukkan Nama Kamu" />
                                    </div>
                                </div>
                                @error('namamerek')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group">
                                    <div class="form-group"><label class="form-label">Foto Merek</label>
                                        <input type="file" class="form-control" name="fotomerek" placeholder="Masukkan Foto Merek Anda" />
                                    </div>
                                </div>
                                @error('fotomerek')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group">
                                    <div class="form-group"><label class="form-label">Email</label>
                                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" placeholder="Masukkan Email Kamu" />
                                    </div>
                                </div>
                                @error('email')
                                <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group"><label class="form-label">Kata Sandi</label><input
                                        type="password" name="password" value="{{ old('password') }}" class="form-control" placeholder="Masukkan Kata Sandi Kamu" />
                                </div>
                                @error('password')
                                <div class="alert alert-danger mb-3"> {{ $message }} </div>
                            @enderror
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="terms" value="1" id="check" {{ old('terms') ? 'checked' : '' }}>
                                <label class="form-check-label" for="check">Terima Semua Syarat & Ketentuan</label>
                            </div>
                            @error('terms')
                            <div class="alert alert-danger mb-3"> {{ $message }} </div>
                        @enderror
                                <div class="form-button">
                                    <button type="submit">daftar
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>
                            Sudah memiliki akun?<a href="/login">masuk disini</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>GudangPromo | &COPY; Copyright by <a href="#">XCODE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('template/mironmahmud.com/greeny/assets/ltr/vendor/bootstrap/bootstrap.min.js') }}"></script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:53:11 GMT -->

</html>
