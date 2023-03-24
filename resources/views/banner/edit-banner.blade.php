@extends('layout.template')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Kategori</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Promo</li>
                            <li class="breadcrumb-item active">Tambah Promo </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid project-create">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form action=" {{ Route('updatebanner', ['id' => $data->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                            @method('PUT')
                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                    <img src="{{ asset('banner/' . $data->banner1) }}" style="width: 380px;" alt="">
                                    <img src="{{ asset('banner/' . $data->banner2) }}" style="width: 380px;" alt="">
                                    <img src="{{ asset('banner/' . $data->banner3) }}" style="width: 380px;" alt="">
                                    <div class="input-group mb-3">
                                        <input type="file" name="banner1" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                            value="{{ $data->banner1 }}">
                                        @error('banner1')
                                            <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                        @enderror
                                        <input type="file" name="banner2" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                            value="{{ $data->banner2 }}" class="ms-4">
                                            @error('banner2')
                                            <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                        @enderror
                                        <input type="file" name="banner3" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                                            value="{{ $data->banner3 }}" class="ms-5">
                                            @error('banner3')
                                            <div class="alert alert-danger mb-3"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <button type="submit" class="btn btn-success" type="button">Simpan</button>

                                        <a href="/tabelbanner">
                                            <button class="btn btn-danger" type="button">Batal</button>
                                        </a>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
    <!-- footer start-->
    <!-- <footer class="footer">
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
                  </footer> -->
    </div>
    </div>
@endsection
