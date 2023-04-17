@extends('admin.layouts.app')

@push('plugin-css')
     <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
     <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
     <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
@endpush

@section('content')
    <div class="container-fluid">
         <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Slide</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Slide</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->      

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title text-right">Daftar Slide</h4>
                        <a href="{{ route('slide.create') }}"  class="btn btn-secondary bg-gradient waves-effect waves-light">Tambah Data</a>
                    </div>
                    <div class="card-body">
                       <div class="table-responsive">
                            <table class="table table-hover table-striped datatable">
                                <thead>
                                    <th>No</th>
                                    <th>Image</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </thead>
                            </table>
                       </div>
                    </div>
                </div>
            </div>
        </div>
  
    </div>
@endsection

@push('plugin-js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
@endpush

@push('custom-js')
    <script>
        $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            info: true,
            filter: true,
            ajax:  {
                url : "{{ route('slide.index') }}",
            },
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {
                    data: 'slide', 
                    name: 'slide',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'slide_heading',
                    name: 'slide_heading',
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            language: {
                search: "Cari Nama Slide:"
            }
        });
    </script>
@endpush