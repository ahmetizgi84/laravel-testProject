@extends('admin.layout')

@section('title')
    Ürünler
@endsection

@section('css')
@endsection

@section('content')

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-header bg-transparent border-warning">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="{{ route('admin.newProduct') }}" class="btn btn-block btn-primary">Yeni Ürün
                                Ekle</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h4 class="card-title">Tüm Ürünler</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Resim</th>
                                <th>Ürün Adı</th>
                                <th>Fiyat</th>
                                <th>Kategori</th>
                                <th>Düzenle</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td width="10%">{{ $product->id }}</td>
                                    <td width="15%">
                                        <image
                                            src="{{ $product->productImageUrl }}"
                                            style="width: 5rem; height: 5rem; border-radius: 0"
                                        />
                                    </td>
                                    <td width="30%">{{ $product->productName }}</td>
                                    <td width="15%">{{ $product->productPrice }}</td>
                                    <td width="15%">{{ $product->getCategory->categoryName }}</td>
                                    <td width="15%">
                                        <a
                                            href="{{ route('admin.update', $product->id) }}"
                                            style="width: 8rem;"
                                            class="btn btn-warning btn-icon-text">
                                            <i class="ti-reload btn-icon-prepend"></i>
                                            Güncelle
                                        </a>
                                        <a
                                            href="{{ route("admin.deleteProduct", $product->id) }}"
                                            style="width: 8rem;"
                                            class="btn btn-danger btn-icon-text">
                                            <i class="ti-alert btn-icon-prepend"></i>
                                            Sil
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection



