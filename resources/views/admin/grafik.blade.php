@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Grafik Penjualan</h1>
        <p class="mb-4">Penjualan produk yang ditunjukkan grafik tersebut memang tidak menunjukkan kenaikan
            dan penurunan yang stabil dari toko Daily Outfit selama tahun 2022.<a target="_blank"
                href="https://www.chartjs.org/docs/latest/"></a></p>

        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-25 col-lg-20">

                <!-- Area Chart -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Grafik</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Daily Outfit 2023</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
@endsection('content')
