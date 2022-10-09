<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">Profile Perusahaan</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Profile Perusahaan
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="search-area well well-sm">
                        <div class="search-filter-header bg-primary">
                            <h5 class="smaller no-margin-bottom">
                                <i class="ace-icon glyphicon glyphicon-list light-green bigger-130"></i>&nbsp; Dibawah ini merupakan detail data perusahaan
                            </h5>
                        </div>

                        <div class="space-10"></div>

                        <div class="hr hr-dotted"></div>
                        <h4><i class="ace-icon fa fa-folder-open"></i> <?=$perusahaan->nama_lembaga?></h4>                        
                            <div class="profile-user-info profile-user-info-striped">
                                <div class="profile-info-row">
                                    <div class="profile-info-name" style="width: 154px;"> Alamat Perusahaan </div>

                                    <div class="profile-info-value">
                                        <span id="first_name"><?=$perusahaan->alamat_lembaga?></span>
                                    </div>
                                </div>
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Nilai Investasi </div>

                                    <div class="profile-info-value">
                                        <span id="last_name"><?=$perusahaan->nilai_investasi?></span>
                                    </div>
                                </div>                                    
                                
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> NPWP </div>

                                    <div class="profile-info-value">
                                        <span id="dateOfBirth"><?=$perusahaan->npwp?></span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Jumlah Tenaga Kerja</div>

                                    <div class="profile-info-value">
                                        <span id="createdBy"><?=$perusahaan->jumlah_pekerja?></span>
                                    </div>
                                </div>
                            </div>                                
                        <div class="space-4"></div>
                    </div>
                </div>
                
                <div class="col-xs-12">
                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>


                </div>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->
<script>
    CKEDITOR.replace('text');
</script>

<?php if ($this->session->flashdata('message')) : ?>
    <script>
        $.gritter.add({
            title: 'Pengumuman berhasil diperbarui!',
            sticky: false,
            class_name: 'gritter-success gritter-light'
        });
    </script>
<?php endif ?>