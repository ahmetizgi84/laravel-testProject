@extends('admin.layout')

@section('title')
    Yeni Kategori Ekle
@endsection

@section('css')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Yeni Kategori Ekle</h4>

                    <form class="forms-sample" method="POST" action="{{ route('admin.addNewCategory') }}" id="newCategoryForm">
                        @csrf
                        <div class="form-group">
                            <label for="categoryName">Kategori Adı</label>
                            <input type="text"
                                   class="form-control"
                                   id="categoryName"
                                   name="categoryName"
                                   value="{{ old('categoryName') }}"
                                   placeholder="Kategori Adı">
                        </div>

                        <button type="button" class="btn btn-primary mr-2" id="btnStore">Kaydet</button>
                        <a href="{{ route('admin.newCategory') }}" class="btn btn-warning mr-2">Geri Dön </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('#btnStore').click(function (){
            let catName = document.querySelector('#categoryName').value;

            if (catName.trim() == ""){
                Swal.fire({
                    icon: 'info',
                    title: 'Hata',
                    text: 'Kategori adı boş olamaz',
                    confirmButtonText: 'Tamam',
                })
                return;
            }


            $('#newCategoryForm').submit();

        });

    </script>
@endsection



