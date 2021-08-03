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
                        <li class="breadcrumb-item active">Kendaraan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-header">
            <a href="<?php echo base_url('Kendaraan/tambah') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-2"></i>Tambah</a>
            <button onclick="window.location.reload()" class="btn btn-file text-gray float-right" type="button" data-dismis="modal">
                <i class="fa fa-sync-alt"></i>
            </button>
        </div>
        <div class="flash-data-kendaraan" data-flash="<?php echo $this->session->flashdata('flash') ?>"></div>
        <div class="card-body" style="min-height: 480px !important;">
            <table id="data-kendaraan" class="table table-bordered table-sm table-hover table-responsive">
                <thead>
                    <tr class=" text-center">
                        <th>No</th>
                        <th style="width: 80px;">Nama</th>
                        <th>Jenis</th>
                        <th>Status</th>
                        <th>No. Polisi</th>
                        <th>Harga Sewa</th>
                        <th>Tahun Buat</th>
                        <th>Tgl Pajak</th>
                        <th>Ganti Oli</th>
                        <th>Tgl Service</th>
                        <th>Ganti Ban</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody id="show-data-kendaraan"></tbody>
            </table>
        </div>
    </div>
</div>