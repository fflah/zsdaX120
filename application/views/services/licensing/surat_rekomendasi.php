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
</style>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Surat Rekomendasi</title>
</head>

<body>
    
   
    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td><?=$data_permohonan->id_formulir?>/ILMATE/PERTEK-MASTERLIST/<?= numberToRomawi(date("n"))?>/<?= date("Y")?></td>
                    </tr>
                    <tr>
                        <td>Lampiran</td>
                        <td>:</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Hal</td>
                        <td>:</td>
                        <td>Rekomendasi Pembebasan Bea Masuk </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Dalam Rangka Penanaman Modal </td>
                    </tr>
                </table>
            </td>
            <td>
                <table style="margin-left: 200px;margin-bottom: 59px;">
                    <tr>
                        <td>Jakarta, <?= date("d F Y")?></td>
                    </tr>
                    
                </table>
            </td>
        </tr>
    </table>
    <br>
    <p>Yth. Deputi Bidang Pelayanan Penanaman Modal,<br>
    Badan Koordinasi Penanaman Modal (BKPM)<br>
    di-<br>
    Jakarta</p>
    
    <p style="text-align: justify;">Sehubungan dengan permohonan saudara <?=$data_permohonan->nama_pemohon?> selaku <?=$data_lembaga->nama_lembaga?> melalui surat nomor <?=$data_permohonan->nomor_surat_permohonan?> dan
    setelah diadakan pemeriksaan kelengkapan dan kebenaran dokumen permohonan, dengan ini
    kami memberikan rekomendasi fasilitas pembebasan bea masuk produk, mesin atau bahan, kepada :</p>
    <table>
        <tr>
            <td style="width: 150px;text-align: left;">Nama Perusahaan</td>
            <td style="width: 2px;text-align: left;">:</td>
            <td><?=$data_lembaga->nama_lembaga?></td>
        </tr>
        <tr>
            <td style="width: 150px;text-align: left;">Alamat Kantor</td>
            <td style="width: 2px;text-align: left;">:</td>
            <td><?=$data_lembaga->alamat_lembaga?></td>
        </tr>
        <!-- <tr>
            <td style="width: 150px;text-align: left;">Telepon</td>
            <td style="width: 2px;text-align: left;">:</td>
            <td><?//=$data_lembaga->nama_lembaga?></td>
        </tr> -->
        <tr>
            <td style="width: 150px;text-align: left;">Izin Usaha</td>
            <td style="width: 2px;text-align: left;">:</td>
            <td><?=$data_permohonan->nomor_izin_usaha_industri?></td>
        </tr>
        <tr>
            <td style="width: 150px;text-align: left;">NIB</td>
            <td style="width: 2px;text-align: left;">:</td>
            <td><?=$data_permohonan->nomor_induk_berusaha?></td>
        </tr>
        
    </table>
    <p>Dengan keterangan pengajuan pembebasan bea masuk produk, mesin atau bahan sebagai berikut:</p>
    <ol>
        <li>Pengajuan fasilitas masterlist dalam rangka <?=$data_permohonan->alasan_permohonan?></li>
        <li>Nilai mesin/peralatan yang diimpor adalah sebesar <?=$nilai_mesin?></li>
        <li>Investasi ini diharapkan memberikan kontribusi negara dengan PPN sebesar <?=$kontribusi_ppn?></li> 
        <li>Investasi ini diharapkan memberikan kontribusi negara dengan penyerapan tenaga kerja
        sebesar <?=$jumlah_tenaga_kerja?></li> 
    </ol>
    <p style="text-indent: 30px; text-align: justify;">Sesuai dengan Peraturan Menteri Perindustrian No. 32 Tahun 2020 tentang Perubahan Keempat atas
Peraturan Menteri Perindustrian No. 19/M-IND/PER/2/2010 Daftar Mesin, Barang, dan Bahan Produksi Dalam
Negeri Untuk Pembangunan atau Pengembangan Industri Dalam Rangka Penanaman Modal, Pasal 1 ayat
(1), dinyatakan bahwa Importasi mesin, barang dan bahan yang sudah diproduksi di dalam negeri tidak
diberikan fasilitas pembebasan bea masuk sebagaimana diatur oleh Menteri yang membidangi urusan
keuangan, kecuali mesin, barang dan bahan dimaksud belum memenuhi spesifikasi yang dibutuhkan atau
jumlah belum memenuhi kebutuhan industri.</p>
    <p style="text-indent: 30px; text-align: justify;">Berdasarkan hal-hal tersebut, maka permohonan <?=$data_lembaga->nama_lembaga?> sebagaimana dimaksud dalam Lampiran dapat
dipertimbangkan untuk diberikan fasilitas pembebasan bea masuk dengan catatan mesin-mesin tersebut tidak
dipindahtangankan/ diperjualbelikan.</p>

    <p class="justify">Demikian atas perhatian dan kerjasamanya kami sampaikan terima kasih.</p>
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
                <img src="<?=base_url('assets/images/barcode.png')?>" alt="" srcset="">
                <p style="text-align: center;">#11206466</p>
            </td>
        </tr>
    </table>
    <p>Tembusan:</p>
    <ol>
        <li>Menteri Perindustrian;</li>
        <li>Sesditjen ILMATE;</li>
        <li>Direktur Industri Permesinan dan Alat Mesin Pertanian;</li>
        <li>Direktur <?=$data_lembaga->nama_lembaga?>;</li>
    </ol>
    <footer>
        <table width="100%">
            <tr>
                <td></td>
            </tr>
        </table>
    </footer>
</body>

</html>