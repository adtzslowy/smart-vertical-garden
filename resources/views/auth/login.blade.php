<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Smart Vertical Garden</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ url('src') }}/assets/images/logos/favicon.png" />

    <!-- Bootstrap & Custom Styles -->
    <link rel="stylesheet" href="{{ url('src') }}/assets/css/styles.min.css" />
</head>

<body>
    <!-- Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">

                        <div class="card mb-0 shadow-sm border-0 rounded-3">
                            <div class="card-body">

                                <!-- Logo -->
                                <a href="{{ url('/') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{ url('src') }}/assets/images/logos/dark-logo.svg" width="180" alt="Logo">
                                </a>

                                <p class="text-center mb-4">Masukkan Email dan Password dengan benar</p>

                                <!-- Login Form -->
                                <form action="{{ url('login') }}" method="POST">
                                    @csrf
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="btn-close" aria-label="close"></button>
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="btn-close" aria-label="close"></button>
                                        </div>
                                    @endif
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter your email">
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Enter your password">
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" id="remember"
                                                checked>
                                            <label class="form-check-label text-dark" for="remember">
                                                Remember this Device
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Sign In Button -->
                                    <button type="submit" class="btn btn-primary w-100 py-2 fs-5 mb-4 rounded-2">
                                        Sign In
                                    </button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ url('src') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ url('src') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
