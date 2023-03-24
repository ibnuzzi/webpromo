<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:52:41 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="template" content="greeny" />
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template" />
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online" />
    <title>Atur Ulang Password - Gudang Diskon</title>
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
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                            <h2>Atur Ulang Password !</h2>
                            <p>Untuk Memperbarui Password Anda</p>
                        </div>
                        <div class="user-form-group">
                                <form class="user-form" action="/mengaturulangpassword" method="post">
                                @csrf
                                <input type="hidden" name="token" value="{{$request->route('token')}}">
                                <div class="form-group">
                                    <input type="email" hidden readonly class="form-control" placeholder="Masukkan email kamu" name="email" value="{{ request()->email }}"/>
                                </div>
                                <div class="form-group"><input type="password" class="form-control" placeholder="Masukkan password anda" name="password" /></div>
                                @error('password')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group"><input type="password" class="form-control" placeholder="Masukkan ulang password" name="password_confirmation" /></div>
                                @error('password_confirmation')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-button">
                                    <button type="submit">Masuk</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="user-form-footer">
                        <p>Gudang Diskon | &COPY; Copyright by <a href="#">XCODE</a></p>
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
    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        {{-- toastr --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
            integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
        <script>
            @if (Session::has('success'))
                toastr.success("{{ Session::get('success') }}")
            @endif
        </script>
        <script>
            @if (Session::has('gagal'))
            toastr.error("{{ Session::get('gagal') }}")
            @endif
        </script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 06:52:41 GMT -->

</html>
