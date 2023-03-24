@extends('layout.template')

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
@endpush
<style>
    body {
        background: #f5f5f5;
        margin-top: 20px;
    }

    /*------- portfolio -------*/
    .project {
        margin: 15px 0;
    }

    .no-gutter .project {
        margin: 0 !important;
        padding: 0 !important;
    }

    .has-spacer {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-spacer-extra-space {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-side-spacer {
        margin-left: 30px;
        margin-right: 30px;
    }

    .project-title {
        font-size: 1.25rem;
    }

    .project-skill {
        font-size: 0.9rem;
        font-weight: 400;
        letter-spacing: 0.06rem;
    }

    .project-info-box {
        margin: 15px 0;
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 5px;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    .project-info-box p:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: auto;
        -webkit-backface-visibility: hidden;
    }

    .rounded {
        border-radius: 5px !important;
        width: 550px;
        height: 550px;
    }

    .btn-xs.btn-icon {
        width: 34px;
        height: 34px;
        max-width: 34px !important;
        max-height: 34px !important;
        font-size: 10px;
        line-height: 34px;
    }

    /* facebook button */
    .btn-facebook,
    .btn-facebook:active,
    .btn-facebook:focus {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    .btn-facebook:hover {
        color: #fff !important;
        background: #3b4f7a;
        border: 2px solid #3b4f7a;
    }

    .btn-facebook-link,
    .btn-facebook-link:active,
    .btn-facebook-link:focus {
        color: #4e68a1 !important;
        background: transparent;
        border: none;
    }

    .btn-facebook-link:hover {
        color: #3b4f7a !important;
    }

    .btn-outline-facebook,
    .btn-outline-facebook:active,
    .btn-outline-facebook:focus {
        color: #4e68a1 !important;
        background: transparent;
        border: 2px solid #4e68a1;
    }

    .btn-outline-facebook:hover {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    /* twitter button */
    .btn-twitter,
    .btn-twitter:active,
    .btn-twitter:focus {
        color: #fff !important;
        background: #65b5f2;
        border: 2px solid #65b5f2;
    }

    .btn-twitter:hover {
        color: #fff !important;
        background: #5294c6;
        border: 2px solid #5294c6;
    }

    .btn-twitter:hover {
        color: #fff !important;
        background: #5294c6;
        border: 2px solid #5294c6;
    }

    .btn-twitter-link,
    .btn-twitter-link:active,
    .btn-twitter-link:focus {
        color: #65b5f2 !important;
        background: transparent;
        border: none;
    }

    .btn-twitter-link:hover {
        color: #5294c6 !important;
    }

    .btn-outline-twitter,
    .btn-outline-twitter:active,
    .btn-outline-twitter:focus {
        color: #65b5f2 !important;
        background: transparent;
        border: 2px solid #65b5f2;
    }

    .btn-outline-twitter:hover {
        color: #fff !important;
        background: #65b5f2;
        border: 2px solid #65b5f2;
    }

    /* google button */
    .btn-google,
    .btn-google:active,
    .btn-google:focus {
        color: #fff !important;
        background: #e05d4b;
        border: 2px solid #e05d4b;
    }

    .btn-google:hover {
        color: #fff !important;
        background: #b94c3d;
        border: 2px solid #b94c3d;
    }

    .btn-google-link,
    .btn-google-link:active,
    .btn-google-link:focus {
        color: #e05d4b !important;
        background: transparent;
        border: none;
    }

    .btn-google-link:hover {
        color: #b94c3d !important;
    }

    .btn-outline-google,
    .btn-outline-google:active,
    .btn-outline-google:focus {
        color: #e05d4b !important;
        background: transparent;
        border: 2px solid #e05d4b;
    }

    .btn-outline-google:hover {
        color: #fff !important;
        background: #e05d4b;
        border: 2px solid #e05d4b;
    }

    /* linkedin button */
    .btn-linkedin,
    .btn-linkedin:active,
    .btn-linkedin:focus {
        color: #fff !important;
        background: #2083bc;
        border: 2px solid #2083bc;
    }

    .btn-linkedin:hover {
        color: #fff !important;
        background: #186592;
        border: 2px solid #186592;
    }

    .btn-linkedin-link,
    .btn-linkedin-link:active,
    .btn-linkedin-link:focus {
        color: #2083bc !important;
        background: transparent;
        border: none;
    }

    .btn-linkedin-link:hover {
        color: #186592 !important;
    }

    .btn-outline-linkedin,
    .btn-outline-linkedin:active,
    .btn-outline-linkedin:focus {
        color: #2083bc !important;
        background: transparent;
        border: 2px solid #2083bc;
    }

    .btn-outline-linkedin:hover {
        color: #fff !important;
        background: #2083bc;
        border: 2px solid #2083bc;
    }

    /* pinterest button */
    .btn-pinterest,
    .btn-pinterest:active,
    .btn-pinterest:focus {
        color: #fff !important;
        background: #d2373b;
        border: 2px solid #d2373b;
    }

    .btn-pinterest:hover {
        color: #fff !important;
        background: #ad2c2f;
        border: 2px solid #ad2c2f;
    }

    .btn-pinterest-link,
    .btn-pinterest-link:active,
    .btn-pinterest-link:focus {
        color: #d2373b !important;
        background: transparent;
        border: none;
    }

    .btn-pinterest-link:hover {
        color: #ad2c2f !important;
    }

    .btn-outline-pinterest,
    .btn-outline-pinterest:active,
    .btn-outline-pinterest:focus {
        color: #d2373b !important;
        background: transparent;
        border: 2px solid #d2373b;
    }

    .btn-outline-pinterest:hover {
        color: #fff !important;
        background: #d2373b;
        border: 2px solid #d2373b;
    }

    /* dribble button */
    .btn-dribbble,
    .btn-dribbble:active,
    .btn-dribbble:focus {
        color: #fff !important;
        background: #ec5f94;
        border: 2px solid #ec5f94;
    }

    .btn-dribbble:hover {
        color: #fff !important;
        background: #b4446e;
        border: 2px solid #b4446e;
    }

    .btn-dribbble-link,
    .btn-dribbble-link:active,
    .btn-dribbble-link:focus {
        color: #ec5f94 !important;
        background: transparent;
        border: none;
    }

    .btn-dribbble-link:hover {
        color: #b4446e !important;
    }

    .btn-outline-dribbble,
    .btn-outline-dribbble:active,
    .btn-outline-dribbble:focus {
        color: #ec5f94 !important;
        background: transparent;
        border: 2px solid #ec5f94;
    }

    .btn-outline-dribbble:hover {
        color: #fff !important;
        background: #ec5f94;
        border: 2px solid #ec5f94;
    }

    /* instagram button */
    .btn-instagram,
    .btn-instagram:active,
    .btn-instagram:focus {
        color: #fff !important;
        background: #4c5fd7;
        border: 2px solid #4c5fd7;
    }

    .btn-instagram:hover {
        color: #fff !important;
        background: #4252ba;
        border: 2px solid #4252ba;
    }

    .btn-instagram-link,
    .btn-instagram-link:active,
    .btn-instagram-link:focus {
        color: #4c5fd7 !important;
        background: transparent;
        border: none;
    }

    .btn-instagram-link:hover {
        color: #4252ba !important;
    }

    .btn-outline-instagram,
    .btn-outline-instagram:active,
    .btn-outline-instagram:focus {
        color: #4c5fd7 !important;
        background: transparent;
        border: 2px solid #4c5fd7;
    }

    .btn-outline-instagram:hover {
        color: #fff !important;
        background: #4c5fd7;
        border: 2px solid #4c5fd7;
    }

    /* youtube button */
    .btn-youtube,
    .btn-youtube:active,
    .btn-youtube:focus {
        color: #fff !important;
        background: #e52d27;
        border: 2px solid #e52d27;
    }

    .btn-youtube:hover {
        color: #fff !important;
        background: #b31217;
        border: 2px solid #b31217;
    }

    .btn-youtube-link,
    .btn-youtube-link:active,
    .btn-youtube-link:focus {
        color: #e52d27 !important;
        background: transparent;
        border: none;
    }

    .btn-youtube-link:hover {
        color: #b31217 !important;
    }

    .btn-outline-youtube,
    .btn-outline-youtube:active,
    .btn-outline-youtube:focus {
        color: #e52d27 !important;
        background: transparent;
        border: 2px solid #e52d27;
    }

    .btn-outline-youtube:hover {
        color: #fff !important;
        background: #e52d27;
        border: 2px solid #e52d27;
    }

    .btn-xs.btn-icon span,
    .btn-xs.btn-icon i {
        line-height: 34px;
    }

    .btn-icon.btn-circle span,
    .btn-icon.btn-circle i {
        margin-top: -1px;
        margin-right: -1px;
    }

    .btn-icon i {
        margin-top: -1px;
    }

    .btn-icon span,
    .btn-icon i {
        display: block;
        line-height: 50px;
    }

    a.btn,
    a.btn-social {
        display: inline-block;
    }

    .mr-5 {
        margin-right: 5px !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .btn-facebook,
    .btn-facebook:active,
    .btn-facebook:focus {
        color: #fff !important;
        background: #4e68a1;
        border: 2px solid #4e68a1;
    }

    .btn-circle {
        border-radius: 50% !important;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    p {
        font-family: "Barlow", sans-serif !important;
        font-weight: 300;
        font-size: 1rem;
        color: #686c6d;
        letter-spacing: 0.03rem;
        margin-bottom: 10px;
    }

    b,
    strong {
        font-weight: 700 !important;
    }
</style>
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Detail Promo</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/promopending">
                                    <i data-feather="home">
                                        Kembali
                                    </i>
                                </a>
                            </li>

                            <li class="breadcrumb-item active">Detail Promo</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        <h5>Deskripsi Promo : </h5>
                        <p class="mb-0">{{ $data->deskripsipromo }}</p>
                    </div><!-- / project-info-box -->
                    <div class="project-info-box">
                        <p><b>Nama Promotor : </b>{{ $promotor->namapromotor }}</p>
                        <p><b>Kategori Promo : </b>{{ $kategori->kategori }}</p>
                        <p><b>Masa Promo : </b>{{ $data->masapromo }}</p>
                        <p><b>Limit Promo : </b>{{ $data->limitpromo }} Orang</p>
                        <p><b>Nama Brand : </b>{{ $promotor->namamerek }}</p>
                        <p><b>Nama Promo: </b> {{ $data->namapromo }}</p>
                        @if ($data->status == 0)
                            <form action="/promoditerima/{{ $data->id }}" method="post">
                                @csrf
                                <button class="btn btn-success mb-1" style="border-radius: 5px; width:350px;"
                                    type="submit">
                                    Terima Promo
                                </button>
                            </form>
                            <button class="btn btn-danger" style="border-radius: 5px; width:350px;" type="submit"
                                data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Tolak
                                Promo</button>
                        @elseif($data->status == 2 )
                            <button class="btn btn-danger mb-1" style="border-radius: 5px;" type="submit">
                                Promo Telah Ditolak
                            </button>
                        @else
                            <button class="btn btn-success mb-1" style="border-radius: 5px;" type="submit">
                                <i class="fa fa-check-square"></i>Promo Telah Diterima
                            </button>
                        @endif
                    </div>

                    <!-- / project-info-box -->
                </div><!-- / column -->
                <div style="width:665px;" id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($fotoproduk as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ asset('fotopromo/' . $image->fotoproduk) }}" class="d-block w-100" alt="produk">
                            </div>
                        @endforeach
                    </div>
                    <button style="border:none; width:30px; height:30px; margin-top:300px" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button style="border:none; width:30px; height:30px; margin-top:300px" class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <form action="/promoditolak/{{ $data->id }}" method="post" class="modal fade" id="exampleModal" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="status" value="2">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tinggalkan Pesan Ditolak Untuk Promotor</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <textarea name="pesan" id="" cols="60" rows="5"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">Tutup</button>

                    <button class="btn btn-success" type="submit">Kirim</button>

                </div>
            </div>
        </div>
    </form>
@endsection
