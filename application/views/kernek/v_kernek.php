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
                        <li class="breadcrumb-item active">Kernek</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-primary card-outline ml-2 mr-2">
        <div class="card-header">
            <a href="<?php echo base_url('Kernek/tambah') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-2"></i>Tambah</a>
            <button onclick="window.location.reload()" class="btn btn-file text-gray float-right" type="button" data-dismis="modal">
                <i class="fa fa-sync-alt"></i>
            </button>
        </div>
        <div class="flash-data-kernek" data-flash="<?php echo $this->session->flashdata('flash') ?>"></div>
        <div class="card-body" style="min-height: 480px !important;">
            <table id="data-kernek" class="table table-bordered table-sm table-hover" style="width: 100%; margin-top: 0 !important;">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>J. Kelamin</th>
                        <th>Nomor Hp</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody id="show-data-kernek"></tbody>
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