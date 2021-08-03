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
        <div class="card-header">
            <a href="<?php echo base_url('User/tambah') ?>" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-user"><i class="fa fa-plus mr-2"></i>Tambah</a>
            <button onclick="window.location.reload()" class="btn btn-file text-gray float-right" type="button" data-dismis="modal">
                <i class="fa fa-sync-alt"></i>
            </button>
        </div>
        <div class="flash-data-user" data-flash="<?php echo $this->session->flashdata('flash') ?>"></div>
        <div class="card-body" style="min-height: 480px !important;">
            <table id="data-user" class="table table-bordered table-sm table-hover " style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Hp</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody id="show_data_user"></tbody>
            </table>
            <!-- <div id="transaction-body"></div> -->
        </div>
        <!-- <div class="card-footer" style="display: block;">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <span class="" id="info"></span>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 float-right">
                <div class="">
                    <div class="float-right">
                        <span id="page"></span>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>
<!-- tambah -->
<div class="modal fade" id="modal-user">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Tambah User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" action="<?= base_url('User/tambah') ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama User</label>
                        <input type="text" name="nama" class="form-control" required>
                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required>
                        <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <select name="kelamin" id="kelamin" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <?= form_error('kelamin', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-goup">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" required>
                        <?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="pasword">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password2">Ulang Password</label>
                        <input type="password" name="password2" id="password2" class="form-control" required>
                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Poto</label>
                        <input type="file" id="gambar" name="gambar" class="form-control" required>
                        <?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>