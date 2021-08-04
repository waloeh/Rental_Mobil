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
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <img src="<?php echo base_url('assets/images/kendaraan/' . $dataTransaksi['gambar']) ?>" class="product-image" alt="Product Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Poto Driver</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <img src="<?php echo base_url('assets/images/drivers/' . $dataTransaksi['gambar_driver']) ?>" class="product-image" alt="Product Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Info Transaksi</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tgl Transaksi : </th>
                                        <th><?php echo $dataTransaksi['tgl_transaksi'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>No. Pesanan : </th>
                                        <th><?php echo $dataTransaksi['id_transaksi'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Keperluan : </th>
                                        <th><?php echo $dataTransaksi['keperluan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Tempat Tujuan : </p>
                                        </th>
                                        <th><?php echo $dataTransaksi['tempat_tujuan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <p>Almat pengiriman : </p>
                                        </th>
                                        <th><?php echo $dataTransaksi['bus_dikirim'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tgl Pemberangkatan : </th>
                                        <th><?php echo $dataTransaksi['tgl_berangkat'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jam Pemberangkatan : </th>
                                        <th><?php echo $dataTransaksi['jam'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Tgl Kembali : </th>
                                        <th>Rp. <?php echo $dataTransaksi['tgl_kembali'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Harga Total : </th>
                                        <th>Rp. <?php echo $dataTransaksi['total_harga'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Uang Muka : </th>
                                        <th>Rp. <?php echo $dataTransaksi['uang_muka'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Pelunasan: </th>
                                        <th>Rp. <?php echo $dataTransaksi['pelunasan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Sisa Pembayaran : </th>
                                        <th>Rp. <?php echo $dataTransaksi['sisa_pembayaran'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Komisi Driver : </th>
                                        <th>Rp. <?php echo $dataTransaksi['komisi_driver'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Komisi Kernek : </th>
                                        <th>Rp. <?php echo $dataTransaksi['komisi_kernek'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Status Pembayaran : </th>
                                        <?php if ($dataTransaksi['status'] == 1) { ?>
                                            <th><button class="badge badge-pill badge-success"><b><?php echo $dataTransaksi['status'] ?></b></button></th>
                                        <?php } else { ?>
                                            <th><button class="badge badge-pill badge-danger"><b><?php echo $dataTransaksi['status'] ?></b></button></th>
                                        <?php } ?>
                                    </tr>

                                </thead>
                            </table>
                        </div>
                    </div>
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
                                        <th>Nama Kendaraan : </th>
                                        <th><?php echo $dataTransaksi['nama_kendaraan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Kursi : </th>
                                        <th><?php echo $dataTransaksi['sheet'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kendaraan : </th>
                                        <th><?php echo $dataTransaksi['jenis_kendaraan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>No. Polisi : </th>
                                        <th><?php echo $dataTransaksi['no_polisi'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Kendaraan : </th>
                                        <th><?php echo $dataTransaksi['jml_bus'] ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Info Driver</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Driver : </th>
                                        <th><?php echo $dataTransaksi['nama_driver'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Alamat Driver : </th>
                                        <th><?php echo $dataTransaksi['alamat_driver'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin : </th>
                                        <th><?php echo $dataTransaksi['jenis_kelamin'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>No. Telpon : </th>
                                        <th><?php echo $dataTransaksi['no_hp'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Nama kernek : </th>
                                        <th><?php echo $dataTransaksi['nama_kernek'] ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Info Pelanggan</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID Pelanggan : </th>
                                        <th><?php echo $dataTransaksi['id_pelanggan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Nama Pelanggan : </th>
                                        <th><?php echo $dataTransaksi['nama_pemesan'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Alamat Driver : </th>
                                        <th><?php echo $dataTransaksi['alamat'] ?></th>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin : </th>
                                        <th><?php echo $dataTransaksi['no_tlp'] ?></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url('transaksi') ?>" class="btn btn-sm btn-danger">Kembali</a>
        </div>
    </div>
</div>
</div>