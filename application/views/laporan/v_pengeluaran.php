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
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="flash-data-pengeluaran" data-flash="<?php echo $this->session->flashdata('flash'); ?>"></div>
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-header">
            <form action="<?php echo base_url('laporan/cetakPengeluaran') ?>" method="POST" target="_blank">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <input type="date" class="form-control mb-2" name="awal-keluar" id="awal-keluar">
                                </div>
                                <div class="col-md-3 col-sm-12 mb-2">
                                    <input type="date" class="form-control" name="akhir-keluar" id="akhir-keluar">
                                </div>
                                <div class="col-md-1 col-sm-12 mb-2">
                                    <button type="button" class="form-control btn btn-info" id="cari-pengeluaran"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="row">
                                <a href="#" class="btn btn-primary float-left mr-1 ml-4" data-toggle="modal" data-target="#modal-pengeluaran"><i class="fa fa-plus"> Tambah</i></a>
                                <button type="submit" class="btn btn-success float-right"><i class="fa fa-print"> Cetak</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" style="min-height: 480px !important;">

            <table id="data-pengeluaran" class="table table-bordered table-sm table-hover " style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Deskripsi</th>
                        <th>Nominal</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody id="show-data-pengeluaran"></tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Pegeluaran Tambah -->
<div class="modal fade" id="modal-pengeluaran">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" action="<?= base_url('Laporan/tambahPengeluaran') ?>" method="POST">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Tambah Pengluaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="deskripai">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="text" name="nominal" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal Edit -->
<div class="modal fade" id="modal-pengeluaran-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form role="form" action="<?= base_url('Laporan/editPengeluaran') ?>" method="POST">
                <div class="modal-header bg-warning">
                    <h4 class="modal-title">Edit Pengluaran</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="deskripai">Deskripsi</label>
                        <input type="hidden" name="id" id="id" class="form-control">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="text" name="nominal" id="nominal" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>