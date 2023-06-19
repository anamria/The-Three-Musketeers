<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('backend/plugins/fontawesome-free/css/all.min.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/dist/css/adminlte.min.css')}}">

  <link rel="stylesheet" href="{{ asset("style/css/bootstrap.min.css")}}">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ asset("style/css/sb-admin.css")}}">

  <!-- Morris Charts CSS -->
  <link rel="stylesheet" href="{{ asset("style/css/plugins/morris.css")}}">

  <!-- Custom Fonts -->
  <link rel="stylesheet" type="text/css" href="{{ asset("style/font-awesome/css/font-awesome.min.css")}}">

  {{-- css untuk kuis --}}
  <link rel="stylesheet" href="{{ asset("style/css/kuis.css")}}">
  <link rel="stylesheet" href="{{ asset("style/css/dandd.css")}}">
  <link rel="stylesheet" href="{{ asset("style/css/tts.css")}}">
  <link rel="stylesheet" href="{{ asset("style/css/leaderboard.css")}}">

    <style>
        .item1 {
            background-image: url('img/orumah.jpg');
        }

        .item2 {
            background-image: url('img/pilis.png');
        }

        .item3 {
            background-image: url('img/palatar.png');
        }

        .item4 {
            background-image: url('img/lawang.png');
        }

        .item5 {
            background-image: url('img/tangga.png');
        }
    </style>

</head>
<body class="hold-transition sidebar-mini" onload="initializeScreen()">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{URL::to('/home')}}" class="nav-link">Home</a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('backend.layouts.sidebar')

    <div class="content-wrapper">
      <br>
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
        @include('backend.flash-message')

        @yield('content')
          
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    @include('backend.layouts.footer')
  </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="{{ asset("style/js/dandd.js")}}"></script>
<script src="{{ asset("style/js/tts.js")}}"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

{{-- js untuk kuis --}}
<script src="{{ asset("style/js/kuis.js")}}"></script>

<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset("style/js/plugins/morris/raphael.min.js")}}"></script>
<script src="{{ asset("style/js/plugins/morris/morris.min.js")}}"></script>
<script src="{{ asset("style/js/plugins/morris/morris-data.js")}}"></script>

<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('backend/dist/js/adminlte.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": false,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
<!-- End Datatables -->
<script>
  $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
      swal({
        title: "Are you Want to delete?",
        text: "Once Delete, This will be Permanently Delete!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
              window.location.href = link;
        } else {
          swal("Safe Data!");
        }
      });
  });
</script>

<!-- <script src="{{ asset('backend/js/toastr.min.js')}}"></script> -->
<script src="{{ asset('backend/js/sweetalert.min.js') }}"></script>

<!-- End  Sweet Alert and Toaster notifications -->


</body>
</html>
