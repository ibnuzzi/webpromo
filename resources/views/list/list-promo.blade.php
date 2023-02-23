@extends('layout.template')

@section('content')

            <!-- Page Body Start-->
        <div class="page-body-wrapper">

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3>Promo Yang Sudah dipublikasikan</h3>

                            </div>


                            <div class="col-sm-6">

                                <ol class="breadcrumb">
                                    <a href="pending-promo.html">
                                    <li  class="product-content">
                                        <button class="btn btn-outline-warning" type="button">
                                            Ada 1 Promo Pending Menunggu Tinjauan Anda <i class="fa fa-exclamation-circle"></i>
                                        </button>
                                    </li></a>
                                    <!-- <li class="breadcrumb-item active">Default</li> -->
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div class="product-wrapper-grid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img"><img class="img-fluid"
                                        src="../assets/images/makanan 1.jpg" alt="">

                                    </div>

                                    <div class="product-details">
                                            <h4>Paket Spesial Hoka Ramen</h4>

                                            <div class="mt-2">
                                                <p style="font-weight: bold;">Status : <span class="badge bg-success text-dark">Aktif</span></p>
                                                <a href="/detail-promo">
                                                    <button class=" btn-info mb-1" style="border-radius: 5px;"
                                                        type="button">Detail Promo</button>
                                                </a>
                                                <button class=" btn-danger" style="border-radius: 5px;"
                                                        type="button">Hapus Promo</button>
                                            </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                          <div class="card">
                              <div class="product-box">
                                  <div class="product-img"><img class="img-fluid"
                                      src="../assets/images/makanan 1.jpg" alt="">

                                  </div>

                                  <div class="product-details">
                                          <h4>Paket Spesial Hoka Ramen</h4>

                                          <div class="mt-2">
                                              <p style="font-weight: bold;">Status : <span class="badge bg-warning text-dark">Expired</span></p>
                                              <a href="/detail-promo">
                                                  <button class=" btn-info mb-1" style="border-radius: 5px;"
                                                      type="button">Detail Promo</button>
                                              </a>
                                              <button class=" btn-danger" style="border-radius: 5px;"
                                                      type="button">Hapus Promo</button>
                                          </div>
                                  </div>


                              </div>
                          </div>
                      </div>
                      <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img"><img class="img-fluid"
                                    src="../assets/images/promo/hokben3.jpg" alt="">

                                </div>

                                <div class="product-details">
                                        <h4>Paket Spesial Hoka Ramen</h4>

                                        <div class="mt-2">
                                            <p style="font-weight: bold;">Status : <span class="badge bg-success text-dark">Aktif</span></p>
                                            <a href="product-2.html">
                                                <button class=" btn-info mb-1" style="border-radius: 5px;"
                                                    type="button">Detail Promo</button>
                                            </a>
                                            <button class=" btn-danger" style="border-radius: 5px;"
                                                    type="button">Hapus Promo</button>
                                        </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

@endsection
