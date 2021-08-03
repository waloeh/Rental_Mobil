<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-header">
            <form action="<?php echo base_url('laporan/') ?>" method="POST" target="_blank">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <input type="date" class="form-control mb-2" name="awal-keluar" id="awal-keluar">
                                </div>
                                <div class="col-md-1 col-sm-12 mb-2">
                                    <button type="button" class="form-control btn btn-info" id="cari-pengeluaran"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="row">
                                <a href="#" class="btn btn-primary float-left mr-1 ml-4" data-toggle="modal" data-target="#modal-pengeluaran"><i class="fa fa-plus"> Tambah</i></a>
                                <button type="submit" class="btn btn-success float-right"><i class="fa fa-print"> Cetak</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" style="min-height: 480px !important;">
            <table id="data-komisi" class="table table-sm table-bordered table-striped drag" style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center enable-border">
                        <th rowspan="2" style="vertical-align: middle;">No</th>
                        <th colspan="3">Uang Komisi</th>
                        <th rowspan="2" style="vertical-align: middle;">No. Polis</th>
                        <th rowspan="2" style="vertical-align: middle;">Tujuan</th>
                        <th rowspan="2" style="vertical-align: middle;">Opsi</th>
                    </tr>
                    <tr class="text-center enable-border">
                        <th>Driver</th>
                        <th>Kernek</th>
                        <th colspan>Uang Jalan</th>
                    </tr>
                </thead>
                <tbody id="show-data-komisi">
                    <tr>
                        <td>tes</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td>tes</td>
                        <td><i class="fa fa-times" aria-hidden="true"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>