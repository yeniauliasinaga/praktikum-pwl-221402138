@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Grafik Tanggapan</h1>
        <p class="mb-4">Penilaian produk yang ditunjukkan grafik tersebut menunjukkan bahwa Pelanggan
            puas akan produk dari toko Daily Outfit selama tahun 2022.<a target="_blank"
                href="https://www.chartjs.org/docs/latest/"></a></p>

        <!-- Content Row -->
        <div class="row">

            <div class="col-xl-100 col-lg-80">

                <!-- Donut Chart -->
                <div class="col-xl-50 col-lg-35">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Rating Chart</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <hr>
                            5 : Biru <br> 4 : Hijau <br> 3 : Biru Muda
                            <br> 2 : Kuning <br> 1 : Merah
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Daily Outfit 2020</span>
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
