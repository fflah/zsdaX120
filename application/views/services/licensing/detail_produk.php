<style>
    table.mytable {
        border-collapse: separate;
        border-spacing: 5px;
    }
</style>
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Formulir Data Produk</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Detail Data Produk
                </h1>
                <a onclick="history.back()" style="margin-top:-33px;float: right;" class="btn">
                    <i class="ace-icon fa fa-reply  align-top bigger-125"></i>
                    Kembali
                </a>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                <div class="widget-box ui-sortable-handle" id="widget-box-1">
                        <div class="widget-header">
                            <h4 class="widget-title">Data Produk</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" style="font-size: medium;">
                                <table class="mytable">
                                    <tbody><tr>
                                        <td style="width: 200px;">Nama Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->nama_mesin?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Merek Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->merek_mesin?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">HS Code</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->hs_code?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Kegunaan</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->kegunaan?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Spesifikasi</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->spesifikasi?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Dokumen Spesifikasi</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><a target="_blank" href="<?=base_url('media/').$data_produk->dokumen_spesifikasi?>"><?=$data_produk->dokumen_spesifikasi?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nilai Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->nilai_mesin?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Umur Teknis Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->umur_teknis_mesin?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Foto Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><a target="_blank" href="<?=base_url('media/').$data_produk->foto_mesin?>"><?=$data_produk->foto_mesin?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Jumlah Mesin</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->jumlah_mesin?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Asal negara:</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->asal_negara?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Pelabuhan Bongkar</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->pelabuhan_bongkar?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Pelabuhan Muat</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->pelabuhan_muat?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Sumber Pembiayaan</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->sumber_pembiayaan?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nama Produk</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->nama_produk?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Jumlah Produk</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->jumlah_produk?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nilai produk</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->nilai_produk?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Penyerapan tenaga kerja</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?=$data_produk->penyerapan_tenaga_kerja?></td>
                                    </tr>
                                </tbody></table>

                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->