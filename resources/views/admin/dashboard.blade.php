@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ms-2 font-weight-bolder">Dashboard</h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Pemasukan (Bulanan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 400.000.000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pemasukan (Mingguan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">Rp 115.000.000</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Stok Produk
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 ms-2 font-weight-bold text-gray-800">2.434.346 Produk</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pelanggan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-18 col-xl-25 mb-5  ">

                <!-- Project Card Example -->
                <div class="card shadow mb-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Produk Terjual</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Sepatu <span class="float-right">45%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 45%" aria-valuenow="45"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Sendal <span class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Pakaian <span class="float-right">65%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Aksesoris <span class="float-right">15%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
@endsection('content')
