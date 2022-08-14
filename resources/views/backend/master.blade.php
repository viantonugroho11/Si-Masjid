<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SiMasjid</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/backend/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/backend/images/Logo2.png') }}" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.tools.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      @include('backend.tools.leftnavbar')
      @include('backend.tools.rightnavbar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include('backend.tools.sidebar')
      <!-- partial -->
      <div class="main-panel">
        @yield('content')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('backend.tools.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ asset('assets/backend/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('assets/backend/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/backend/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/backend/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/backend/js/dataTables.select.min.js') }}"></script>
  <script src="{{ asset('assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script>
     $(".datepicker").datepicker({
         format: 'dd-mm-yyyy',
         autoclose: true,
         todayHighlight: true,
     });
    </script>
  <script src="{{ asset('assets/backend/vendors/ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace( 'visi' );
    CKEDITOR.replace( 'misi' );
    CKEDITOR.replace( 'sejarah' );
    CKEDITOR.replace( 'content' );
  </script>
  <script src="{{ asset('assets/backend/vendors/clockpicker-gh-pages/dist/bootstrap-clockpicker.min.js') }}"></script>
  <script type="text/javascript">
    $('.clockpicker').clockpicker();
    </script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/backend/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/backend/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/backend/js/template.js') }}"></script>
  <script src="{{ asset('assets/backend/js/settings.js') }}"></script>
  <script src="{{ asset('assets/backend/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('assets/backend/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/backend/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

