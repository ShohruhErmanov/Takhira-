<!DOCTYPE html>
    <html lang="en">

    <!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
        <title>Takhira Ro'yxatdan o'tish</title>
        <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('/admin/assets/css/app.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('/admin/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('/admin/assets/css/components.css') }}">
        <!-- Custom style CSS -->
        <link rel="stylesheet" href="{{ asset('/admin/assets/css/custom.css') }}">
        <link rel='shortcut icon' type='image/x-icon' href='{{ asset('/admin/assets/img/favicon.ico') }}' />
    </head>

    <body>
        <div class="loader"></div>
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="row">
                        <div
                            class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>Ro'yxatdan o'tish</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-12">
                                                <label for="frist_name">Ism kiriting</label>
                                                <input id="frist_name" type="text" class="form-control"
                                                    name="name" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email kiriting</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label for="password" class="d-block">Parol kiriting</label>
                                                <input id="password" type="password" class="form-control pwstrength"
                                                    data-indicator="pwindicator" name="password">
                                                <div id="pwindicator" class="pwindicator">
                                                    <div class="bar"></div>
                                                    <div class="label"></div>
                                                </div>
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="password2" class="d-block">
                                                    Parolni tasdiqlang</label>
                                                <input id="password2" type="password" class="form-control"
                                                    name="password_confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">

                                                Roʻyxatdan oʻtish
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="mb-4 text-muted text-center">
                                    Allaqachon roʻyxatdan oʻtganmisiz? <a href="{{ route('login') }}">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- General JS Scripts -->
        <script src="{{ asset('/admin/assets/js/app.min.js') }}"></script>
        <!-- JS Libraies -->
        <!-- Page Specific JS File -->
        <!-- Template JS File -->
        <script src="{{ asset('/admin/assets/js/scripts.js') }}"></script>
        <!-- Custom JS File -->
        <script src="{{ asset('/admin/assets/js/custom.js') }}"></script>
    </body>
