
@extends('admin.layout')
@section('title')
    Panel
@endsection

@section('css')
@endsection

@section('content')


        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Hoş geldiniz!</h3>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="{{ asset('images/dashboard/people.svg') }}" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>28<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Adana</h4>
                                    <h6 class="font-weight-normal">Türkiye</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Toplam Ürün Sayısı</p>
                                <p class="fs-30 mb-2">{{$productsCount}}</p>
                                <p>10.00% (30 gün)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4 stretch-card transparent mb-2">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Kullanıcı Sayısı</p>
                                <p class="fs-30 mb-2">{{$usersCount}}</p>
                                <p>0.22% (30 gün)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Kategori Sayısı</p>
                                <p class="fs-30 mb-2">{{ $categoryCount }}</p>
                                <p>2.00% (30 days)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection

@section('js')
@endsection



