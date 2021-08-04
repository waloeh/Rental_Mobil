
$(document).ready(function () {
    dataKendaraan()
    function dataKendaraan() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Kendaraan/getDataKendaraan',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Kendaraan/';
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].nama_kendaraan + '</td>' +
                        '<td>' + response.data[i].jenis_kendaraan + '</td>' +
                        '<td class="text-center"><button class="badge badge-pill badge-success">' + response.data[i].status_kendaraan + '</button></td>' +
                        '<td>' + response.data[i].no_polisi + '</td>' +
                        '<td>' + response.data[i].harga_sewa + '</td>' +
                        '<td>' + response.data[i].tahun_pembuatan + '</td>' +
                        '<td>' + response.data[i].tgl_bayar_pajak + '</td>' +
                        '<td>' + response.data[i].tgl_ganti_oli + '</td>' +
                        '<td>' + response.data[i].tgl_service + '</td>' +
                        '<td>' + response.data[i].tgl_ganti_ban + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Edit/' + response.data[i].id_kendaraan + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_kendaraan + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_kendaraan + '" class="tombol-hapus-kendaraan"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>' +
                        '</tr>';
                }
                $('#show-data-kendaraan').html(html);
            }
        })
    }

    dataDriver()
    function dataDriver() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Driver/getDataDriverAll',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let status;
                let URL = 'http://localhost/Rental_mobil/Driver/';
                for (i = 0; i < response.data.length; i++) {
                    if (response.data[i].status_driver == 1) {
                        status = 'Siap';
                    } else {
                        status = 'Jalan';
                    }
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].nama_driver + '</td>' +
                        '<td>' + response.data[i].alamat_driver + '</td>' +
                        '<td>' + response.data[i].jenis_kelamin + '</td>' +
                        '<td>' + response.data[i].no_hp + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Edit/' + response.data[i].id_driver + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_driver + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_driver + '" class="tombol-hapus-driver"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>' +
                        '<tr>';
                }
                $('#show-data-driver').html(html)
            }
        })
    }

    kernek()
    function kernek(){
        $.ajax({
            url: 'http://localhost/Rental_mobil/kernek/getDataKernekAll',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let status;
                let URL = 'http://localhost/Rental_mobil/Kernek/';
                for (i = 0; i < response.data.length; i++) {
                    if (response.data[i].status_driver == 1) {
                        status = 'Siap';
                    } else {
                        status = 'Jalan';
                    }
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].nama_kernek + '</td>' +
                        '<td>' + response.data[i].alamat_kernek + '</td>' +
                        '<td>' + response.data[i].jenkel_kernek + '</td>' +
                        '<td>' + response.data[i].tlp_kernek + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Edit/' + response.data[i].id_kernek + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_kernek + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_kernek + '" class="tombol-hapus-kernek"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>' +
                        '<tr>';
                }
                $('#show-data-kernek').html(html)
            }
        })
    }

    dataUser()
    function dataUser() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/User/getDataUserAll',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data[0].email)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/User/';
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].nama + '</td>' +
                        '<td>' + response.data[i].jenis_kelamin + '</td>' +
                        '<td>' + response.data[i].no_hp + '</td>' +
                        '<td>' + response.data[i].email + '</td>' +
                        '<td class="text-center"> <a href="' + URL + 'Edit/' + response.data[i].id_user + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_user + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_user + '" class="tombol-hapus-user"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show_data_user').html(html);
            }
        });
    }

    dataTransaksi()
    function dataTransaksi() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Transaksi/getDataTransaksiAll',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Transaksi/';
                for (i = 0; i < response.data.length; i++) {
                    let status;
                    if (response.data[i].status == 1) { status = '<button class="badge badge-pill badge-success">Lunas</button>' } else { status = '<button class="badge badge-pill badge-danger">Nunggak</button>' }
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].id_pelanggan + '</td>' +
                        '<td>' + response.data[i].id_transaksi + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tgl_kembali + '</td>' +
                        '<td>' + response.data[i].keperluan + '</td>' +
                        '<td>' + response.data[i].total_harga + '</td>' +
                        '<td>' + response.data[i].uang_muka + '</td>' +
                        '<td>' + response.data[i].sisa_pembayaran + '</td>' +
                        '<td class="text-center">' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetak/' + response.data[i].id_transaksi + '" target="_blank"><button type="button" class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-print"></i></button></a>' + '<a href="' + URL + 'Edit/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>' + '<a href="' + URL + 'Detail/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_transaksi + '" class="tombol-hapus-transaksi"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-transaksi').html(html);
            }
        })
    }

    $('#transaksi-lunas').click(function () {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Transaksi/getDataTransaksiLunas',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Transaksi/';
                for (i = 0; i < response.data.length; i++) {
                    let status;
                    if (response.data[i].status == 1) { status = '<button class="badge badge-pill badge-success">Lunas</button>' } else { status = '<button class="badge badge-pill badge-danger">Nunggak</button>' }
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].id_pelanggan + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_transaksi + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tgl_kembali + '</td>' +
                        '<td>' + response.data[i].keperluan + '</td>' +
                        '<td>' + response.data[i].total_harga + '</td>' +
                        '<td>' + response.data[i].uang_muka + '</td>' +
                        '<td>' + response.data[i].sisa_pembayaran + '</td>' +
                        '<td class="text-center">' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetak/' + response.data[i].id_transaksi + '" target="_blank"><button type="button" class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-print"></i></button></a>' + '<a href="' + URL + 'Edit/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>' + '<a href="' + URL + 'Detail/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_transaksi + '" class="tombol-hapus"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-transaksi').html(html);
            }
        })
    })

    $('#transaksi-belum-lunas').click(function () {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Transaksi/getDataTransaksiBelumLunas',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Transaksi/';
                for (i = 0; i < response.data.length; i++) {
                    let status;
                    if (response.data[i].status == 1) { status = '<button class="badge badge-pill badge-success">Lunas</button>' } else { status = '<button class="badge badge-pill badge-danger">Nunggak</button>' }
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].id_pelanggan + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_transaksi + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tgl_kembali + '</td>' +
                        '<td>' + response.data[i].keperluan + '</td>' +
                        '<td>' + response.data[i].total_harga + '</td>' +
                        '<td>' + response.data[i].uang_muka + '</td>' +
                        '<td>' + response.data[i].sisa_pembayaran + '</td>' +
                        '<td class="text-center">' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetak/' + response.data[i].id_transaksi + '" target="_blank"><button type="button" class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-print"></i></button></a>' + '<a href="' + URL + 'Edit/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a>' + '<a href="' + URL + 'Detail/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-eye"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_transaksi + '" class="tombol-hapus"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-transaksi').html(html);
            }
        })
    })

    $('#transaksi-semua').click(function () {
        dataTransaksi()
    })

    dataLaporanMasuk()
    function dataLaporanMasuk() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataPemasukan',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].id_pelanggan + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tempat_tujuan + '</td>' +
                        '<td>' + response.data[i].uang_muka + '</td>' +
                        '<td>' + response.data[i].pelunasan + '</td>' +
                        + '</tr>';
                }
                $('#show-data-pemasukan').html(html);
            }
        })
    }

    $('#cari-pemasukan').click(function () {
        let awal = $('#awal').val()
        let akhir = $('#akhir').val()
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataPemasukan/' + awal + '/' + akhir,
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].id_pelanggan + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tempat_tujuan + '</td>' +
                        '<td>' + response.data[i].uang_muka + '</td>' +
                        '<td>' + response.data[i].pelunasan + '</td>' +
                        + '</tr>';
                }
                $('#show-data-pemasukan').html(html);
            }
        })

    })

    dataLaporanKeluar()
    function dataLaporanKeluar() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataPengeluaran',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Laporan/'
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].keterangan + '</td>' +
                        '<td>' + response.data[i].nominal + '</td>' +
                        '<td class="text-center"><button data-id="' + response.data[i].id_pengeluaran + '" data-toggle="modal" data-target="#modal-pengeluaran-edit" type="button" class="mr-1 btn btn-sm btn-primary tombolEditPengeluaran" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>' + '<a href="' + URL + 'Hapus/' + response.data[i].id_pengeluaran + '" class="tombol-hapus-pengeluaran"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-pengeluaran').html(html);
            }
        })
    }

    $('#cari-pengeluaran').click(function () {
        let awal = $('#awal-keluar').val()
        let akhir = $('#akhir-keluar').val()
        console.log(awal + akhir)
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataPengeluaran/' + awal + '/' + akhir,
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Laporan/'
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].keterangan + '</td>' +
                        '<td>' + response.data[i].nominal + '</td>' +
                        '<td class="text-center"><button data-id="' + response.data[i].id_pengeluaran + '" data-toggle="modal" data-target="#modal-pengeluaran-edit" type="button" class="mr-1 btn btn-sm btn-primary tombolEditPengeluaran" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>' + '<a href="' + URL + 'Hapus/' + response.data[i].id_pengeluaran + '" class="tombol-hapus-pengeluaran-byTanggal"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-pengeluaran').html(html);
            }
        })
    })

    $('.tombolEditPengeluaran').click(function () {
        let id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/dataPengeluranById/' + id,
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                $('#deskripsi').val(response.data['keterangan'])
                $('#nominal').val(response.data['nominal'])
                $('#id').val(response.data['id_pengeluaran'])
            }
        })
    })

    jadwal()
    function jadwal() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataJadwal',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let URL = 'http://localhost/Rental_mobil/Laporan/';
                let no = 0;
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].no_tlp + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tempat_tujuan + '</td>' +
                        '<td>' + response.data[i].jam + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetaksurattugas/' + response.data[i].id_transaksi + '" target="_blank"><button style="width:60px;" type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-download"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-jadwal').html(html);
            }
        })
    }

    $('#cari-jadwal').click(function () {
        let tgl = $('#tgl_berangkat').val();
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataJadwalById/' + tgl,
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let no = 0;
                let URL = 'http://localhost/Rental_mobil/Laporan/';
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].no_tlp + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tempat_tujuan + '</td>' +
                        '<td>' + response.data[i].jam + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetaksurattugas/' + response.data[i].id_transaksi + '" target="_blank"><button style="width:60px;" type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-download"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-jadwal').html(html);
            }
        })
    })

    komisi();
    function komisi() {
        $.ajax({
            url: 'http://localhost/Rental_mobil/Laporan/getDataKomisi',
            async: false,
            type: 'post',
            dataType: 'json',
            success: function (response) {
                // console.log(response.data)
                let html = '';
                let i;
                let URL = 'http://localhost/Rental_mobil/Laporan/';
                let no = 0;
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].nama_driver + ' / ' + response.data[i].komisi_driver + '</td>' +
                        '<td>' + response.data[i].no_tlp + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tempat_tujuan + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Cetaksurattugas/' + response.data[i].id_transaksi + '" target="_blank"><button style="width:60px;" type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Cetak"><i class="fa fa-download"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-komisi').html(html);
            }
        })
    }

    // sweert alert2 data transaksi
    //edit
    let dataflash = $('.flash-data-transaksi').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data Transaksi',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-transaksi').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Transaksi akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })

    // sweert alert2 data driver
    //edit
    dataflash = $('.flash-data-driver').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data Driver',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-driver').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Driver akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })


    // sweert alert2 data kendaraan
    //edit
    dataflash = $('.flash-data-kendaraan').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data Kendaraan',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-kendaraan').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Kendaraan akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })


    // sweert alert2 data User
    //edit
    dataflash = $('.flash-data-user').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data User',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-user').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data User akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })

    // sweert alert2 data Pengeluaran
    //edit
    dataflash = $('.flash-data-pengeluaran').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data Pengeluaran',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-pengeluaran').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Pengeluaran akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })

    // sweert alert2 data Kernek
    //edit
    dataflash = $('.flash-data-kernek').data('flash')
    if (dataflash) {
        Swal.fire(
            'Data Kernek',
            'Berhasil ' + dataflash,
            'success'
        )
    }
    //hapus
    $('.tombol-hapus-kernek').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Kerenek akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })

    $('.tombol-hapus-pengeluaran-byTanggal').on('click', function (e) {
        //matikan aksi default (href tidak akan berjalan)
        e.preventDefault()
        //ambil link di href
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: 'Data Pengeluaran akan dihapus',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus Data!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href;
            }
        })
    })

    //memberi tanda titik otomatis ketika input angka
    var rupiah = document.getElementById("rupiah");
    rupiah.addEventListener("keyup", function (e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? "." : "";
            rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
    }

})
