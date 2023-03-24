@extends('layout.template')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Promo Yang Sedang Menunggu Tinjauan Anda</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="product-wrapper-grid">
            <div class="row">
                @foreach ($data as $promotor)
                    @if (Carbon\Carbon::now()->format('Y-m-d') <= $promotor->masapromo)
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img"><img class="img-fluid" style="height:300px; weight:200px"
                                            src="{{ asset('sampul/' . $promotor->sampul) }}" alt="">
                                    </div>
                                    <div class="product-details">
                                        <h4>{{ $promotor->namapromo }}</h4>
                                        <div class="mt-2">
                                            <p style="font-weight: bold;">Status : <span
                                                    class="badge bg-warning text-white">Pending</span></p>
                                            <a href="/detailpromopromotor/{{ $promotor->id }}" method="post">
                                                <button class=" btn-info mb-1" style="border-radius: 5px;"
                                                    type="button">Detail Promo</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>
    </div>
    </div>
@endsection
