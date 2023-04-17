@extends('admin.layouts.app')

@push('plugin-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
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
                            <li class="breadcrumb-item"><a href="{{ route('slide.index') }}">Slide</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
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
                        <h4 class="card-title text-right">Form Tambah Slide</h4>
                    </div>
                    <form action="{{ route('slide.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data"> @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control  @error('judul') is-invalid @enderror" placeholder="Masukkan judul" value="{{ old('judul') }}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label">Deskripsi</label>
                                <input type="text" name="description" class="form-control  @error('description') is-invalid @enderror" placeholder="Masukkan description" value="{{ old('description') }}">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label class="form-label">Gambar</label>
                                <input type="file" name="image" class="dropify @error('image') is-invalid @enderror" data-max-file-size-preview="3M" required />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-secondary bg-gradient wafes-effect waves-light"> Simpan Data</button>
                                <a  href="{{ route('slide.index') }}" class="btn btn-light bg-gradient wafes-effect waves-light">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
    </div>
@endsection

@push('plugin-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
@endpush

@push('custom-js')
    <script>
        $('.dropify').dropify({
            messages: {
                'default': '',
                'replace': 'Drag and drop or click to replace',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });
    </script>
@endpush