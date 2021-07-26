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
            <div class="box-body">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/images/users/' . $detailUser['gambar']) ?>" alt="User profile picture" style="width: 200px; max-height: 200px; overflow: auto;">
                                    </div>

                                    <h3 class="profile-username text-center"><?php echo $detailUser['username'] ?></h3>

                                    <p class="text-muted text-center"><?php echo $detailUser['alamat'] ?></p>

                                    <ul class="list-group list-group-unbordered mb-3 text-center">
                                        <li class="list-group-item">
                                            <b>Nama : </b> <b class=""><?php echo $detailUser['nama'] ?></b>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Almat : </b> <b class=""><?php echo $detailUser['alamat'] ?></b>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jenis Kelamin : </b> <b class=""><?php echo $detailUser['jenis_kelamin'] ?></b>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email : </b> <b class=""><?php echo $detailUser['email'] ?></b>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Nomor Hp : </b> <b class=""><?php echo $detailUser['no_hp'] ?></b>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div>
                                <a href="<?= base_url('user') ?>" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>