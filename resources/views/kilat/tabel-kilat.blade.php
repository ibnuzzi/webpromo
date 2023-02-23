@extends('layout.template')

@section('content')


            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Tabel Produk Kilat</h3>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item">Tabel</li>
                                    <li class="breadcrumb-item active">Tabel Produk Kilat</li>
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
                                              <th scope="col">Nama Promo</th>
                                              <th scope="col">Nama Merek</th>
                                              <th scope="col">Kategori Promo</th>
                                              <th scope="col">Deskripsi Promo</th>
                                              <th scope="col">Masa Promo</th>
                                              <th scope="col">Limit Promo</th>
                                              <th scope="col">Foto Promo</th>
                                              <th scope="col">Status Promo</th>
                                              <th scope="col">Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr class="border-bottom-secondary">
                                              <th scope="row">1</th>
                                              <td>Stephan</td>
                                              <td>Promo Hokben Spesial Hoka Ramen Mulai Dari Rp 55K</td>
                                              <td>Hokben</td>
                                              <td>Makanan</td>
                                              <td>Rekomendasi makan siang istimewa bareng keluarga atau temen kantor
                                                  nih.
                                                  Kamu bisa pesan paket Special Hoka Ramen di HokBen.</td>
                                              <td>1 - 18 Februari 2023</td>
                                              <td>200 Orang</td>
                                              <td><img src="../assets/images/makanan 1.jpg" width="100%" alt=""></td>
                                              <td> <span class="badge badge-light-success">aktif</span></td>
                                              <td>



                                                  <button class="btn-danger" style="border-radius: 5px;"
                                                      type="button"><i
                                                      class="fa-solid fa-trash"></i></button>
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
