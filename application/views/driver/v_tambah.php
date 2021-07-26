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
                        <li class="breadcrumb-item active">Driver</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2" style="min-height: 480px !important;">
        <form role="form" action="<?= base_url('driver/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Driver</label>
                    <input type="text" class="form-control" id="nama" placeholder="Nama Driver" name="nama">
                    <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea type="text" class="form-control" id="alamat" placeholder="Alamt" name="alamat"></textarea>
                    <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="kelamin">Jenis Kelamin</label>
                    <select type="text" class="form-control" id="kelamin" placeholder="Jenis Kelamin" name="kelamin">
                        <option value="" selected>--Pilih--</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="hp">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="anda@namadomain" name="email">
                    <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="hp">No Handphone</label>
                    <input type="text" class="form-control" id="hp" placeholder="+62xxxxxxx" name="hp">
                    <?= form_error('hp', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="gambar">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            <?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('Driver') ?>" class="btn btn-danger">Batal</a>
            </div>
        </form>
    </div>
</div>