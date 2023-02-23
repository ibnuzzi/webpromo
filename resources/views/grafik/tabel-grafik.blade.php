@extends('layout.template')

@section('content')

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Tabel Grafik</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/beranda"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Grafik</li>
                                    <li class="breadcrumb-item active">Tabel Grafik</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="container-fluid basic_table">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="border-bottom-primary">
                                                <th scope="col">Id</th>
                                                <th scope="col">Jumlah Guest</th>
                                                <th scope="col">Jumlah Promotor</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>20</td>
                                            <td>15</td>
                                            <td>
                                              <a href="edit-kategori.html">
                                                <button class="btn btn-success" type="button"><i class="fa-solid fa-pen"></i></button>
                                              </a>

                                              <button class="btn btn-danger" type="button"><i class="fa-solid fa-trash"></i></button>
                                            </td>
                                          </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

    </div>
    </div>

@endsection
