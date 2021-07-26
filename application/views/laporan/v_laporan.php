<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
                    <?php echo $awal; ?>
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
            <div class="row mb-4">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <input type="text" class="form-control mb-2" name="awal" id="awal" value="tes">
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <input type="date" class="form-control" name="akhir" id="akhir">
                        </div>
                    </div>
                </div>
            </div>
            <table id="laporan-masuk" class="table table-bordered table-sm table-hover " style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Hari/Tanggal</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody id="show_laporan_masuk"></tbody>
            </table>
        </div>
    </div>
</div>