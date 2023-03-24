@extends('layout.template')

@push('css')
        {{-- toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
            integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
            crossorigin="anonymous" referrerpolicy="no-referrer">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
            integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
    @endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Tabel Promotor</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/beranda"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Tabel</li>
                            <li class="breadcrumb-item active">Tabel Promotor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <form action="{{ Route('tabelpromotor') }}" method="post" class="card-header">
                                <p>Cari : <input type="search" value="" name="cari" style="border-radius: 5px;">
                                    <button type="submit" style="padding: 10px; width:75px; margin-left:10px;"
                                        class="btn btn-primary mb-1" type="button">Cari</button>
                                    <a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
                                </p>

                            </form>
                        </div>
                        <div class="table-responsive theme-scrollbar">
                            <table class="table">
                                <thead>
                                    <tr class="border-bottom-primary">
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Promotor</th>

                                        <th scope="col">Nama Merek</th>
                                        <th scope="col">Foto Merek</th>
                                        <th scope="col">Email</th>


                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data as $item)
                                    <tr class="border-bottom-secondary">
                                        <th scope="row">{{ $loop->index + $data->firstitem() }}</th>
                                        <td>{{ $item->namapromotor}}</td>
                                        <td>{{ $item->namamerek }}</td>
                                        <td><img src="foto_merek/{{ $item->fotomerek }}" style="height:100px; width:100px;"
                                                alt=""></td>
                                        <td>{{ $item->email }}</td>
                                            <td>
                                                <a href="{{ Route('hapus.promotor', ['id' => $item->id]) }}"><button
                                                    class="btn btn-danger" type="button"><i
                                                        class="fa-solid fa-trash"></i></button></a>
                                            </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            showing
                            {{ $data->firstitem() }}
                            to
                            {{ $data->lastitem() }}
                            of
                            {{ $data->total() }}
                            entries
                        </div>
                        <div class="pull-right">
                            {{ $data->withQueryString()->links() }}
                        </div>
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

@push('script')
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
    $('#search').on('keyup', function(){
        search();
    });
    search();
    function search(){
         var keyword = $('#search').val();
         $.post('{{ route("tabelpromotor") }}',
          {
             _token: $('meta[name="csrf-token"]').attr('content'),
             keyword:keyword
           },
           function(data){
            table_post_row(data);
              console.log(data);
           });
    }
    </script>
@endpush
