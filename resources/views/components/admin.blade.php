<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Smart Vertical Garden</title>
  <link rel="shortcut icon" type="image/png" href="{{ url ('src')}}/assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ url ('src')}}/assets/css/styles.min.css" />
</head>

<body>
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
  @stack('scripts')
</body>

</html>
