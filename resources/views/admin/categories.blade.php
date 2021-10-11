@extends('admin.layout')

@section('title')
    Kategoriler
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
                            <a href="{{ route('admin.newCategory') }}" class="btn btn-block btn-primary">Yeni Kategori
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
                                <th>Kategori Adı</th>
                                <th>Durum</th>
                                <th>İşlem</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->categoryName }}</td>
                                    <td>
                                        @if($category->status == 0)
                                            <a
                                                href="{{ route('admin.changeCategoryStatus', $category->id) }}"
                                                style="width: 8rem;"
                                                class="btn btn-success btn-icon-text">
                                                Aktif
                                            </a>
                                        @else
                                            <a
                                                href="{{ route('admin.changeCategoryStatus', $category->id) }}"
                                                style="width: 8rem;"
                                                class="btn btn-warning btn-icon-text">
                                                Pasif
                                            </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a
                                            href="{{ route('admin.categoryDetail', $category->id) }}"
                                            style="width: 8rem;"
                                            class="btn btn-warning btn-icon-text">
                                            <i class="ti-reload btn-icon-prepend"></i>
                                            Güncelle
                                        </a>
                                        <a
                                            href="{{ route('admin.deleteCategory', $category->id) }}"
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



