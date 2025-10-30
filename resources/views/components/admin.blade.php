<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart Vertical Garden</title>
  <link rel="shortcut icon" type="image/png" href="{{ url ('src')}}/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ url ('src')}}/assets/css/styles.min.css" />
</head>

<body class="bg-light">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <x-layout.admin.sidebar />
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <x-layout.admin.header />
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        {{ $slot }}
      </div>
    </div>
  </div>
  <script src="{{ url('src') }}/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="{{ url('src') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('src') }}/assets/js/sidebarmenu.js"></script>
  <script src="{{ url('src') }}/assets/js/app.min.js"></script>
  <script src="{{ url('src') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ url('src') }}/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="{{ url('src') }}/assets/js/dashboard.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
    <script>
        CKEDITOR.replace('deskripsi')
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 4000,
                timeProgressBar: true,
            })
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 4000,
                timeProgressBar: true,
            })
        </script>
    @endif
</body>

</html>
