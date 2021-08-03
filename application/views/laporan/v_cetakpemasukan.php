<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pemasukan</title>
</head>

<body onload="window.print()">
    <div align="center" style="line-height: 10px;">
        <h2><?php echo $title; ?></h2>
        <h3><?php echo $sub_title; ?></h3>
    </div>
    <div>
        <table align="center" cellspacing='0' style='width:650px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pemesan</th>
                    <th>Tgl Berangkat</th>
                    <th>Tujuan</th>
                    <th>Uang Muka</th>
                    <th>Pelunasan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($dataPemasukan as $data) : ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $data['id_pelanggan']; ?></td>
                        <td><?php echo $data['nama_pemesan']; ?></td>
                        <td><?php echo $data['tgl_berangkat']; ?></td>
                        <td><?php echo $data['tempat_tujuan']; ?></td>
                        <td><?php echo number_format($data['uang_muka'], 0, ',', '.') ?></td>
                        <td><?php echo number_format($data['pelunasan'], 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="5">Jumlah pemasukan : </td>
                    <td colspan="2" align="center"><?php echo 'Rp. ' . number_format($jmlPemasukan[0]->total, 0, ',', '.'); ?></td>
                </tr>
                <tr>
                    <td colspan="5">Jumlah Pengeluaran : </td>
                    <td colspan="2" align="center"><?php echo 'Rp. ' . number_format($jmlPengeluaran[0]->total, 0, ',', '.'); ?></td>
                </tr>
                <tr>
                    <td colspan="5">Total Saldo : </td>
                    <td colspan="2" align="center"><b><?php echo 'Rp. ' . number_format($saldo, 0, ',', '.'); ?></b></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>