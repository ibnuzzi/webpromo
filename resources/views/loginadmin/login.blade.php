<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login_two.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 09:08:06 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/favicon/logogudang.png') }}"
        type="image/x-icon">
    <link rel="shortcut icon"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/favicon/logogudang.png') }}"
        type="image/x-icon">
    <title>Login ADMIN Gudang Promo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/feather-icon.css') }}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/style.css') }}">
    <link id="color" rel="stylesheet"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/') }}responsive.css">
    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5"><img class="bg-img-cover bg-center"
                    src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/login/3.jpg') }}"
                    alt="looginpage">
            </div>
            <div class="col-xl-7 p-0">
                <div class="login-card">
                    <div>
                        <div><a class="logo" href="index.html"><img class="img-fluid for-light"
                                    src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/logo/promogudang.png') }}"
                                    alt="looginpage" width="180px"></a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" action="/loginadminproses" method="post">
                                @csrf
                                <h4 class="text-center">Masuk ke Akun</h4>
                                <p class="text-center">Masukkan email & kata sandi untuk login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat Email</label>
                                    <input class="form-control" type="email" name="email" required="">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                @enderror
                                <div class="form-group">
                                    <label class="col-form-label">Kata Sandi</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password" required="">
                                        <div class="show-hide"><span class="show"> </span></div>
                                    </div>
                                </div>

                                <div class="form-group mb-0">

                                    <div class="text-end mt-3">
                                        <button type="submit" class="btn btn-primary btn-block w-100">Masuk</button>

                                        <!-- <button class="btn btn-primary btn-block w-100" type="submit"> Sign in </button> -->

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- latest jquery-->
        <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/jquery-3.6.0.min.js') }}"></script>
        <!-- Bootstrap js-->
        <script
            src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/bootstrap/bootstrap.bundle.min.js') }}">
        </script>
        <!-- feather icon js-->
        <script
            src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/icons/feather-icon/feather.min.js') }}">
        </script>
        <script
            src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/icons/feather-icon/feather-icon.js') }}">
        </script>
        <!-- scrollbar js-->
        <!-- Sidebar jquery-->
        <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/config.js') }}"></script>
        <!-- Template js-->
        <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/script.js') }}"></script>
        <!-- login js-->
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
    </div>
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/login_two.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 09:08:07 GMT -->

</html>
