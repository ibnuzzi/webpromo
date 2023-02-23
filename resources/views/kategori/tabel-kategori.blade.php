@extends('layout.template')

@section('content')

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Tabel Kategori</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/beranda"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Tabel</li>
                                    <li class="breadcrumb-item active">Tabel Kategori</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container-fluid starts-->
                <div class="tambah" style="margin-left: 10px;">
                    <a href="/tambahkategori">
                        <button class="btn btn-primary mb-2" type="button"> <i class="fa-solid fa-plus"></i></button>
                    </a>

                </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="card">
                        <form action="{{Route('tabel.kategori')}}" method="GET" class="card-header">
                          <p>Cari : <input type="search" value="" name="cari" style="border-radius: 5px;">
                            <button type="submit" style="padding: 10px; width:75px; margin-left:10px;" class="btn btn-primary mb-1" type="button">Cari</button>
                            <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                          </p>

                        </form>
                        <div class="table-responsive theme-scrollbar">
                          <table class="table">
                            <thead>
                              <tr class="border-bottom-primary">
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                            @foreach ($data as $item)


                            <tr class="border-bottom-secondary">
                                <th scope="row">{{$loop->index + $data->firstitem()}}</th>
                                <td>{{$item->kategori}}</td>
                                <td><img style="height:100px; width:100px;" src="fotoproduk/{{$item->fotoproduk}}" alt=""></td>
                                <td>
                                  <a href="{{Route('edit.kategori',['id'=>$item->id])}}" method="POST">
                                  <button class="btn btn-success mb-1" type="button"><i
                                  class="fa-solid fa-pen"></i></button>
                                  </a> <a href="{{Route('hapus.kategori',['id'=>$item->id])}}"><button class="btn btn-danger" type="button"><i
                                  class="fa-solid fa-trash"></i></button></a>
                              </td>
                              </tr>

                            @endforeach
                            </tbody>
                          </table>
                          showing
                          {{$data->firstitem()}}
                          to
                          {{$data->lastitem()}}
                          of
                          {{$data->total()}}
                          entries
                        </div>
                        <div class="pull-right">
                            {{$data ->withQueryString()->links()}}
                        </div>
                      </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
              </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

    </div>
    </div>

@endsection
