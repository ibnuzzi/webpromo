@extends('layout.template')

@section('content')

<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Profil Admin</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active">Profil Admin</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile header start-->
                <div class="col-sm-12">
                    <div class="card profile-header"><img class="img-fluid bg-img-cover"
                            src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/user-profile/bg-profile.jpg/') }}" alt="">
                        <div class="profile-img-wrrap"><img class="img-fluid bg-img-cover"
                                src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/user-profile/bg-profile.jpg/') }}" alt=""></div>
                        <div class="userpro-box">
                            <div class="img-wrraper">
                                <div class="avatar"><img class="img-fluid" alt=""
                                        src="{{ asset('admin/tamplate_promotor/admin.pixelstrap.com/tivo/assets/images/user/7.jpg') }}"></div>
                            </div>
                            <div class="user-designation">
                                <div class="title"><a target="_blank" href="#">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <h6 class="f-w-500">{{ Auth::user()->role }}</h6>
                                    </a>
                            </div>
                                <!-- <div class="social-media">
                    <ul class="user-list-social">
                      <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="https://accounts.google.com/"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                      <li><a href="https://dashboard.rss.com/auth/sign-in/"><i class="fa fa-rss"></i></a></li>
                    </ul>
                  </div> -->
                                <!-- <div class="follow">
                    <ul class="follow-list">
                      <li>
                        <div class="follow-num counter">325</div><span>Follower</span>
                      </li>
                      <li>
                        <div class="follow-num counter">450</div><span>Following</span>
                      </li>
                      <li>
                        <div class="follow-num counter">500</div><span>Likes</span>
                      </li>
                    </ul>
                  </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile header end-->

            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
