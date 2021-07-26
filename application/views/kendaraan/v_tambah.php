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
        <form role="form" action="<?= base_url('kendaraan/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Kendaraan</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Kendaraan" name="nama">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Kendaraan</label>
                            <select type="text" class="form-control" id="jenis" placeholder="Alamt" name="jenis">
                                <option value="" selected>--Pilih--</option>
                                <option value="bus">Bus</option>
                                <option value="mini bus">Mini Bus</option>
                                <option value="sedan">Sedan</option>
                                <option value="truk">Truk</option>
                            </select>
                            <?= form_error('jenis', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="no_polisi">No Polisi</label>
                            <input type="text" class="form-control" id="no_polisi" placeholder="No Polisi" name="no_polisi">
                            <?= form_error('no_polisi', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="harga_sewa">Harga Sewa / Hari</label>
                            <input type="text" class="form-control" id="harga_sewa" placeholder="Harga Sewa" name="harga_sewa">
                            <?= form_error('harga_sewa', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun_pembuatan">Tahun Pembuatan</label>
                            <input type="date" class="form-control" id="tahun_pembuatan" placeholder="Tahun Pembuatan" name="tahun_pembuatan">
                            <?= form_error('tahun_pembuatan', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ganti_oli">Tanggal Ganti Oli</label>
                            <input type="date" class="form-control" id="ganti_oli" placeholder="Ganti Oli" name="ganti_oli">
                            <?= form_error('ganti_oli', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ganti_ban">Tanggal Ganti Ban</label>
                            <input type="date" class="form-control" id="ganti_ban" placeholder="Ganti Ban" name="ganti_ban">
                            <?= form_error('ganti_ban', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_service">Tanggal Service</label>
                            <input type="date" class="form-control" id="tanggal_service" placeholder="Tanggal Service" name="tanggal_service">
                            <?= form_error('tanggal_service', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="pajak">Tanggal Bayar Pajak</label>
                            <input type="date" class="form-control" id="pajak" placeholder="Tanggal Pajak" name="pajak">
                            <?= form_error('pajak', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="poto">Poto</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                    <?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Kendaraan') ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>