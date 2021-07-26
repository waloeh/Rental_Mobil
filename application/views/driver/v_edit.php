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
                        <li class="breadcrumb-item active">User</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-body" style="min-height: 480px !important;">
            <form role="form" action="<?= base_url('Driver/edit/') . $dataDriver['id_driver']; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 sm-12">
                        <div class="form-group">
                            <label for="nama">Nama User</label>
                            <input type="text" name="nama" class="form-control" value="<?= $dataDriver['nama_driver'] ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $dataDriver['alamat'] ?>">
                            <?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <select name="kelamin" id="kelamin" class="form-control" value>
                                <option value="<?= $dataDriver['jenis_kelamin'] ?>"><?= $dataDriver['jenis_kelamin'] ?></option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" value>
                                <?php
                                if ($dataDriver['status']  == 1) { ?>
                                    <option value="1">Siap</option>
                                <?php } else { ?>
                                    <option value="2">Jalan</option>
                                <?php } ?>
                                <option value="1">Siap</option>
                                <option value="0">Jalan</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col-md-6 sm-12">
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" value="<?= $dataDriver['no_hp'] ?>">
                            <?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $dataDriver['email'] ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Poto</label>
                            <input type="file" name="gambar" class="form-control" value="<?= $dataDriver['gambar'] ?>">
                            <?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="<?= base_url('driver') ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>