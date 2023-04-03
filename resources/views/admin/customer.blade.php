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
                                <h6 class="text-white text-capitalize ps-3">Tabel Pelanggan</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nama</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Alamat</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Username</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No Telepon</th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">John Hery Sinaga</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Riau</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">jhon.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812843236</span>
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
                                                        <h6 class="mb-0 text-sm">Yeni Aulia Sinaga</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Medan</p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">yeni.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812843123</span>
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
                                                        <h6 class="mb-0 text-sm">Yenshe Sinaga</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Riau</p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">yensi.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">081284754</span>
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
                                                        <h6 class="mb-0 text-sm">Obed Ortega Sinaga</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Medan</p>
                                            </td>
                                            <td class="align text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">obed.naga</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">081284397</span>
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
                                                        <h6 class="mb-0 text-sm">Yohana Septamia</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Pembangunan</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">dayoh.nbb</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0813443236</span>
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
                                                        <h6 class="mb-0 text-sm">Melia Purnamasari Sihombing</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Dr.Mansyur</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">mjpr.ciombing</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812563236</span>
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
                                                        <h6 class="mb-0 text-sm">Haechanceunah</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Korea Selatan</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">ecan.hyuck</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0823543236</span>
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
                                                        <h6 class="mb-0 text-sm">Kim Doyoung</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Seoul</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">doyie.nct</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">081283759236</span>
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
                                                        <h6 class="mb-0 text-sm">Mark Lee</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Canada</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">morkli.sm</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0843843236</span>
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
                                                        <h6 class="mb-0 text-sm">Lee Taeyong</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Kwangya</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">tae.lee</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812844536</span>
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
                                                        <h6 class="mb-0 text-sm">Jung Jaehyun</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Korea Selatan</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">jung.jae</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">08123743236</span>
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
                                                        <h6 class="mb-0 text-sm">Winwin</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">China</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">winwin.kiyowo</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812843236</span>
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
                                                        <h6 class="mb-0 text-sm">Ten Lee</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Thailand</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">ten.10</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0814843236</span>
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
                                                        <h6 class="mb-0 text-sm">Lucas</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Hongkong</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">wang.xuxi</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">08134843236</span>
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
                                                        <h6 class="mb-0 text-sm">YangYang</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">China</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Yangyang.wayv</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">08128564236</span>
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
                                                        <h6 class="mb-0 text-sm">Yuta Nakamoto</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Jepang</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">yuta.1026</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0812843436</span>
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
                                                        <h6 class="mb-0 text-sm">Zhong Chenle</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">China</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">kh1000le</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">0824843236</span>
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
                                                        <h6 class="mb-0 text-sm">Hendery</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">Korea Selatan</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">i_m_hendery</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">08124543236</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                    data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                        </tr>
@endsection('content')
