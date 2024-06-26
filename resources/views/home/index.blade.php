@extends('layouts.app', ['title' => 'Admin'])
@section('content')
    <!-- Content Row -->
    @if (Auth::user()->level == 'admin')
    <div class="row">
        <!-- Kelas Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Kelas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kelas->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-house fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Siswa Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswa->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galeri Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Galeri
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $galeri->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-images fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Post Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Post</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $posts->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Content Row -->

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Welcome</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
