@extends('admin.layout')

@section('title')
    Ürün Güncelle
@endsection

@section('css')
@endsection

@section('content')

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ürün Güncelle</h4>

                    <form class="forms-sample" method="POST" action="{{ route('admin.updateProduct', $product->id) }}" id="updateProductForm">
                        @csrf
                        <div class="form-group">
                            <label for="productName">Ürün Adı</label>
                            <input type="text"
                                   class="form-control"
                                   id="productName"
                                   name="productName"
                                   value="{{ $product->productName }}"
                                   placeholder="Ürün Adı">
                        </div>

                        <div class="form-group">
                            <label for="productImageUrl">Ürün Resim Linki</label>
                            <input type="text"
                                   class="form-control"
                                   id="productImageUrl"
                                   name="productImageUrl"
                                   value="{{ $product->productImageUrl }}"
                                   placeholder="Ürün Resmi Linki">
                        </div>

                        <div class="form-group">
                            <label for="productPrice">Ürün Fiyatı</label>
                            <input type="number"
                                   class="form-control"
                                   id="productPrice"
                                   name="productPrice"
                                   value="{{ $product->productPrice }}"
                                   placeholder="Ürün Fiyatı">
                        </div>

                        <div class="form-group">
                            <label for="productCategory">Kategori Seçimi</label>
                            <select class="form-control"
                                    id="productCategory"
                                    name="productCategory">
                                <option value="">Kategori Seçin</option>
                                @foreach($categories as $category)
                                <option @if($product->getCategory->categoryName == $category->categoryName)
                                        selected="selected" @endif
                                    value="{{$category->id}}"
                                >
                                    {{ $category->categoryName }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="productDetail">Açıklama</label>
                            <textarea class="form-control" id="productDetail" name="productDetail" rows="4">{{ $product->productDetail }}</textarea>
                        </div>

                        <button type="button" class="btn btn-primary mr-2" id="btnUpdate">Güncelle</button>
                        <a href="{{ route('admin.products') }}" class="btn btn-warning mr-2">Geri Dön </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#btnUpdate').click(function (){
            let pname = document.querySelector('#productName').value;
            let pimage = document.querySelector('#productImageUrl').value;
            let pprice = document.querySelector('#productPrice').value;
            let pcategory = document.querySelector('#productCategory').value;
            let pdescription = document.querySelector('#productDetail').value;

            if (pname.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Ürün adı boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }

            if (pimage.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Resim linki boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }

            if (pprice.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Fiyat boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }

            if (pcategory.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Kategori boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }

            if (pdescription.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Açıklama boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }

            $('#updateProductForm').submit();

        });

    </script>
@endsection



