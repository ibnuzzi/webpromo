@extends('layout.template')

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
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
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
                          <p>Cari : <input type="search" style="border-radius: 5px;"></p>
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
                              <tr class="border-bottom-secondary">
                                <th scope="row">1</th>
                                <td>Stephan</td>
                                <td>Hokben</td>
                                <td><img src="../assets/images/hokben.png" width="100px" alt=""></td>
                                <td>contoh@gmail.com</td>


                                <td>



                                  <button class="btn-danger" style="border-radius: 5px;" type="button">Hapus Akun</button>
                              </td>
                              </tr>

                            </tbody>
                          </table>
                          <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                  <span class="sr-only">Previous</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
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
