<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{ asset('images/logo.svg') }}" alt="logo">
                        </div>
                        <h4>Test Project</h4>
                        <h6 class="font-weight-light">Devam etmek için lütfen giriş yapın.</h6>

                        <form class="pt-3" action="{{ route('login') }}" method="POST" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                       class="form-control form-control-lg"
                                       id="email"
                                       placeholder="E-posta Adresi"
                                       name="email"
                                       value="{{ old('email') }}"
                                >
                            </div>
                            <div class="form-group">
                                <input type="password"
                                       class="form-control form-control-lg"
                                       id="password"
                                       placeholder="Şifre"
                                       name="password"
                                >
                            </div>
                            <div class="mt-3">
                                <button type="button"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        id="btnLogin"
                                >
                                    GİRİŞ YAP
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('js/off-canvas.js') }}"></script>
<script src="{{ asset('js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/settings.js') }}"></script>
<script src="{{ asset('js/todolist.js') }}"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
<script>
    $('#btnLogin').click(function (){
        let email = document.querySelector('#email').value;
        let password = document.querySelector('#password').value;

        if (email.trim() == ""){
            Swal.fire({
                icon: 'info',
                title: 'Hata',
                text: 'Eposta adresi boş olamaz',
                confirmButtonText: 'Tamam',
            })
            return;
        }

        if (password.trim() == ""){
            Swal.fire({
                icon: 'info',
                title: 'Hata',
                text: 'Şifre boş olamaz',
                confirmButtonText: 'Tamam',
            })
            return;
        }

        if (!emailController(email)){
            Swal.fire({
                icon: 'info',
                title: 'Hata',
                text: 'Geçerli bir e-posta adresi girin',
                confirmButtonText: 'Tamam',
            })
            return;
        }

        $('#loginForm').submit();
    });

    function emailController(email){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }


</script>
<!-- endinject -->
</body>

</html>



