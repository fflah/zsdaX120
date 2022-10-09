<style>
    table.mytable {
        border-collapse: separate;
        border-spacing: 5px;
    }

    .profile-info-name {
        width: 200px;
        text-align: left;
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
                    <a href="#">Detail Permohonan</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Detail Permohonan
                </h1>
                <a onclick="history.back()" style="margin-top:-33px;float: right;" class="btn">
                    <i class="ace-icon fa fa-reply  align-top bigger-125"></i>
                    Kembali
                </a>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <?php if ($data_permohonan->acc_dirjen): ?> 
                    <div class="widget-box ui-sortable-handle" id="widget-box-1">
                            <div class="widget-header">
                                <h4 class="widget-title" >Status Permohonan</h4>
                            </div>
                            
                        <div class="widget-body" style="margin-bottom: 20px;">
                            <div class="widget-main" style="font-size: medium; text-align:center">
                                <h2 style="color: #2087c5;font-weight: 600;" >Selamat Permohonan Anda Disetujui</h2>
                                <h4>Silakan download surat rekomendasi dibawah ini</h4>
                                <a href="<?=base_url('services/licensing/surat-rekomendasi?ref=')?><?=$this->input->get('ref')?>" target="_blank" class="btn btn-primary">Download Surat Rekomendasi</a>
                                
                            </div>
                        </div>
                    </div>
                    <?php endif ?>

                    <div style="margin-top: 20px;" class="widget-box ui-sortable-handle" id="widget-box-1">
                        <div class="widget-header">
                            <h4 class="widget-title">Detail Lembaga</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" style="font-size: medium;">
                                <table class="mytable">
                                    <tr>
                                        <td style="width: 200px;">Nama Lembaga</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_lembaga->nama_lembaga ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Alamat Lembaga</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_lembaga->alamat_lembaga ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nilai Investasi</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_lembaga->nilai_investasi ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">NPWP</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_lembaga->npwp ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Jumlah Pekerja</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_lembaga->jumlah_pekerja ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div style="margin-top: 20px;" class="widget-box ui-sortable-handle" id="widget-box-1">
                        <div class="widget-header">
                            <h4 class="widget-title">Data Permohonan</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" style="font-size: medium;">
                                <table class="mytable">
                                    <tr>
                                        <td style="width: 200px;">ID Rekomendasi</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;">#<?= $data_permohonan->id_formulir ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Alasan Permohonan</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->alasan_permohonan ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nomor Surat Permohonan</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->nomor_surat_permohonan ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Dokumen Surat Permohonan</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><a target="_blank" href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_surat_permohonan ?>"><?= $data_permohonan->dokumen_surat_permohonan ?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nama Pemohon</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->nama_pemohon ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nomor Izin Usaha Industri</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->nomor_izin_usaha_industri ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Dokumen Izin Usaha</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><a target="_blank" href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_izin_usaha ?>"><?= $data_permohonan->dokumen_izin_usaha ?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Nomor Induk Berusaha</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->nomor_induk_berusaha ?></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">Dokumen Induk Berusaha</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><a target="_blank" href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_induk_berusaha ?>"><?= $data_permohonan->dokumen_induk_berusaha ?></a></td>
                                    </tr>
                                    <tr>
                                        <td style="width: 200px;">KBLI</td>
                                        <td>:</td>
                                        <td style="font-weight:700 ;"><?= $data_permohonan->KBLI ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="widget-box ui-sortable-handle" style="margin-top: 20px;" id="widget-box-1">
                        <div class="widget-header">
                            <h4 class="widget-title">Daftar Produk</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" style="font-size: medium;">
                                <table id="simple-table" class="table  table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="detail-col">Details</th>
                                            <th>Nama Mesin</th>
                                            <th>Merk Mesin</th>
                                            <th>HS Code</th>
                                            <th>Nilai Mesin</th>
                                            <th>Jumlah Mesin</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($data_produk as $key => $value): ?> 
                                        <tr>
                                            <td class="center">
                                                <div class="action-buttons">
                                                    <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                                                        <i class="ace-icon fa fa-angle-double-down"></i>
                                                        <span class="sr-only">Details</span>
                                                    </a>
                                                </div>
                                            </td>

                                            <td><?=$value->nama_mesin?></td>
                                            <td><?=$value->merek_mesin?></td>
                                            <td><?=$value->hs_code?></td>
                                            <td><?=$value->nilai_mesin?></td>

                                            <td>
                                                <?=$value->jumlah_mesin?>
                                            </td>
                                        </tr>

                                        <tr class="detail-row">
                                            <td colspan="8">
                                                <div class="table-detail">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-7">
                                                            <div class="space visible-xs"></div>
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Kegunaan </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->kegunaan?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Spesifikasi </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->spesifikasi?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Dokumen Spesifikasi </div>

                                                                    <div class="profile-info-value">
                                                                        <span><a href="<?=base_url('media/')?><?=$value->dokumen_spesifikasi?>" target="_blank" rel="noopener noreferrer"><?=$value->dokumen_spesifikasi?></a></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Umur Teknis Mesin </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->umur_teknis_mesin?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Foto Mesin </div>

                                                                    <div class="profile-info-value">
                                                                        <span><a href="<?=base_url('media/')?><?=$value->foto_mesin?>" target="_blank" rel="noopener noreferrer"> <?=$value->foto_mesin?></a></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Jumlah Mesin </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->jumlah_mesin?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Asal Negara </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->asal_negara?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Pelabuhan Bongkar </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->pelabuhan_bongkar?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Pelabuhan Muat </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->pelabuhan_muat?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Sumber Pembiayaan </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->sumber_pembiayaan?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Nama Produk </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->nama_produk?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Jumlah Produk </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->jumlah_produk?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Nilai Produk </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->nilai_produk?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name"> Penyerapan Tenaga Kerja </div>

                                                                    <div class="profile-info-value">
                                                                        <span><?=$value->penyerapan_tenaga_kerja?></span>
                                                                    </div>
                                                                </div>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php endforeach?>


                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="widget-box ui-sortable-handle" style="margin-top: 20px;" id="widget-box-1">
                        <div class="widget-header">
                            <h4 class="widget-title">Histori Catatan</h4>
                        </div>

                        <div class="widget-body">
                            <div class="widget-main" style="font-size: medium;">
                            <?php foreach ($data_history as $key => $value): ?> 
                            
                                <div class="timeline-container">
                                    <div class="timeline-label">
                                        <span class="label label-primary arrowed-in-right label-lg">
                                            <b><?php echo($value['tanggal'])?></b>
                                        </span>
                                    </div>

                                    <div class="timeline-items">
                                    <?php foreach ($value['data'] as $key => $data): ?> 
                                    
                                        <div class="timeline-item clearfix">
                                            <div class="timeline-info">
                                                <img alt="Susan't Avatar" src="<?= base_url() ?>assets/images/avatars/user.jpg">
                                            </div>

                                            <div class="widget-box transparent">
                                                <div class="widget-header widget-header-small">
                                                    <h4 class="widget-title smaller">
                                                        <a href="#" class="blue"> <?=$data->nama_user?> </a>
                                                    </h4>

                                                    <span class="widget-toolbar no-border">
                                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                                        <?=$data->jam?> WIB
                                                    </span>


                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main">
                                                        <div style="font-size: 15px;font-weight: 700;margin-bottom: 5px;margin-left: -13px;" class="col-lg-12 text-grey-m2 text-left text-lg-left">
                                                            <i class="fas fa-file-alt"></i>
                                                            Deskripsi:
                                                        </div>
                                                        <?=$data->note?>
                                                        <div class="space-6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <?php endforeach?>

                                    </div><!-- /.timeline-items -->
                                </div>
                            <?php endforeach?>

                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<script src="<?= base_url() ?>assets/js/chosen.jquery.min.js"></script>

<script>
    $(".chosen-select").chosen();
</script>

<script>
    /***************/
    $('.show-details-btn').on('click', function(e) {
        e.preventDefault();
        $(this).closest('tr').next().toggleClass('open');
        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
    });
    /***************/
</script>