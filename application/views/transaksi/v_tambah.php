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
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" class="form-control" id="nama" placeholder="Nama Pelanggan" name="nama">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat Pelanggan</label>
                            <textarea type="text" class="form-control" id="alamat_pelanggan" placeholder="Alamat Pelanggan" name="alamat_pelanggan"></textarea>
                            <?= form_error('alamat_pelanggan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">No Telpon</label>
                            <input type="text" class="form-control" id="nama" placeholder="08xxxx" name="no_tlp">
                            <?= form_error('no_tlp', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Keperluan</label>
                            <input type="text" class="form-control" id="keperluan" placeholder="Untuk Keperluan" name="keperluan">
                            <?= form_error('keperluan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ganti_oli">Tanggal Pemberangkatan</label>
                            <input type="date" class="form-control" id="tgl_berangkat" placeholder="Ganti Oli" name="tgl_berangkat">
                            <?= form_error('tgl_berangkat', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="ganti_ban">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                            <?= form_error('tgl_kembali', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat Pengiriman </label>
                            <textarea type="text" class="form-control" id="alamat_kirim" placeholder="Alamat Pengiriman" name="alamat_kirim"></textarea>
                            <?= form_error('alamat_kirim', '<small class="text-danger">', '</small>') ?>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Tempat Tujuan</label>
                            <textarea type="text" class="form-control" id="tujuan" placeholder="Alamat Pengiriman" name="tujuan"></textarea>
                            <?= form_error('tujuan', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jml">Total Harga</label>
                            <input type="text" class="form-control" id="total_harga" placeholder="Rp." name="total_harga">
                            <?= form_error('total_harga', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jml">Uang Muka</label>
                            <input type="text" class="form-control" id="uang_muka" placeholder="Rp." name="uang_muka">
                            <?= form_error('uang_muka', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jml">Komisi Driver</label>
                            <input type="text" class="form-control" id="komisi_driver" placeholder="Rp." name="komisi_driver">
                            <?= form_error('komisi_driver', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="jml">Komisi Kernek</label>
                            <input type="text" class="form-control" id="komisi_kernek" placeholder="Rp." name="komisi_kernek">
                            <?= form_error('komisi_kernek', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="driver">Nama Driver</label>
                            <select type="text" class="form-control" id="driver" name="driver" placeholder="Nama Driver">
                                <option value="">--Pilih--</option>
                                <?php foreach ($driver as $d) { ?>
                                    <option value="<?php echo $d['id_driver'] ?>"><?php echo $d['nama_driver'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('driver', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kernek">Nama Kernek</label>
                            <input type="text" class="form-control" id="komisi_kernek" placeholder="Nama kernek" name="kernek">
                            <?= form_error('kernek', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kendaraan">Nama Kendaraan</label>
                            <select type="text" class="form-control" id="kendaraan" name="kendaraan" placeholder="Nama Kendaraan">
                                <option value="">--Pilih--</option>
                                <?php foreach ($kendaraan as $k) { ?>
                                    <option value="<?php echo $k['id_kendaraan'] ?>"><?php echo $k['nama_kendaraan'] ?></option>
                                <?php } ?>
                            </select>
                            <?= form_error('kendaraan', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('transaksi') ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>