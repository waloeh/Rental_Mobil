<html>

<head>
    <title>Jadwal Pemberangkatan</title>
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

<body style='font-family:tahoma; font-size:10pt;' onload="window.print()">
    <div align="center" style="line-height: 10px;">
        <h2><?php echo $title; ?></h2>
        <h3><u><?php echo $hari . ', ' . $tanggal; ?></u></h3>
    </div>
    <hr>
    <br>
    <div style="line-height: 20px;">
        <?php foreach ($dataJadwal as $data) : ?>
            <span> <?php echo $data['id_transaksi'] ?></span> <span style="margin-left: 15px;"><?php echo $data['no_polisi'] ?></span><span style="padding-left: 15px;"><?php echo $data['nama_pemesan'] . ' ' . $data['bus_dikirim'] . ' ' . $data['no_tlp'] ?></span><br>
            <span style="margin-left: 105px;"><?php echo $data['sheet'] ?></span><span> Tujuan : <?php echo $data['tempat_tujuan'] ?></span><br>
            <span style="margin-left: 140px;">Jam : <b><?php echo $data['jam'] ?></b></span><br>
        <?php endforeach; ?>
    </div>
</body>

</html>


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Jadwal</title>
</head>

<body onload="">
    <div align="center">
        <h2><?php echo $title; ?></h2>
        <h3><u><?php echo $hari . ', ' . $tanggal; ?></u></h3>
    </div>
    <div>
        <p>ID Pelanggan : KOSUB000076</p>
        <p>No. Polisi : F 98787 JHK</p>
        <p>Nam Pemesan : IBU HAJI MAEMUNAH S.H</p>
        <p>No Tlp : 099878343</p>
        <p>Alamat : PERUM WARINGI JAYA NO 10 DES. GUNUNG KIDUL CILEUNGSI</p>
        <p>Tujuan : TAMAN MINI</p>
        <p>Jam : 06.00</p>
    </div>
    <hr>
    <div>
        <p>ID Pelanggan : KOSUB000076</p>
        <p>No. Polisi : F 98787 JHK</p>
        <p>Nam Pemesan : IBU HAJI MAEMUNAH S.H</p>
        <p>No Tlp : 099878343</p>
        <p>Alamat : PERUM WARINGI JAYA NO 10 DES. GUNUNG KIDUL CILEUNGSI</p>
        <p>Tujuan : TAMAN MINI</p>
        <p>Jam : 06.00</p>
    </div>
    <hr>
    <div>
        <p>ID Pelanggan : KOSUB000076</p>
        <p>No. Polisi : F 98787 JHK</p>
        <p>Nam Pemesan : IBU HAJI MAEMUNAH S.H</p>
        <p>No Tlp : 099878343</p>
        <p>Alamat : PERUM WARINGI JAYA NO 10 DES. GUNUNG KIDUL CILEUNGSI</p>
        <p>Tujuan : TAMAN MINI</p>
        <p>Jam : 06.00</p>
    </div>
    <hr>
    <div>
        <p>ID Pelanggan : KOSUB000076</p>
        <p>No. Polisi : F 98787 JHK</p>
        <p>Nam Pemesan : IBU HAJI MAEMUNAH S.H</p>
        <p>No Tlp : 099878343</p>
        <p>Alamat : PERUM WARINGI JAYA NO 10 DES. GUNUNG KIDUL CILEUNGSI</p>
        <p>Tujuan : TAMAN MINI</p>
        <p>Jam : 06.00</p>
    </div>

</body>

</html> -->






<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Jadwal</title>
</head>

<body onload="window.print()">
    <div align="center">
        <h2><?php echo $title; ?></h2>
        <h3><u><?php echo $hari . ', ' . $tanggal; ?></u></h3>
    </div>
    <div>
        <table align="center" cellspacing='0' style='width:700px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='1'>
            <thead>
                <tr>
                    <th align="center" style="width:">No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pemesan</th>
                    <th>No. Polisi</th>
                    <th>No. Telp</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($dataJadwal as $data) : ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $data['id_pelanggan']; ?></td>
                        <td><?php echo $data['nama_pemesan']; ?></td>
                        <td><?php echo $data['no_polisi']; ?></td>
                        <td><?php echo $data['no_tlp']; ?></td>
                        <td><?php echo $data['bus_dikirim']; ?></td>
                        <td><?php echo $data['tempat_tujuan']; ?></td>
                        <td><?php echo $data['jam']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html> -->