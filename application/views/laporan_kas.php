<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="height: 50px;" width="1026">
        <tbody>
            <tr>
                <td style="width: 198.875px;">No</td>
                <td style="width: 198.875px;">Jenis Kas</td>
                <td style="width: 198.875px;">Nominal</td>
                <td style="width: 198.875px;">Keterangan Kas</td>
                <td style="width: 198.9px;">Tanggal Transaksi</td>
            </tr>
            <?php
                                            $id = 0;
                                            foreach($kas as $i)
                                            :
                                            $id++;
                                            $id_kas = $i['id_kas'];
                                            $jenis_kas = $i['jenis_kas'];
                                            $nominal = $i['nominal'];
                                            $keterangan_kas = $i['keterangan_kas'];
                                            $tanggal_transaksi = $i['tanggal_transaksi'];

                                            ?>
            <tr>
                <td style="width: 198.875px;"><?=$id?></td>
                <td style="width: 198.875px;"><?=$jenis_kas?></td>
                <td style="width: 198.875px;"><?=$nominal?></td>
                <td style="width: 198.875px;"><?=$keterangan_kas?></td>
                <td style="width: 198.9px;"><?=$tanggal_transaksi?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>

</html>