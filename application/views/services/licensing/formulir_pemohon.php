<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Formulir Permohonan</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Formulir Permohonan
                </h1>
                <a onclick="history.back()" style="margin-top:10px;float: right;" class="btn">
                    <i class="ace-icon fa fa-reply  align-top bigger-125"></i>
                    Kembali
                </a>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" method="POST" action="" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Alasan permohonan Masterlist </label>
                            <div class="col-sm-9">
                                <select required id="alasan_permohonan" name="alasan_permohonan" class="select2-hidden-accessible" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                    <option value="">&nbsp;</option>
                                    <option value="Penambahan kapasitas Produksi">Penambahan kapasitas Produksi</option>
                                    <option value="Modernisasi produk atau mesin">Modernisasi produk atau mesin</option>
                                    <option value="Keperluan penelitian dan mengembangan ilmu pengetahuan">Keperluan penelitian dan mengembangan ilmu pengetahuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Surat Permohonan </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nomor_surat_permohonan" id="nomor_surat_permohonan" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Dokumen Surat Permohonan </label>
                            
                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="file" name="dokumen_surat_permohonan" id="dokumen_surat_permohonan" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Pemohon/Pemroses </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nama_pemohon" id="nama_pemohon" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Izin Usaha Industri </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nomor_izin_usaha_industri" id="nomor_izin_usaha_industri" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Dokumen Izin Usaha </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="file" name="dokumen_izin_usaha" id="dokumen_izin_usaha" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nomor Induk Berusaha </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nomor_induk_berusaha" id="nomor_induk_berusaha" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Dokumen Induk Berusaha:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="file" name="dokumen_induk_berusaha" id="dokumen_induk_berusaha" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> KBLI </label>
                            <div class="col-sm-9">
                                <select required id="KBLI" name="KBLI" class="chosen-select form-control" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                    <option value="">&nbsp;</option>
                                    <option value="25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN">25113-INDUSTRI KONSTRUKSI BERAT SIAP PASANG DARI BAJA UNTUK BANGUNAN</option>
                                    <option value="25119-INDUSTRI BARANG DARI LOGAM SIAP PASANG UNTUK KONSTRUKSI LAINNYA">25119-INDUSTRI BARANG DARI LOGAM SIAP PASANG UNTUK KONSTRUKSI LAINNYA</option>
                                    <option value="25120-INDUSTRI TANGKI, TANDON AIR DAN WADAH DARI LOGAM">25120-INDUSTRI TANGKI, TANDON AIR DAN WADAH DARI LOGAM</option>
                                    <option value="28160-INDUSTRI ALAT PENGANGKAT DAN PEMINDAH">28160-INDUSTRI ALAT PENGANGKAT DAN PEMINDAH</option>
                                    <option value="28240-INDUSTRI MESIN PENAMBANGAN, PENGGALIAN DAN KONSTRUKSI">28240-INDUSTRI MESIN PENAMBANGAN, PENGGALIAN DAN KONSTRUKSI</option>
                                    <option value="28120-INDUSTRI PERALATAN TENAGA ZAT CAIR DAN GAS">28120-INDUSTRI PERALATAN TENAGA ZAT CAIR DAN GAS</option>
                                    <option value="28130-INDUSTRI POMPA LAINNYA, KOMPRESOR, KRAN DAN KLEP/KATUP">28130-INDUSTRI POMPA LAINNYA, KOMPRESOR, KRAN DAN KLEP/KATUP</option>
                                    <option value="28151-INDUSTRI OVEN, PERAPIAN DAN TUNGKU PEMBAKAR SEJENIS YANG TIDAK MENGGUNAKAN ARUS LISTRIK">28151-INDUSTRI OVEN, PERAPIAN DAN TUNGKU PEMBAKAR SEJENIS YANG TIDAK MENGGUNAKAN ARUS LISTRIK</option>
                                    <option value="28152-INDUSTRI OVEN, PERAPIAN DAN TUNGKU PEMBAKAR SEJENIS YANG MENGGUNAKAN ARUS LISTRIK">28152-INDUSTRI OVEN, PERAPIAN DAN TUNGKU PEMBAKAR SEJENIS YANG MENGGUNAKAN ARUS LISTRIK</option>
                                    <option value="28180-INDUSTRI PERKAKAS TANGAN YANG DIGERAKKAN TENAGA">28180-INDUSTRI PERKAKAS TANGAN YANG DIGERAKKAN TENAGA</option>
                                    <option value="28191-INDUSTRI MESIN UNTUK PEMBUNGKUS, PEMBOTOLAN DAN PENGALENGAN">28191-INDUSTRI MESIN UNTUK PEMBUNGKUS, PEMBOTOLAN DAN PENGALENGAN</option>
                                    <option value="28193-INDUSTRI MESIN PENDINGIN">28193-INDUSTRI MESIN PENDINGIN</option>
                                    <option value="28199-INDUSTRI MESIN UNTUK KEPERLUAN UMUM LAINNYA YTDL">28199-INDUSTRI MESIN UNTUK KEPERLUAN UMUM LAINNYA YTDL</option>
                                    <option value="28221-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN LOGAM">28221-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN LOGAM</option>
                                    <option value="28222-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN KAYU">28222-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN KAYU</option>
                                    <option value="28223-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN BAHAN BUKAN LOGAM DAN KAYU">28223-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGERJAAN BAHAN BUKAN LOGAM DAN KAYU</option>
                                    <option value="28224-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGELASAN YANG MENGGUNAKAN ARUS LISTRIK">28224-INDUSTRI MESIN DAN PERKAKAS MESIN UNTUK PENGELASAN YANG MENGGUNAKAN ARUS LISTRIK</option>
                                    <option value="28230-INDUSTRI MESIN METALURGI">28230-INDUSTRI MESIN METALURGI</option>
                                    <option value="28250-INDUSTRI MESIN PENGOLAHAN MAKANAN, MINUMAN DAN TEMBAKAU">28250-INDUSTRI MESIN PENGOLAHAN MAKANAN, MINUMAN DAN TEMBAKAU</option>
                                    <option value="28262-INDUSTRI MESIN JAHIT SERTA MESIN CUCI DAN MESIN PENGERING UNTUK KEPERLUAN NIAGA">28262-INDUSTRI MESIN JAHIT SERTA MESIN CUCI DAN MESIN PENGERING UNTUK KEPERLUAN NIAGA</option>
                                    <option value="28263-INDUSTRI MESIN TEKSTIL">28263-INDUSTRI MESIN TEKSTIL</option>
                                    <option value="28264-INDUSTRI JARUM MESIN JAHIT, RAJUT, BORDIR DAN SEJENISNYA">28264-INDUSTRI JARUM MESIN JAHIT, RAJUT, BORDIR DAN SEJENISNYA</option>
                                    <option value="28264-INDUSTRI JARUM MESIN JAHIT, RAJUT, BORDIR DAN SEJENISNYA">28264-INDUSTRI JARUM MESIN JAHIT, RAJUT, BORDIR DAN SEJENISNYA</option>
                                    <option value="28265-INDUSTRI MESIN PENYIAPAN DAN PEMBUATAN PRODUK KULIT">28265-INDUSTRI MESIN PENYIAPAN DAN PEMBUATAN PRODUK KULIT</option>
                                    <option value="28291-INDUSTRI MESIN PERCETAKAN">28291-INDUSTRI MESIN PERCETAKAN</option>
                                    <option value="28292-INDUSTRI MESIN PABRIK KERTAS">28292-INDUSTRI MESIN PABRIK KERTAS</option>
                                    <option value="28299-INDUSTRI MESIN KEPERLUAN KHUSUS LAINNYA">28299-INDUSTRI MESIN KEPERLUAN KHUSUS LAINNYA</option>
                                    <option value="33111-REPARASI PRODUK LOGAM SIAP PASANG UNTUK BANGUNAN, TANGKI, TANDON AIR DAN GENERATOR UAP">33111-REPARASI PRODUK LOGAM SIAP PASANG UNTUK BANGUNAN, TANGKI, TANDON AIR DAN GENERATOR UAP</option>
                                    <option value="25931-INDUSTRI ALAT POTONG DAN PERKAKAS TANGAN UNTUK PERTANIAN">25931-INDUSTRI ALAT POTONG DAN PERKAKAS TANGAN UNTUK PERTANIAN</option>
                                    <option value="28210-INDUSTRI MESIN PERTANIAN DAN KEHUTANAN">28210-INDUSTRI MESIN PERTANIAN DAN KEHUTANAN</option>
                                    <option value="26511-INDUSTRI ALAT UKUR DAN ALAT UJI MANUAL">26511-INDUSTRI ALAT UKUR DAN ALAT UJI MANUAL</option>
                                    <option value="26514-INDUSTRI ALAT UJI DALAM PROSES INDUSTRI">26514-INDUSTRI ALAT UJI DALAM PROSES INDUSTRI</option>
                                    <option value="28192-INDUSTRI MESIN TIMBANGAN">28192-INDUSTRI MESIN TIMBANGAN</option>
                                    <option value="33121-REPARASI MESIN UNTUK KEPERLUAN UMUM">33121-REPARASI MESIN UNTUK KEPERLUAN UMUM</option>
                                    <option value="33122-REPARASI MESIN UNTUK KEPERLUAN KHUSUS">33122-REPARASI MESIN UNTUK KEPERLUAN KHUSUS</option>
                                    <option value="33132-REPARASI PERALATAN IRADIASI, ELEKTROMEDIS DAN ELEKTROTERAPI">33132-REPARASI PERALATAN IRADIASI, ELEKTROMEDIS DAN ELEKTROTERAPI</option>
                                    <option value="33141-REPARASI MOTOR LISTRIK, GENERATOR DAN TRANSFORMATOR">33141-REPARASI MOTOR LISTRIK, GENERATOR DAN TRANSFORMATOR</option>
                                    <option value="33200-INSTALASI/PEMASANGAN MESIN DAN PERALATAN INDUSTRI">33200-INSTALASI/PEMASANGAN MESIN DAN PERALATAN INDUSTRI</option>
                                    <option value="71209-ANALISIS DAN UJI TEKNIS LAINNYA">71209-ANALISIS DAN UJI TEKNIS LAINNYA</option>
                                    <option value="74100-Aktivitas Perancangan Khusus">74100-Aktivitas Perancangan Khusus</option>
                                    <option value="82920-AKTIVITAS PENGEPAKAN">82920-AKTIVITAS PENGEPAKAN</option>
                                    <option value="25130-INDUSTRI GENERATOR UAP, BUKAN KETEL PEMANAS">25130-INDUSTRI GENERATOR UAP, BUKAN KETEL PEMANAS</option>
                                    <option value="28111-INDUSTRI MESIN UAP, TURBIN DAN KINCIR">28111-INDUSTRI MESIN UAP, TURBIN DAN KINCIR</option>
                                    <option value="28112-INDUSTRI MOTOR PEMBAKARAN DALAM">28112-INDUSTRI MOTOR PEMBAKARAN DALAM</option>
                                    <option value="28113-INDUSTRI KOMPONEN DAN SUKU CADANG MESIN DAN TURBIN">28113-INDUSTRI KOMPONEN DAN SUKU CADANG MESIN DAN TURBIN</option>
                                    <option value="27111-INDUSTRI MOTOR LISTRIK">27111-INDUSTRI MOTOR LISTRIK</option>
                                    <option value="27112-INDUSTRI MESIN PEMBANGKIT LISTRIK">27112-INDUSTRI MESIN PEMBANGKIT LISTRIK</option>
                                    <option value="27113-INDUSTRI PENGUBAH TEGANGAN (TRANSFORMATOR), PENGUBAH ARUS (RECTIFIER) DAN PENGONTROL TEGANGAN (VOLTAGE STABILIZER)">27113-INDUSTRI PENGUBAH TEGANGAN (TRANSFORMATOR), PENGUBAH ARUS (RECTIFIER) DAN PENGONTROL TEGANGAN (VOLTAGE STABILIZER)</option>
                                    <option value="27120-INDUSTRI PERALATAN PENGONTROL DAN PENDISTRIBUSIAN LISTRIK">27120-INDUSTRI PERALATAN PENGONTROL DAN PENDISTRIBUSIAN LISTRIK</option>
                                    <option value="26601-INDUSTRI PERALATAN IRADIASI/SINAR X, PERLENGKAPAN DAN SEJENISNYA">26601-INDUSTRI PERALATAN IRADIASI/SINAR X, PERLENGKAPAN DAN SEJENISNYA</option>
                                    <option value="26602-INDUSTRI PERALATAN ELEKTROMEDIKAL DAN ELEKTROTERAPI">26602-INDUSTRI PERALATAN ELEKTROMEDIKAL DAN ELEKTROTERAPI</option>
                                    <option value="32501-INDUSTRI FURNITUR UNTUK OPERASI, PERAWATAN KEDOKTERAN DAN KEDOKTERAN GIGI">32501-INDUSTRI FURNITUR UNTUK OPERASI, PERAWATAN KEDOKTERAN DAN KEDOKTERAN GIGI</option>
                                    <option value="32502-INDUSTRI PERALATAN KEDOKTERAN DAN KEDOKTERAN GIGI, PERLENGKAPAN ORTHOPAEDIC DAN PROSTHETIC">32502-INDUSTRI PERALATAN KEDOKTERAN DAN KEDOKTERAN GIGI, PERLENGKAPAN ORTHOPAEDIC DAN PROSTHETIC</option>
                                    <option value="32509-INDUSTRI PERALATAN KEDOKTERAN DAN KEDOKTERAN GIGI SERTA PERLENGKAPAN LAINNYA">32509-INDUSTRI PERALATAN KEDOKTERAN DAN KEDOKTERAN GIGI SERTA PERLENGKAPAN LAINNYA</option>
                                </select>
                            </div>
                        </div>

                        

                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Submit
                                </button>

                                &nbsp; &nbsp; &nbsp;
                                <button class="btn" type="reset">
                                    <i class="ace-icon fa fa-undo bigger-110"></i>
                                    Reset
                                </button>
                            </div>
                        </div>

                        <div class="hr hr-24"></div>

                        
                    </form>

                </div><!-- /.col -->
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->



<script>
    $(".chosen-select").chosen();
</script>