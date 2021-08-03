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
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-header">
            <form action="<?php echo base_url('laporan/cetakJadwal') ?>" method="POST" target="_blank">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-10 col-sm-12">
                            <div class="row">
                                <div class="col-md-3 col-sm-12">
                                    <input type="date" class="form-control mb-2" name="tgl_berangkat" id="tgl_berangkat">
                                </div>
                                <div class="col-md-1 col-sm-12 mb-2">
                                    <button type="button" class="form-control btn btn-info" id="cari-jadwal"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12">
                            <button class="btn btn-success float-right" type="submit"><i class="fa fa-print"> Cetak</i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body" style="min-height: 480px !important;">
            <table id="data-jadwal" class="table table-bordered table-sm table-hover " style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>No Telpon</th>
                        <th>Tgl Berangkat</th>
                        <th>Tujuan</th>
                        <th>Jam</th>
                        <th>Surat Tugas</th>
                    </tr>
                </thead>
                <tbody id="show-data-jadwal"></tbody>
            </table>
        </div>
    </div>
</div>