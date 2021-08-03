<html>

<head>
    <title>Invoice</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }

        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
    </style>
</head>

<body style='font-family:tahoma; font-size:8pt;' onload="window.print()">
    <center>
        <table style='width:700px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                <span style='font-size:12pt'><b>KOSUB TRANSPORT</b></span></br>
                <span style='font-size:12pt'>UNIT ANGKUTAN PARIWISATA</span></br>
                Jln. Raya Narogong no. 20 Cileungsi<br>
                Telpon (021) 8230346 - 8230347<br>
                Kabupaten Bogor 16820<br>
                <span style='font-size:12pt'><u>MELAYANI PESANAN UNTUK </u></span></br>
                1. Study Tour &nbsp;&nbsp;&nbsp;&nbsp; 4. Antar Jemput Karyawan <br>
                2. Darmawisata &nbsp;5. Lain - lain keperluan <br>
                3. Berziarah
            </td>
            <td style='vertical-align:top' width='30%' align='left'>
                <span style='font-size:10pt'>SURAT PESANAN KENDARAAN BUS</span></br>
                Nomor : .......... </br>
            </td>
        </table>
        <!-- <table style='width:550px; font-size:8pt; font-family:calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='left' style='padding-right:80px; vertical-align:top'>
                Nama Supplier : Pelanggan</br>
                Alamat : -
            </td>
            <td style='vertical-align:top' width='30%' align='left'>
                No Telp : -
            </td>
        </table> -->
        <table cellspacing='0' style='width:700px; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='0'>
            <!-- <tr align='center'>
                <td width='10%'>Kode Barang</td>
                <td width='20%'>Nama Barang</td>
                <td width='13%'>Harga</td>
                <td width='4%'>Qty</td>
                <td width='7%'>Discount</td>
                <td width='13%'>Total Harga</td>
            <tr>
                <td>T12</td>
                <td>Tinta</td>
                <td>Rp60.000,00</td>
                <td>1</td>
                <td>Rp0,00</td>
                <td style='text-align:right'>Rp60.000,00</td>
            </tr>

            <tr>
                <td colspan='5'>
                    <div style='text-align:right'>Total Yang Harus Di Bayar Adalah : </div>
                </td>
                <td style='text-align:right'>Rp2.460.000,00</td>
            </tr>
            <tr>
                <td colspan='6'>
                    <div style='text-align:right'>Terbilang : Dua Juta Empat Ratus Enam Puluh Ribu Rupiah</div>
                </td>
            </tr> -->
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td width="30%">1. ID Pelanggan</td>
                <td width="70%">: <b><?php echo $dataTransaksi['id_pelanggan'] ?></b></td>
            </tr>
            <tr>
                <td width="30%">2. Nama Pelanggan</td>
                <td width="70%">: <?php echo $dataTransaksi['nama_pemesan'] ?></td>
            </tr>
            <tr>
                <td>3. Alamat Pemesan</td>
                <td>: <?php echo $dataTransaksi['alamat'] ?></td>
            </tr>
            <tr>
                <td width="30%">4. Jml Unit / Jenis bus yang disewa</td>
                <td width="70%">: <?php echo $dataTransaksi['jml_bus'] ?> / <?php echo $dataTransaksi['jenis_kendaraan'] ?></td>
            </tr>
            <tr>
                <td width="30%">6. Untuk keperluan</td>
                <td width="70%">: <?php echo $dataTransaksi['keperluan'] ?></td>
            </tr>
            <tr>
                <td width="30%">7. Dikirim ke alamat</td>
                <td width="70%">: <?php echo $dataTransaksi['bus_dikirim'] ?></td>
            </tr>
            <tr>
                <td width="30%">8. Tempat tujuan</td>
                <td width="70%">: <?php echo $dataTransaksi['tempat_tujuan'] ?></td>
            </tr>
            <tr>
                <td width="30%">9. Tanggl berangkat</td>
                <td width="70%">: <?php echo $dataTransaksi['tgl_berangkat'] ?></td>
            </tr>
            <tr>
                <td width="30%">10. Tanggal kembali</td>
                <td width="70%">: <?php echo $dataTransaksi['tgl_kembali'] ?></td>
            </tr>
            <tr>
                <td width="30%">11. Harga Sewa</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['total_harga'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">12. Uang muka</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['uang_muka'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">13. Sisa pembayaran</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['sisa_pembayaran'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">14. Pelunasan</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['pelunasan'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">15. Uang jalan</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['uang_jalan'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">16. Komisi Sopir</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['komisi_driver'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">17. Komisi kernek</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataTransaksi['komisi_kernek'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table cellspacing='0' style='width:700px; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='0'>
            <tr>
                <td width="20%">Syarat-syarat :</td>
                <td width="80%">- Pesanan baru bisa dilayani / dipenuhi, setelah pemesan menyerahkan uang muka</td>
            </tr>
            <tr>
                <td></td>
                <td>- Biaya jalan Tol/Parkir/Portal/Ferry ditanggung penyewa</td>
            </tr>
            <tr>
                <td></td>
                <td>- Sisa ongkos sewa harus sudah dilunasi selambat-lambatnya 3 hari menjelang pemberangkatan</td>
            </tr>
            <tr>
                <td></td>
                <td>- Jumlah penumpang tidak melebihi dari ketentuan/perjanjian seperti diatas</td>
            </tr>
            <tr>
                <td></td>
                <td>- Pembatalan oleh pemesan, digenakan gantu rugi</td>
            </tr>
            <tr>
                <td></td>
                <td>- Sudah termasuk Asuransi Kecelakaan Jasaraharja</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <table style='width: 700px;; font-size:7pt;' cellspacing='2'>
            <tr>
                <td align='center'>Dibuat Oleh,</br></br><u>(Nian Aryadi)</u></td>
                <td align='center'>Disetujui Oleh,</br></br><u>(Sumanta)</u></td>
                <!-- <td style='border:1px solid black; padding:5px; text-align:left; width:30%'></td> -->
                <td align='center'>Bogor, <?php echo date('d F Y') ?></br></br><u>(<?php echo $dataTransaksi['nama_pemesan'] ?>)</u></td>
            </tr>
        </table>
    </center>
</body>

</html>