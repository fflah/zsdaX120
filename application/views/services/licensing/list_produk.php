<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">List Produk</a>
                </li>
            </ul><!-- /.breadcrumb -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    List Produk
                </h1>
                <a href="<?= base_url('services/licensing/formulir-produk?ref=') ?><?=$this->input->get('ref')?>" style="margin-top:10px;" class="btn btn-info">
                    <i class="ace-icon fa fa-pencil align-top bigger-125"></i>
                    Tambah Produk
                </a>
                <a href="<?= base_url('services/licensing') ?>" style="margin-top:10px;float: right;" class="btn">
                    <i class="ace-icon fa fa-reply  align-top bigger-125"></i>
                    Kembali
                </a>
            </div><!-- /.page-header -->
            <div class="well well-lg">
                <h4 class="blue">Petunjuk</h4>
                <ol>
                    <li>Saat ini anda sudah berhasil membuat data permohonan</li>
                    <li>Langkah selanjutnya silakan menambahkan data produk anda kedalam permohonan dengan cara menekan tombol <b>Tambah produk</b> </li>
                    <li>Kemudian Silakan isi dengan langkap dan teliti formulir produk</li>
                    <li>Selesai.</li>
                </ol>
            </div>
            <?php if($this->session->flashdata('success')): ?>
                
            <?php endif?>
            <div class="row">
                <div class="col-sm-12">
                    <table id="myTable" class="table  table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mesin</th>
                                <th>Merk Mesin</th>
                                <th>HS Code</th>
                                <th>Nilai Mesin</th>
                                <th>Jumlah Mesin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($data_produk as $key => $value): ?> 
                                <tr>
                                    <td><?=$key+1?></td>
                                    <td><?=$value->nama_mesin?></td>
                                    <td><?=$value->merek_mesin?></td>
                                    <td><?=$value->hs_code?></td>
                                    <td><?=$value->nilai_mesin?></td>
                                    <td><?=$value->jumlah_mesin?></td>
                                    <td>
    
                                        <div class="hidden-sm hidden-xs action-buttons">
                                            <a href="<?= base_url('services/licensing/detail-produk?produk=') ?><?=encode_id($value->id_produk)?>" class="btn btn-xs btn-info">
                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                            </a>
                                            <a href="<?= base_url('services/licensing/formulir-produk?ref=') ?><?=$this->input->get('ref')?>&produk=<?=encode_id($value->id_produk)?>" class="btn btn-xs btn-warning">
                                                <i class="ace-icon fa fa-pencil bigger-120"></i>
                                            </a>
                                            <button onclick="getDeleteData('<?=encode_id($value->id_produk)?>')" class="btn btn-xs btn-danger">
                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                            </button>
                                        </div>
    
                                        <div class="hidden-md hidden-lg">
                                            <div class="inline pos-rel">
                                                <a class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                    <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                </a>
    
                                                <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                    <li>
                                                        <a href="<?= base_url('services/licensing/detail-produk') ?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                                                            <span class="blue">
                                                                <i class="ace-icon fa fa-eye bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <a href="<?= base_url('services/licensing/formulir-produk') ?>" class="tooltip-success" data-rel="tooltip" title="" data-original-title="Edit">
                                                            <span class="green">
                                                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                            </span>
                                                        </a>
                                                    </li>
    
                                                    <li>
                                                        <button onclick="getDeleteData('<?=encode_id($value->id_produk)?>')" class="tooltip-error" data-rel="tooltip" title="" data-original-title="Delete">
                                                            <span class="red">
                                                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                            </span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach?>
                        </tbody>
                    </table>
                </div>

                <div class="col-xs-12">
                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>


                </div>
            </div>

        </div><!-- /.page-content -->
    </div>
</div>

<div class="modal fade text-left" id="modal_hero" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×
                </button>
                <form action="<?= base_url('services/licensing/delete-produk') ?>" method="GET">
                    <input type="hidden" id="ref" name="ref">
                    <input type="hidden" id="produk" name="produk">
                    <div class="form-group">
                        <h4 for="exampleInputEmail1">Anda yakin ingin menghapus data ini?</h4>

                    </div>
                    <hr>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                <button id="btn_update" type="submit" class="btn btn-danger">OK</button>
            </div>
            </form>
        </div>
    </div>
</div>




<?php if ($this->session->flashdata('message')) : ?>
    <script>
        $.gritter.add({
            title: 'Data Behasil diupdate!',
            sticky: false,
            class_name: 'gritter-success gritter-light'
        });
    </script>
<?php endif ?>
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable();
    })
</script>
<script>
    function validasi(id) {
        $('#modal_hero').modal('show');
        $('#idpeserta').val(id)
    }

    function getDeleteData(produk) {
        $('#ref').val("<?=$this->input->get('ref')?>")
        $('#produk').val(produk)
        $('#modal_hero').modal('show');

    }
</script>