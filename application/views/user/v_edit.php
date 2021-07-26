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
            <form role="form" action="<?= base_url('User/edit/') . $dataUserById['id_user']; ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 sm-12">
                        <div class="form-group">
                            <label for="nama">Nama User</label>
                            <input type="text" name="nama" class="form-control" value="<?= $dataUserById['nama'] ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $dataUserById['alamat'] ?>">
                            <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin</label>
                            <select name="kelamin" id="kelamin" class="form-control" value>
                                <option value="<?= $dataUserById['jenis_kelamin'] ?>"><?= $dataUserById['jenis_kelamin'] ?></option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                            <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-goup">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= $dataUserById['email'] ?>">
                            <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                    <div class="col-md-6 sm-12">
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" value="<?= $dataUserById['no_hp'] ?>">
                            <?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $dataUserById['username'] ?>">
                            <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label for="pasword">Password</label>
                            <input type="password" name="password" class="form-control" value="" placeholder="**********">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Poto</label>
                            <input type="file" id="gambar" name="gambar" class="form-control" value="<?= $dataUserById['gambar'] ?>">
                            <?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
                        </div>
                    </div>
                </div>
                <div class="">
                    <a href="<?= base_url('user') ?>" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>