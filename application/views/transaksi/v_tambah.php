<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?> </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2" style="min-height: 480px !important;">
        <form role="form" action="<?= base_url('transaksi/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" style="color: red;">ID Pelanggan</label>
                            <input type="text" class="form-control" id="id_pelanggan" placeholder="Isi Jika Punya" name="id_pelanggan" value="<?php echo set_value('id_pelanggan'); ?>">
                            <?= form_error('id_pelanggan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Pelanggan" name="nama" value="<?php echo set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat_pelanggan">Alamat Pelanggan</label>
                            <textarea type="text" class="form-control" id="alamat_pelanggan" placeholder="Alamat Pelanggan" name="alamat_pelanggan" value="<?php echo set_value('alamat_pelanggan'); ?>"></textarea>
                            <?= form_error('alamat_pelanggan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="no_tlp">No Telpon</label>
                            <input type="text" class="form-control" id="no_tlp" placeholder="08xxxx" name="no_tlp" value="<?php echo set_value('no_tlp'); ?>">
                            <?= form_error('no_tlp', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="keperluan">Keperluan</label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Untuk Keperluan" name="keperluan" value="<?php echo set_value('keperluan'); ?>">
                            <?= form_error('keperluan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jml_bus">Jumlah Unit</label>
                            <input type="number" class="form-control" id="jml_bus" placeholder="0" name="jml_bus" value="<?php echo set_value('jml_bus'); ?>">
                            <?= form_error('jml_bus', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_berangkat">Tanggal Pemberangkatan</label>
                            <input type="date" class="form-control" id="tgl_berangkat" name="tgl_berangkat" value="<?php echo set_value('tgl_berangkat'); ?>">
                            <?= form_error('tgl_berangkat', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam Pemberangkatan</label>
                            <input type="time" class="form-control" id="jam" name="jam" value="<?php echo set_value('jam'); ?>">
                            <?= form_error('jam', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?php echo set_value('tgl_kembali'); ?>">
                            <?= form_error('tgl_kembali', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tujuan">Tempat Tujuan</label>
                            <textarea type="text" class="form-control" id="tujuan" placeholder="TempatTujuan" name="tujuan" value="<?php echo set_value('tujuan'); ?>"></textarea>
                            <?= form_error('tujuan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" placeholder="Rp." name="total_harga" value="<?php echo set_value('total_harga'); ?>">
                            <?= form_error('total_harga', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="uang_muka">Uang Muka</label>
                            <input type="text" class="form-control" id="uang_muka" placeholder="Rp." name="uang_muka" value="<?php echo set_value('uang_muka'); ?>">
                            <?= form_error('uang_muka', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <!-- <div class="form-group">
                            <label for="komisi_driver">Komisi Driver</label>
                            <input type="text" class="form-control" id="komisi_driver" placeholder="Rp." name="komisi_driver" value="<?php echo set_value('komisi_driver'); ?>">
                            <?= form_error('komisi_driver', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="komisi_kernek">Komisi Kernek</label>
                            <input type="text" class="form-control" id="komisi_kernek" placeholder="Rp." name="komisi_kernek" value="<?php echo set_value('komisi_kernek'); ?>">
                            <?= form_error('komisi_kernek', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="uang_jalan">Uang Jalan</label>
                            <input type="text" class="form-control" id="uang_jalan" placeholder="Uang jalan" name="uang_jalan" value="<?php echo set_value('uang_jalan'); ?>">
                            <?= form_error('uang_jalan', '<small class="text-danger">', '</small>') ?>
                        </div> -->
                        <div class="form-group">
                            <label for="driver">Nama Driver</label>
                            <select type="text" class="form-control" id="driver" name="driver" placeholder="Nama Driver" value="<?php echo set_value('driver'); ?>">
                                <option value="">--Pilih--</option>
                                <?php foreach ($driver as $d) { ?>
                                    <option value="<?php echo $d['id_driver'] ?>"><?php echo $d['nama_driver'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('driver', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kernek">Nama Kernek</label>
                            <select type="text" class="form-control" id="kernek" name="kernek" placeholder="Nama kernek" value="<?php echo set_value('kernek'); ?>">
                                <option value="">--Pilih--</option>
                                <?php foreach ($kernek as $d) { ?>
                                    <option value="<?php echo $d['id_kernek'] ?>"><?php echo $d['nama_kernek'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('kernek', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan">Kendaraan / No. Polisi</label>
                            <select type="text" class="form-control" id="kendaraan" name="kendaraan" placeholder="Nama Kendaraan" value="<?php echo set_value('kendaraan'); ?>">
                                <option value="">--Pilih--</option>
                                <?php foreach ($kendaraan as $k) { ?>
                                    <option value="<?php echo $k['id_kendaraan'] ?>"><?php echo $k['no_polisi'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('kendaraan', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="alamat_kirim">Alamat Pengiriman </label>
                            <textarea type="text" class="form-control" id="alamat_kirim" placeholder="Alamat Pengiriman" name="alamat_kirim" value="<?php echo set_value('alamat_kirim'); ?>"></textarea>
                            <?= form_error('alamat_kirim', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('transaksi') ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>