`
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Print</title>
</head>

<body>
    <div style="border: 1px solid black; padding: 3px; width: 45%; "><h3 style="padding-left: 3px">Informasi Detail Paket #<?= $data->resi; ?></h3></div>
    <br>
    <table width="100%" >
        <tr>
            <td width="15%">Data Pengirim</td>
            <td width="15%">Data Penerima</td>
            <td width="15%">Informasi Paket</td>
            <td >Informasi Pengiriman</td>
        </tr>
        <tr>
            <td>
                <p>
                    <?= $data->nama_pengirim; ?><br>
                    <?= $data->nohp_pengirim; ?><br>
                    <?= $data->alamat_pengirim; ?>
                </p>
            </td>
            <td>
                <p>
                    <?= $data->nama_penerima; ?><br>
                    <?= $data->nohp_penerima; ?><br>
                    <?= $data->alamat_penerima; ?>
                </p>
            </td>
            <td>
                <p>
                    Jenis Layanan<br>
                    Jenis Paket<br>
                    Pengambilan<br>
                    Ongkos Kirim Dasar<br>
                    Berat Paket<br>
                    Pembayaran<br>
                    Total Ongkos Kirim
                </p>
            </td>
            <?php 
            if ($data->pengambilan == 2) { $ambil = 'Diantar'; } else { $ambil = 'Diambil'; }
            if ($data->pembayaran == 2) { $bayar = 'Tunai'; } else { $bayar = 'Transfer'; } ?>
            <td>
                <p>
                    : <?= $data->nama_paket; ?><br>
                    : <?= $data->nama_dokumen; ?><br>
                    : <?= $ambil; ?><br>
                    : Rp. <?= number_format($data->harga); ?><br>
                    : <?= number_format($data->berat); ?> Kg<br>
                    : <?= $bayar; ?><br>
                    : Rp. <?= number_format($data->tarif_total); ?><br>
                </p>
            </td>
        </tr>
        <tr>
            <td colspan="4">Catatan : <div style="border: 1px solid black; height: 100px; width: 60%; "></div></td>
        </tr>
    </table>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">
    function PrintWindow() {                    
       window.print();            
       CheckWindowState();
    }

    function CheckWindowState()    {           
        if(document.readyState=="complete") {
            window.close(); 
        } else {           
            setTimeout("CheckWindowState()", 1000)
        }
    }
    PrintWindow();
</script>

</html>