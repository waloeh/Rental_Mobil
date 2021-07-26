
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
                        '<td><button class="badge badge-pill badge-success">' + response.data[i].status + '</button></td>' +
                        '<td>' + response.data[i].no_polisi + '</td>' +
                        '<td>' + response.data[i].harga_sewa + '</td>' +
                        '<td>' + response.data[i].tahun_pembuatan + '</td>' +
                        '<td>' + response.data[i].tgl_bayar_pajak + '</td>' +
                        '<td>' + response.data[i].tgl_ganti_oli + '</td>' +
                        '<td>' + response.data[i].tgl_service + '</td>' +
                        '<td>' + response.data[i].tgl_ganti_ban + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Edit/' + response.data[i].id_kendaraan + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_kendaraan + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_kendaraan + '"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" onclick="return confirm(`yakin mau dihapus ? `);"></i></button></a></td>' +
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
                    if (response.data[i].status == 1) {
                        status = 'Siap';
                    } else {
                        status = 'Jalan';
                    }
                    no++;
                    html += '<tr>' +
                        '<td class="text-center">' + no + '</td>' +
                        '<td>' + response.data[i].nama_driver + '</td>' +
                        '<td>' + response.data[i].alamat + '</td>' +
                        '<td>' + response.data[i].jenis_kelamin + '</td>' +
                        '<td>' + response.data[i].no_hp + '</td>' +
                        '<td>' + status + '</td>' +
                        '<td class="text-center">' + '<a href="' + URL + 'Edit/' + response.data[i].id_driver + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_driver + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_driver + '"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" onclick="return confirm(`yakin mau dihapus ? `);"></i></button></a></td>' +
                        '<tr>';
                }
                $('#show-data-driver').html(html)
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
                        '<td class="text-center"> <a href="' + URL + 'Edit/' + response.data[i].id_user + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_user + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_user + '"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" onclick="return confirm(`yakin mau dihapus ? `);"></i></button></a></td>'
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
                let URL = 'http://localhost/Rental_mobil/TRansaksi/';
                for (i = 0; i < response.data.length; i++) {
                    no++;
                    html += '<tr>' +
                        '<td>' + no + '</td>' +
                        '<td>' + response.data[i].nama_pemesan + '</td>' +
                        '<td>' + response.data[i].tgl_transaksi + '</td>' +
                        '<td>' + response.data[i].jml_bus + '</td>' +
                        '<td>' + response.data[i].tgl_berangkat + '</td>' +
                        '<td>' + response.data[i].tgl_kembali + '</td>' +
                        '<td>' + response.data[i].keprluan + '</td>' +
                        '<td>' + response.data[i].harga_sewa + '</td>' +
                        '<td class="text-center"> <a href="' + URL + 'Edit/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button></a> <a href="' + URL + 'Detail/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fa fa-info"></button></i></a> <a href="' + URL + 'Hapus/' + response.data[i].id_transaksi + '"><button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" onclick="return confirm(`yakin mau dihapus ? `);"></i></button></a></td>'
                        + '</tr>';
                }
                $('#show-data-transaksi').html(html);
            }
        })
    }
})