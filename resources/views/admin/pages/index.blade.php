@extends('admin.layouts.master')

@section('title')
    Admin | Pembeli
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<link rel="canonical" href="https://keenthemes.com/metronic" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="http://demo.crativa.id/backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="http://demo.crativa.id/backend/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="http://demo.crativa.id/backend/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="http://demo.crativa.id/backend/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
		<link href="/backend/assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
@endsection

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-users"></i> Pembeli </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-user"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">Tabel Pembeli
                        <span class="d-block text-muted pt-2 font-size-sm">View Database</span></h3>
</div>
</div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <table class="table table-bordered" id="example1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>No Hp</th>
                          </tr>
                        </thead>
                        <tbody>
                @foreach($pembeli as $user)
                <tr>
                  <td>{{$user->id }}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->alamat}}</td>
                  <td>{{$user->nohp}}</td>
                </tr>
                @endforeach
                </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
 
        <!--end::Container-->
    </div>
         
<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column" id="kt_footer">
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="https://www.instagram.com/haaam_93/" target="_blank" class="text-dark-75 text-hover-primary">IR Surfers Technology</a>
                    </div>
                </div>
            </div>
    <!--end::Entry-->
</div>
@endsection

@section('scripts')

<script src="http://demo.crativa.id/backend/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/backend/assets/js/datatables.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/backend/assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<script src="/backend/assets/js/pages/crud/datatables/basic/paginations.js?v=7.0.5"></script>

<script>
    $(function(){
        $('body').on('click', '.deleteProduct', function () {

            var barang_id = $(this).data("id");
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
            if (result.value) {
                $.ajax({
                method: "GET",
                url: "/admin/pembeli" + '/' + pembeli_id,
                success: function (data) {
                    location.reload();
                    table.draw();
                    swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                },
                error: function (data) {

                    swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
                });
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :',
                'error'
                )
            }
            })
            });
    });
</script>

<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
 <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  </script>
@endsection