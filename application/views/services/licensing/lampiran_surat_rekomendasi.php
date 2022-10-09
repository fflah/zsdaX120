<!DOCTYPE html>
<html>
<style type="text/css">
    body {
        padding: 5px 50px 10px 30px;
        font-family: TimesNewRoman, "Times New Roman", Times, Baskerville, Georgia, serif;
        font-size: 12;
    }

    header {
        position: fixed;
        top: 30px;
        left: 40px;
        right: 40px;
        height: auto;
    }

    footer {
        position: fixed;
        bottom: -60px;
        left: 0px;
        right: 0px;
        height: 120px;
        padding: 0px 40px 0px 50px;
    }

    .list-barang{
        width: 100%;
        border-collapse: collapse;
    }

    .list-barang table th td{
        border: 1px solid;
    }
   
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Surat Rekomendasi</title>
</head>

<body>
   
    <table style="margin-left: auto; margin-right: 0;">
        <tr>
            <td>
                <table style="margin-right: 60px;">
                    <tr>
                        <td>Lampiran</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td>Jakarta, <?= date("d F Y")?> </td>
                    </tr>
                </table>
            </td>
           
        </tr>
    </table>
    <br>
        <h3 style="text-align: center;">RENCANA IMPOR BARANG MODAL <br>
    DALAM RANGKA FASILITAS PEMBEBASAN BEA MASUK</h3>
    <table class="list-barang"  border="1">
            <tr>
                <th>NO</th>
                <th>Jenis Barang</th>
                <th>Spesifikasi</th>
                <th>HS Code</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Negara Asal</th>
                <th>Pelabuhan Muat</th>
                <th>Pelabuhan Bongkar</th>
            </tr>
            <?php foreach ($data_produk as $key => $value): ?> 
            <tr>
                <td><?=$key+1?></td>
                <td></td>
                <td><?=$value->spesifikasi?></td>
                <td><?=$value->hs_code?></td>
                <td><?=$value->jumlah_produk?></td>
                <td></td>
                <td><?=$value->asal_negara?></td>
                <td><?=$value->pelabuhan_muat?></td>
                <td><?=$value->pelabuhan_bongkar?></td>
            </tr>
            <?php endforeach ?>
    </table>
    <br>
    <br>
    <br>
    <table width="100%">
        <tr>
            <td width="30%">
            </td>
            <td></td>
            <td width="40%" style="text-align: center;">
                DIREKTUR JENDERAL ILMATE
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <strong>TAUFIEK BAWAZIER</strong>

            </td>
        </tr>
    </table>
    
    <footer>
        <table width="100%">
            <tr>
                <td></td>
            </tr>
        </table>
    </footer>
</body>

</html>