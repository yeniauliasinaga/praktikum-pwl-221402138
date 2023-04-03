@extends('admin/layout')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Tabel Tanggapan</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-semi-bold  opacity-7">
                                                Nama Produk</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Tanggapan</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Username</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Rating</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Nike sneakers</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    Sangat bagus sepatu kets ini cocok di pakai dimana mana mantap luar
                                                    biasa 👍👍👍
                                                </p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">jhon.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">5</span>
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
                                                        <h6 class="mb-0 text-sm">Dress hermes</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    Cantik banget, pengiriman nya cepat, kualitas lumayan, meskipun harganya
                                                    murah
                                                </p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">yeni.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">4</span>
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
                                                        <h6 class="mb-0 text-sm">Mini Dress Dior</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    Pesanan lengkap dan suka dengan midi dressnya
                                                </p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">yensi.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">4</span>
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
                                                        <h6 class="mb-0 text-sm">Sendal Celine</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">
                                                    Sandal nya cute n bagus bgtt, nyaman saat dipakai bahan jelly, empuk,
                                                    packing rapi pengiriman juga cpt, <br>
                                                    sesuai pesanan next bakal order lagi di toko ini terima kasih seller
                                                    semoga sllu amanah
                                                </p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">obed.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">5</span>
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
                                                            <h6 class="mb-0 text-sm">Mini Dress Dior</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Pesanan lengkap dan suka dengan midi dressnya
                                                    </p>
                                                </td>
                                                <td class="align text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">yensi.naga</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">4</span>
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
                                                            <h6 class="mb-0 text-sm">Guccy</h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        Sendalnya realpic baguus,bahannya karet ringan pas d pake trz empuk lgi sesuai ekspektasiku 😍 <br> 
                                                        cocok buat sehari-hari,ngga kn lecet klo d pake jalan 🤭 Next buat yg pengen bli sendal ini,<br>
                                                        aku saranin lebihin 1 size dri biasa yg d pake.Seller ramah,pengiriman alhamdulillah cepet 😘👍 Terimakasih 🙏🌹
                                                    </p>
                                                </td>
                                                <td class="align text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">dayoh.nbb</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">5</span>
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
                                                                <h6 class="mb-0 text-sm">Dior One Set</h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <p class="text-xs font-weight-bold mb-0">
                                                            Kain celananya agak tipis, baju nya kayak bahan jas hujan
                                                        </p>
                                                    </td>
                                                    <td class="align text-center text-sm">
                                                        <span class="badge badge-sm bg-gradient-success">melia.ciombing</span>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">3</span>
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
                                                                    <h6 class="mb-0 text-sm">Flat Shoes Burberry </h6>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="text-xs font-weight-bold mb-0">
                                                                Sedikit Kecewa dengan packing nya yang kurang<br>
                                                                mengcover barang dengan baik sehingga barang ada lecet
                                                            </p>
                                                        </td>
                                                        <td class="align text-center text-sm">
                                                            <span class="badge badge-sm bg-gradient-success">ecan.hyuck</span>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span class="text-secondary text-xs font-weight-bold">3</span>
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
                                                                        <h6 class="mb-0 text-sm">Guccy Dress</h6>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <p class="text-xs font-weight-bold mb-0">
                                                                    Kain celananya agak tipis, baju nya kayak bahan jas hujan <br>
                                                                    tidak sesuai dengan ada yang di deskripsi
                                                                </p>
                                                            </td>
                                                            <td class="align text-center text-sm">
                                                                <span class="badge badge-sm bg-gradient-success">mjpr.ciombing</span>
                                                            </td>
                                                            <td class="align-middle text-center">
                                                                <span class="text-secondary text-xs font-weight-bold">2</span>
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
                                                                            <h6 class="mb-0 text-sm">Guccy Shoes</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p class="text-xs font-weight-bold mb-0">
                                                                        Terlalu Mahal Untuk gue yang miskin, not reccomended
                                                                    </p>
                                                                </td>
                                                                <td class="align text-center text-sm">
                                                                    <span class="badge badge-sm bg-gradient-success">wang.xuxi</span>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span class="text-secondary text-xs font-weight-bold">1</span>
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
                                                                                <h6 class="mb-0 text-sm">High Heels Gold</h6>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="text-xs font-weight-bold mb-0">
                                                                            Warna nya cantik banget dan nyaman dipakai
                                                                        </p>
                                                                    </td>
                                                                    <td class="align text-center text-sm">
                                                                        <span class="badge badge-sm bg-gradient-success">ten.10</span>
                                                                    </td>
                                                                    <td class="align-middle text-center">
                                                                        <span class="text-secondary text-xs font-weight-bold">5</span>
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
                                                                                    <h6 class="mb-0 text-sm">Cardigan</h6>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="text-xs font-weight-bold mb-0">
                                                                                Warna nya cantik banget dan cuma bahan nya rada tipis
                                                                            </p>
                                                                        </td>
                                                                        <td class="align text-center text-sm">
                                                                            <span class="badge badge-sm bg-gradient-success">yuta.1026</span>
                                                                        </td>
                                                                        <td class="align-middle text-center">
                                                                            <span class="text-secondary text-xs font-weight-bold">3</span>
                                                                        </td>
                                                                        <td class="align-middle">
                                                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                                                data-toggle="tooltip" data-original-title="Edit user">
                                                                                Edit
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                    @endsection('content')
