<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from admin.pixelstrap.com/tivo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:57:32 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/favicon/logogudang.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/favicon/logogudang.png')}}" type="image/x-icon">
    <title>ADMIN Gudang Promo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/prism.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/vector-map.css')}}">
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @stack('css')
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"> </div>
        <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-header">
            <div class="header-wrapper row m-0">
                <form class="form-inline search-full col" action="#" method="get">
                    <div class="form-group w-100">
                        <div class="Typeahead Typeahead--twitterUsers">
                            <div class="u-posRelative">
                                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                                    placeholder="Search Tivo .." name="q" title="" autofocus>
                                <div class="spinner-border Typeahead-spinner" role="status"><span
                                        class="sr-only">Loading...</span>
                                </div><i class="close-search" data-feather="x"></i>
                            </div>
                            <div class="Typeahead-menu"></div>
                        </div>
                    </div>
                </form>
                <div class="header-logo-wrapper col-auto p-0">
                    <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
                    </div>
                    <div class="logo-header-main"><a href="/beranda"><img class="img-fluid for-light img-100"
                                src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/logo/logo2.png') }}" alt=""><img class="img-fluid for-dark"
                                src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/logo/logo.png') }}" alt=""></a></div>
                </div>
                <div class="left-header col horizontal-wrapper ps-0">
                    <div class="left-menu-header">
                        <ul class="app-list">
                            <li class="onhover-dropdown">
                                <div class="app-menu"> <i data-feather="folder-plus"></i></div>
                                <ul class="onhover-show-div left-dropdown">
                                    <li> <a href="file-manager.html">File Manager</a></li>
                                    <li> <a href="kanban.html"> Kanban board</a></li>
                                    <li> <a href="social-app.html"> Social App</a></li>
                                    <li> <a href="bookmark.html"> Bookmark</a></li>
                                </ul>
                            </li>
                        </ul>
                        <ul class="header-left">
                            <li class="onhover-dropdown"><span class="f-w-600" a
                                    href="/beranda">Beranda</span><span><i class="middle"
                                        data-feather="chevron-down"></i></span>
                                <ul class="onhover-show-div left-dropdown">
                                    <li> <a href="/beranda">Beranda</a></li>
                                </ul>
                            </li>
                            <li class="onhover-dropdown"><span class="f-w-600">Menu</span><span><i class="middle"
                                        data-feather="chevron-down"></i></span>
                                <ul class="onhover-show-div left-dropdown">
                                    <li class="flyout-right"><a href="javascript:void(0)">Produk</a>
                                        <ul>

                                            <li> <a href="createkategori.html">Tambah Kategori</a></li>
                                            <li> <a href="tambahterbaru.html">Tambah Terbaru</a></li>
                                            <li> <a href="tambahunggulan.html">Tambah Unggulan</a></li>
                                            <li> <a href="tambahterpopuler.html">Tambah Terpopuler</a></li>
                                            <li> <a href="tambahkilat.html">Tambah Kilat</a></li>

                                            <!-- <li> <a href="projectcreate.html">Project Create</a></li> -->
                                        </ul>
                                    </li>

                                    <li class="flyout-right"><a href="javascript:void(0)">Promo</a>
                                        <ul>
                                            <li> <a href="/detail-promo">Detail Promo</a></li>
                                        </ul>
                                    </li>
                                    <li class="flyout-right"><a href="javascript:void(0)">Admin</a>
                                        <ul>
                                            <li> <a href="user-profile.html">Profil Admin</a></li>
                                            <li> <a href="edit-profile.html">Edit Profil Admin</a></li>
                                            <!-- <li> <a href="user-cards.html">User Cards</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="flyout-right"><a href="javascript:void(0)">Tabel</a>
                                        <ul>
                                            <li> <a href="projectcreate.html">Produk</a></li>
                                            <li> <a href="/tabel-promotor">Promotor</a></li>
                                            <li> <a href="/tabel-grafik">Grafik</a></li>

                                            <!-- <li> <a href="user-cards.html">User Cards</a></li> -->
                                        </ul>
                                    </li>

                                </ul>
                            </li>

                    </div>
                </div>
                <div class="nav-right col-6 pull-right right-header p-0">
                    <ul class="nav-menus">
                        <li>
                            <div class="right-header ps-0">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text mobile-search"><i
                                                class="fa fa-search"></i></span></div>
                                    <input class="form-control" type="text" placeholder="Search Here........">
                                </div>
                            </div>
                        </li>
                        <li class="serchinput">
                            <div class="serchbox"><i data-feather="search"></i></div>
                            <div class="form-group search-form">
                                <input type="text" placeholder="Cari Produk Disini...">
                            </div>
                        </li>
                        <li>
                            <div class="mode"><i class="fa fa-moon-o"></i></div>
                        </li>

                        <li class="onhover-dropdown">
                            <div class="message"><i data-feather="message-square"></i></div>
                            <ul class="message-dropdown onhover-show-div">
                                <li><i data-feather="message-square"> </i>
                                    <h6 class="f-18 mb-0">Pesan</h6>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img src="../assets/images/user/3.jpg"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Emay Walter</a></h5>
                                            <p>Do you want to go see movie?</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img src="../assets/images/user/6.jpg"
                                                alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Jason Borne</a></h5>
                                            <p>Thank you for rating us.</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-start">
                                        <div class="message-img bg-light-primary"><img
                                                src="../assets/images/user/10.jpg" alt=""></div>
                                        <div class="flex-grow-1">
                                            <h5 class="mb-1"><a href="email_inbox.html">Sarah Loren</a></h5>
                                            <p>What`s the project report update?</p>
                                        </div>
                                        <div class="notification-right"><i data-feather="x"></i></div>
                                    </div>
                                </li>
                                <li><a class="btn btn-primary" href="email_inbox.html">Check Messages</a></li>
                            </ul>
                        </li>
                        <li class="maximize"><a href="#!" onclick="javascript:toggleFullScreen()"><i
                                    data-feather="maximize-2"></i></a></li>

                        <li class="profile-nav onhover-dropdown">
                            <div class="account-user"><i data-feather="user"></i></div>
                            <ul class="profile-dropdown onhover-show-div">
                                <li><a href="profiladmin"><i data-feather="user"></i><span>Profil</span></a></li>
                                <!-- <li><a href="email_inbox.html"><i data-feather="mail"></i><span>E-mail</span></a></li> -->
                                <li><a href="edit-profile.html"><i
                                            data-feather="settings"></i><span>Pengaturan</span></a></li>
                                <li><a href="/logout"><i data-feather="log-in"> </i><span>Keluar</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <script class="result-template" type="text/x-handlebars-template">
                    <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName"></div>

            </div>
            </div>
        </script>
                <script class="empty-template" type="text/x-handlebars-template">
                    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
        </script>
            </div>
        </div>
        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="/beranda"><img class="img-fluid for-light"
                                src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/logo/promogudang.png') }}" alt="" width=150px></a>
                        <div class="back-btn"><i data-feather="grid"></i></div>
                        <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle"
                                data-feather="grid"> </i></div>
                    </div>
                    <div class="logo-icon-wrapper"><a href="/beranda">
                            <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                        </a></div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="back-btn">
                                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                            aria-hidden="true"></i></div>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                href="javascript:void(0)"><i data-feather="home"></i><span
                                                    class="lan-3">Beranda</span></a>
                                            <ul class="sidebar-submenu">

                                                <!-- <li><a class="lan-5" href="dashboard-02.html">Ecommerce</a></li> -->
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list"> <a class="sidebar-link sidebar-title"
                                                href="javascript:void(0)"><i data-feather="box"></i><span>Produk
                                                </span></a>
                                            <ul class="sidebar-submenu">
                                                <!-- <li><a href="projects.html">Project List</a></li> -->
                                                <li><a href="/promoaktif">Promo Aktif</a></li>
                                                <li><a href="/promopendingpromotor">Promo Pending</a></li>
                                                <li><a href="/ditolak">Promo Ditolak</a></li>
                                            </ul>
                                        </li>
                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                href="javascript:void(0)"><i
                                                    data-feather="users"></i><span>Admin</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a href="profiladmin">Profil Admin</a></li>
                                                <li><a href="edit-profile.html">Edit Profil Admin</a></li>
                                                <!-- <li><a href="user-cards.html">Users Cards</a></li> -->
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>

                                        <li class="sidebar-list"><a class="sidebar-link sidebar-title"
                                                href="javascript:void(0)"><i
                                                    data-feather="server"></i><span>Tabel</span></a>
                                            <ul class="sidebar-submenu">
                                                <li><a class="submenu-title" href="javascript:void(0)">Produk<span
                                                            class="sub-arrow"><i
                                                                class="fa fa-angle-right"></i></span></a>
                                                    <ul class="nav-sub-childmenu submenu-content">
                                                        <li><a href="/tabelkategori">Tabel Kategori</a></li>
                                                        <li><a href="/tabelbanner">Tabel Banner</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="submenu-title" href="javascript:void(0)">Promotor<span
                                                            class="sub-arrow"><i
                                                                class="fa fa-angle-right"></i></span></a>
                                                    <ul class="nav-sub-childmenu submenu-content">
                                                        <li><a href="/tabelpromotor">Tabel Promotor</a></li>
                                                    </ul>
                                                </li>

                                                {{-- <li><a class="submenu-title" href="javascript:void(0)">Promo<span
                                                            class="sub-arrow"><i
                                                                class="fa fa-angle-right"></i></span></a>
                                                    <ul class="nav-sub-childmenu submenu-content">
                                                        <li><a href="tabelterbaru.html">Tabel Terbaru</a></li>
                                                        <li><a href="tabelunggulan.html">Tabel Unggulan</a></li>
                                                        <li><a href="tabelterpopuler.html">Tabel Terpopuler</a></li>
                                                        <li><a href="tabelkilat.html">Tabel Kilat</a></li>
                                                    </ul>
                                                </li> --}}

                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-box">
                                    <ul>

                                    </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
            @yield('content')
            <!-- footer start-->
            <footer class="footer">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © 2023 Tivo. All rights reserved.</p>
            </div>
            <div class="col-md-6 p-0 footer-right">
                <p class="mb-0">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
            </div>
            </div>
        </div>
        </footer>
        </div>
    </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/config.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/dashboard/default.js') }}"></script>
    {{-- <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/notify/index.js') }}"></script> --}}
    {{-- <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/typeahead/handlebars.js') }}"></script> --}}
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/typeahead/typeahead.bundle.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/typeahead/typeahead.custom.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/typeahead-search/handlebars.js') }}"></script>
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/typeahead-search/typeahead-custom.js') }}"></script>
    <!-- Template js-->
    <script src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/js/script.js') }}"></script>
    <!-- <script src="../assets/js/theme-customizer/customizer.js"> </script> -->
    <!-- login js-->
    @stack('script')
</body>

<!-- Mirrored from admin.pixelstrap.com/tivo/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 09:01:23 GMT -->

</html>
