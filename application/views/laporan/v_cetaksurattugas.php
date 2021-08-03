<html>

<head>
    <title>Surat Tugas</title>
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
            <tr>
                <td>
                    <span style='font-size:12pt'><b>KOSUB TRANSPORT</b></span></br>
                    <span style='font-size:12pt'>UNIT ANGKUTAN PARIWISATA</span></br>
                    Jln. Raya Narogong no. 20 Cileungsi<br>
                    Telpon (021) 8230346 - 8230347<br>
                    Kabupaten Bogor 16820<br>
                </td>
            </tr>
            <tr>
                <td align="center"><span style="font-size:14pt"><b><u><?php echo $title; ?></u></b></span></td>
            </tr>
        </table>
        <br><br>
        <table cellspacing='0' style='width:700px; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='0'>
            </tr>
            <tr>
                <td width="30%">No. Polisi / Pengemudi / Kernet</td>
                <td width="70%">: <?php echo $dataSuratTugas['nama_pemesan'] ?> / <?php echo $dataSuratTugas['nama_driver'] ?> / <?php echo $dataSuratTugas['nama_kernek'] ?></td>
            </tr>
            <tr>
                <td width="30%">Nama Pemesan / Tempat Jemput</td>
                <td width="70%">: <?php echo $dataSuratTugas['nama_pemesan'] ?> / <?php echo $dataSuratTugas['bus_dikirim'] ?></td>
            </tr>
            <tr>
                <td width="30%">Tempat tujuan</td>
                <td width="70%">: <?php echo $dataSuratTugas['tempat_tujuan'] ?></td>
            </tr>
            <tr>
                <td width="30%">Tanggl berangkat</td>
                <td width="70%">: <?php echo hari($dataSuratTugas['tgl_berangkat'])?>, <?php echo tanggal($dataSuratTugas['tgl_berangkat']) ?></td>
            </tr>
            <tr>
                <td width="30%">Tanggal kembali</td>
                <td width="70%">: <?php echo hari($dataSuratTugas['tgl_kembali'])?>, <?php echo tanggal($dataSuratTugas['tgl_kembali']) ?></td>
            </tr>
            <tr>
                <td width="30%">Sisa Pembayaran</td>
                <td width="70%">: <?php echo 'Rp. ' . number_format($dataSuratTugas['sisa_pembayaran'], 0, ',', '.');  ?></td>
            </tr>
            <tr>
                <td width="30%">Keterangan</td>
                <td width="70%">:</td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
        </table>
        <table cellspacing='0' style='width:700px; font-size:10pt; font-family:calibri;  border-collapse: collapse;' border='0'>
            <tr>
                <td>Tugas ini agar dapat dilaksanakan dengan sebaik-baiknya, dengan penuh rasa tanggung jawab dan
                    mengutamakan keselamatan penumpang</td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <table style='width: 700px;; font-size:8pt;' cellspacing='6'>
            <tr>
                <td align='center'>Mengetahui Penyewa</br></br><u>(<?php echo $dataSuratTugas['nama_pemesan'] ?>)</u></td>
                <td align='center'>Bogor, <?php echo date('d F Y') ?></br></br>Bagian OPerasioanal Pariwisata<br><br><u>(Nian Aryadi)</u></td>
            </tr>
        </table>
    </center>
</body>

</html>