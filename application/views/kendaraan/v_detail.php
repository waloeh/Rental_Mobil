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
    <div class="card card-primary card-outline ml-2 mr-2" style="min-height: 480px !important;">
        <!-- Default box -->
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="col-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Poto Kendaraan</h3>
                            </div>
                            <img src="<?php echo base_url('assets/images/kendaraan/' . $dataKendaraan['gambar']) ?>" class="product-image" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Info Kendaraan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama : </th>
                                        <th><?php echo $dataKendaraan['nama_kendaraan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis : </th>
                                        <th><?php echo $dataKendaraan['jenis_kendaraan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>No. Polisi : </th>
                                        <th><?php echo $dataKendaraan['no_polisi'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jumlah sheet : </th>
                                        <th><?php echo $dataKendaraan['sheet'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tahun Pembuatan : </th>
                                        <th><?php echo $dataKendaraan['tahun_pembuatan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pajak : </th>
                                        <th><?php echo $dataKendaraan['tgl_bayar_pajak'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Harga Sewa/Hari : </th>
                                        <th>Rp. <?php echo $dataKendaraan['harga_sewa'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Status : </th>
                                        <?php if ($dataKendaraan['status_kendaraan'] == "siap") { ?>
                                            <th><button class="badge badge-pill badge-success"><b><?php echo $dataKendaraan['status_kendaraan'] ?></b></button></th>
                                        <?php } else if ($dataKendaraan['status_kendaraan'] == "jalan") { ?>
                                            <th><button class="badge badge-pill badge-warning "><b><?php echo $dataKendaraan['status_kendaraan'] ?></b></button></th>
                                        <?php } else { ?>
                                            <th><button class="badge badge-pill badge-danger"><b><?php echo $dataKendaraan['status_kendaraan'] ?></b></button></th>
                                        <?php } ?>

                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Service</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Jadwal service : </th>
                                        <th><?php echo $dataKendaraan['tgl_service'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jadwal Ganti Oli : </th>
                                        <th><?php echo $dataKendaraan['tgl_ganti_oli'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jadwal Ganti Ban : </th>
                                        <th><?php echo $dataKendaraan['tgl_ganti_ban'] ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('kendaraan') ?>" class="btn btn-sm btn-danger">Kembali</a>
        </div>
    </div>
</div>
</div>