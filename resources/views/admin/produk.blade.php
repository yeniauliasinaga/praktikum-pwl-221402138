@extends('admin.layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 ms-2 font-weight-bolder">Data Pesanan</h1>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Gambar</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama
                                produk</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Tanggal</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Harga Jual</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">1</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pakaian5.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Guccy Dress</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Dikemas</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">27-12-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.3.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                    data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">2</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sepatu</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/sepatu1.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Nike Air Force</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Dikirim</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">24-12-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.7.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                    data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">3</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sendal</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/sendal10.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Flippers Guccy</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Dikirim</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">23-12-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.5.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                    data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">4</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pakaian8.png" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Rok Plisket</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">12-12-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.100.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">5</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pakaian1.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Cardigan</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">02-12-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.150.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">6</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sepatu</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pesanan1.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">High Heels Gold</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">12-11-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.90.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">7</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sepatu</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pesanan2.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">High Heels Cute</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">04-10-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.71.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">8</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sepatu</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/pesanan3.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Flat Shoes Burberry</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">30-09-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.17.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">9</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/dior1.png" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Dior Outfit Set</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">13-09-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.173.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">10</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Aksesoris</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/celine1.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Celine Hair Accecoris</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">01-09-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.73.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">11</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/rokdior.png" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Rok Guccy</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">08-08-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.103.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">12</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sendal</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/sendalguccy.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Guccy</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">11-07-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.22.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">13</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/setdior.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Dior One set</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">31-06-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.70.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">14</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Pakaian</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/guccy1.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Guccy Dress</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">10-05-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.33.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">15</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sepatu</h6>
                                    </div>
                                </div>
                            </td>
                            <td><img src="../img/guccy2.jpg" class="img-fluid" style="width:80px;"></td>
                            <p class="text-xs font-weight-bold mb-0"></p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <span class="badge badge-sm bg-gradient-success">Guccy Shoes</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Selesai</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">21-04-2022</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">Rp.733.000.000,-</span>
                            </td>
                            <td class="align-middle">
                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                    data-toggle="tooltip" data-original-title="Edit user">
                                    Edit
                                </a>
                            </td>
                        </tr>
            </div>
            <!-- /.container-fluid -->
@endsection('content')
