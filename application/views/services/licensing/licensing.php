<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">e-Services</a>
                </li>
                <li>
                    <a href="#">e-Licensing</a>
                </li>
            </ul><!-- /.breadcrumb -->

        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    Daftar Permohonan
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <a class="btn btn-info" href="<?= base_url('services/licensing/formulir-pemohon') ?>">
                        <i class="ace-icon fa fa-pencil align-top bigger-125"></i>
                        Tambah Permohonan
                    </a>
                    <div class="clearfix">
                        <div class="pull-right tableTools-container"></div>
                    </div>
                    <div class="table-header">
                        Page untuk menambah data Permohonan
                    </div>

                    <!-- div.table-responsive -->

                    <!-- div.dataTables_borderWrap -->
                    <div>
                        <table id="myTable" class="table table-striped table-bordered table-hover" width="100%">
                            <thead>
                                <tr>
                                    <th>ID Berkas</th>
                                    <th>Tanggal Kirim</th>
                                    <th>Jenis Permohonan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($data_pemohon as $key => $value):?> 
                                    <tr onclick="window.location.href = '<?= base_url('services/licensing/detail-permohonan?ref=') ?><?=encode_id($value->id_formulir)?>'">
                                        <td><?=$value->id_formulir?></td>
                                        <td><?=$value->date_created?></td>
                                        <td><?=$value->alasan_permohonan?></td>
                                        <td><span style="color: black ;" class="label label-sm label-warning"><?=$value->status?></span></td>
                                        <td>
    
                                            <div class="hidden-sm hidden-xs action-buttons">
                                                <a href="<?= base_url('services/licensing/detail-permohonan?ref=') ?><?=encode_id($value->id_formulir)?>" class="btn btn-xs btn-info">
                                                    <i class="ace-icon fa fa-eye bigger-120"></i> Detail Ajuan
                                                </a>
                                                <a href="<?= base_url('services/licensing/list-produk?ref=') ?><?=encode_id($value->id_formulir)?>" class="btn btn-xs btn-danger">
                                                    <i class="ace-icon fa fa-eye bigger-120"></i> List Produk
                                                </a>
                                            </div>
    
                                            <div class="hidden-md hidden-lg">
                                                <div class="inline pos-rel">
                                                    <a class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                        <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                                    </a>
    
                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a href="<?= base_url('services/licensing/detail-permohonan?ref=') ?><?=encode_id($value->id_formulir)?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                                                                <span class="blue">
                                                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="<?= base_url('services/licensing/list-produk?ref=') ?><?=encode_id($value->id_formulir)?>" class="tooltip-info" data-rel="tooltip" title="" data-original-title="View">
                                                                <span class="blue">
                                                                    <i class="ace-icon fa fa-eye bigger-120"></i>
                                                                </span>
                                                            </a>
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
                </div>
            </div>

        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<!-- modal add -->
<div class="modal fade text-left" id="modal_add" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×
                </button>
                <form action="<?= base_url('setting/SpellKelas') ?>" method="POST">
                    <input type="hidden" id="action" value="add" name="action">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tingkatan</label>
                        <input type="text" name="tingkatan" id="tingkatan" class="form-control" style="height: 34px;"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" style="height: 34px;"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kuota Siswa</label>
                        <input type="number" name="kuota_siswa" id="kuota_siswa" class="form-control" style="height: 34px;"></input>
                    </div>
                    <hr>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                <button id="" type="submit" class="btn btn-info">OK</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal update -->
<div class="modal fade text-left" id="modal_edit" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×
                </button>
                <form action="<?= base_url('setting/SpellKelas') ?>" method="POST">
                    <input type="hidden" id="id_edit" name="id">
                    <input type="hidden" id="action" value="edit" name="action">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tingkatan</label>
                        <input type="text" id="tingkatan_edit" name="tingkatan" class="form-control" style="height: 34px;"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Kelas</label>
                        <input type="text" id="nama_kelas_edit" name="nama_kelas" class="form-control" style="height: 34px;"></input>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kuota Siswa</label>
                        <input type="number" id="kuota_siswa_edit" name="kuota_siswa" class="form-control" style="height: 34px;"></input>
                    </div>
                    <hr>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                <button id="" type="submit" class="btn btn-info">OK</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal delete -->
<div class="modal fade text-left" id="modal_hero" tabindex="-1" aria-labelledby="myModalLabel1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true" style="margin-top: -10px;">×
                </button>
                <form action="<?= base_url('setting/SpellKelas') ?>" method="POST">
                    <input type="hidden" id="action" value="del" name="action">
                    <input type="hidden" name="id" id="idDelete">
                    <div class="bootbox-body">Are you sure?</div>
            </div>
            <div class="modal-footer">
                <button data-bb-handler="cancel" type="button" class="btn btn-default">Cancel</button>
                <button data-bb-handler="confirm" id="btn_delete" type="submit" class="btn btn-danger">OK</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var table = $('#myTable').DataTable();

    })
</script>
<script>
    function getDetele(id) {
        $('#modal_hero').modal('show');
        $('#idDelete').val(id)

    }

    function getUpdate(data) {
        const data_kelas = JSON.parse(data)
        $('#tingkatan_edit').val(data_kelas.tingkatan)
        $('#nama_kelas_edit').val(data_kelas.nama_kelas)
        $('#kuota_siswa_edit').val(data_kelas.kuota_siswa)
        $('#id_edit').val(data_kelas.id)
        $('#modal_edit').modal('show');

    }
</script>

<?php if ($this->session->flashdata('add')) : ?>
    <script>
        $.gritter.add({
            title: 'Data kelas berhasil ditambah!',
            sticky: false,
            class_name: 'gritter-success gritter-light'
        });
    </script>
<?php elseif ($this->session->flashdata('del')) : ?>
    <script>
        $.gritter.add({
            title: 'Data kelas berhasil dihapus!',
            sticky: false,
            class_name: 'gritter-success gritter-light'
        });
    </script>
<?php elseif ($this->session->flashdata('edit')) : ?>
    <script>
        $.gritter.add({
            title: 'Data kelas berhasil diperbarui!',
            sticky: false,
            class_name: 'gritter-success gritter-light'
        });
    </script>

<?php endif ?>