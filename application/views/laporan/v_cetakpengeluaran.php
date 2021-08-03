<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Pengeluaran</title>
</head>

<body onload="window.print()">
    <div align="center">
        <h2><?php echo $title; ?></h2>
        <h3><?php echo $sub_title; ?></h3>
    </div>
    <div>
        <table align="center" cellspacing='0' style='width:550px; font-size:12pt; font-family:calibri;  border-collapse: collapse;' border='1'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Deskripsi</th>
                    <th>Nominal</th>

                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($dataPengeluaran as $data) : ?>
                    <tr>
                        <td align="center"><?php echo $no++; ?></td>
                        <td><?php echo $data['keterangan']; ?></td>
                        <td><?php echo number_format($data['nominal'],0,',','.') ?></td>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="2">Jumlah :</td>
                        <td><?php echo 'Rp. ' . number_format($jmlPengeluaran[0]->total,0,',','.') ?></td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>

</html>