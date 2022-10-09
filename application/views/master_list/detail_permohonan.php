<div role="main" class="main-content">
    <div class="page-content">
        <div class="page-header pb-2 flex-column flex-sm-row align-items-start align-items-sm-center">
            <h1 class="page-title text-primary-d2">
                Detail Permohonan
            </h1>
            <button onclick="history.back()" class="btn btn-secondary btn-h-purple btn-a-purple mb-2px" style="left: 595px;"><i class="fa fa-reply text-110 mr-1"></i> Kembali </button>

            <div class="page-tools mt-3 mt-sm-0 mb-sm-n1"></div>
        </div>
        <div class="mt-4 mx-md-2 border-t-1 brc-secondary-l1">
            <div id="table-header" class="d-none justify-content-between px-2 py-25 border-b-1 brc-secondary-l1">
                <div>
                    Results for <span class="text-600 text-primary-d1">"Latest Employees"</span>
                    <small class="text-grey-m2">(with reorderable columns)</small>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Lembaga
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <span>Nama Lembaga</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_lembaga->nama_lembaga ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Alamat Lembaga</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_lembaga->alamat_lembaga ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Nilai Investasi</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_lembaga->nilai_investasi ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>NPWP</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_lembaga->npwp ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2   ">
                            <span>Jumlah Pekerja</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_lembaga->jumlah_pekerja ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title">
                        Data Permohonan
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-2">
                            <span>ID Rekomendasi</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold">#<?= $data_permohonan->id_formulir ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Alasan Permohonan</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->alasan_permohonan ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Nomor Surat Permohonan</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->nomor_surat_permohonan ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Dokumen Surat Permohonan</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><a href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_surat_permohonan ?>" target="_blank" rel="noopener noreferrer"><?= $data_permohonan->dokumen_surat_permohonan ?></a></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2   ">
                            <span>Nama Pemohon</span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->nama_pemohon ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Nomor Izin Usaha Industri </span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->nomor_izin_usaha_industri ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Dokumen Izin Usaha </span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><a href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_izin_usaha ?>" target="_blank" rel="noopener noreferrer"><?= $data_permohonan->dokumen_izin_usaha ?></a></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Nomor Induk Berusaha </span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->nomor_induk_berusaha ?></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>Dokumen Induk Berusaha </span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><a href="<?= base_url('media/') ?><?= $data_permohonan->dokumen_induk_berusaha ?>" target="_blank" rel="noopener noreferrer"><?= $data_permohonan->dokumen_induk_berusaha ?></a></span>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <span>KBLI </span>
                        </div>
                        <div class="col-9">
                            : <span class="text-left font-weight-bold"><?= $data_permohonan->KBLI ?></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title">
                        Daftar Produk
                    </h5>
                </div>
                <div class="card-body">
                    <table id="simple-table" class="table table-bordered table-bordered-x table-hover text-dark-m2">
                        <thead class="text-dark-m3 bgc-grey-l4">
                            <tr>
                                <th class="text-center pr-0">
                                    <span class="d-md-none"><i class="fa fa-plus text-sm"></i></span>
                                    <span class="d-none d-md-inline-block">Details</span>
                                </th>
                                <th>Nama Mesin</th>
                                <th>Merk Mesin</th>
                                <th>HS Code</th>
                                <th>Nilai Mesin</th>
                                <th>Jumlah Mesin</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($data_produk as $key => $value) : ?>
                                <tr class="d-style bgc-h-default-l3">
                                    <td class="text-center pr-0">
                                        <div class="action-buttons">
                                            <a href="#" data-toggle="collapse" data-target="#table-detail-<?= $key ?>" class="text-success text-110 px-2" title="Show Details"><i class="fa fa-angle-double-down"></i> <span class="sr-only">Details</span></a>
                                        </div>
                                    </td>

                                    <td><?= $value->nama_mesin ?></td>
                                    <td><?= $value->merek_mesin ?></td>
                                    <td><?= $value->hs_code ?></td>
                                    <td><?= $value->nilai_mesin ?></td>
                                    <td>
                                        <?= $value->jumlah_mesin ?>
                                    </td>
                                </tr>

                                <tr class="border-0 detail-row bgc-white">
                                    <td colspan="8" class="p-0 border-none">
                                        <div class="table-detail collapse" id="table-detail-<?= $key ?>">
                                            <div class="row">
                                                <div class="col-12 col-md-10">
                                                    <div class="alert bgc-grey-l4 border-none border-l-4 brc-primary-m1 radius-0 mb-0">
                                                        <h5 class="text-primary-m2">Produk Details</h5>
                                                        <div class="bgc-white px-1 bo1rder-1 brc-secondary-l2 radius-1">
                                                            <table class="table table table-striped-info table-borderless">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Kegunaan</td>
                                                                        <td class="text-secondary-d2"><?= $value->kegunaan ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Spesifikasi</td>
                                                                        <td class="text-secondary-d2 text-wrap"><?= $value->spesifikasi ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Dokumen Spesifikasi</td>
                                                                        <td class="text-secondary-d2"><a href="<?= base_url('media/') ?><?= $value->dokumen_spesifikasi ?>" target="_blank" rel="noopener noreferrer"><?= $value->dokumen_spesifikasi ?></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Umur Teknis Mesin</td>
                                                                        <td class="text-secondary-d2"><?= $value->umur_teknis_mesin ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Foto Mesin</td>
                                                                        <td class="text-secondary-d2"><a href="<?= base_url('media/') ?><?= $value->foto_mesin ?>" target="_blank" rel="noopener noreferrer"><?= $value->foto_mesin ?></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Jumlah Mesin</td>
                                                                        <td class="text-secondary-d2"><?= $value->jumlah_mesin ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Asal Negara</td>
                                                                        <td class="text-secondary-d2"><?= $value->asal_negara ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Pelabuhan Bongkar</td>
                                                                        <td class="text-secondary-d2"><?= $value->pelabuhan_bongkar ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Pelabuhan Muat</td>
                                                                        <td class="text-secondary-d2"><?= $value->pelabuhan_muat ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Sumber Pembiayaan</td>
                                                                        <td class="text-secondary-d2"><?= $value->sumber_pembiayaan ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Nama Produk</td>
                                                                        <td class="text-secondary-d2"><?= $value->nama_produk ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Jumlah Produk</td>
                                                                        <td class="text-secondary-d2"><?= $value->jumlah_produk ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Nilai Produk</td>
                                                                        <td class="text-secondary-d2"><?= $value->nilai_produk ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-95 text-default-d3">Penyerapan Tenaga Kerja</td>
                                                                        <td class="text-secondary-d2"><?= $value->penyerapan_tenaga_kerja ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>


                    </table>
                </div>

            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title">
                        Histori Catatan
                    </h5>
                </div>
                <div class="card-body">
                    <div class="tab-pane px-md-2  active" id="profile-tab-timeline">
                        <?php foreach ($data_history as $key => $value) : ?>

                            <div class="  text-grey-m1 text-95">
                                <div class="mt-4 mb-2">
                                    <span class="badge badge-info ml-n1" style="font-size: 18px;"><?php echo ($value['tanggal']) ?></span>
                                </div>

                                <div class="mt-1 pl-1 pos-rel">
                                    <div class="position-tl h-90 border-l-2 brc-secondary-l1 ml-2 ml-lg-25 mt-2"></div>
                                    <?php foreach ($value['data'] as $key => $data) : ?>

                                        <div class="row pos-rel mt-3">
                                            <div class="position-tl mt-1 ml-25 w-2 h-2 bgc-white radius-round border-3 brc-success-m1"></div>

                                            <div class="col-4 ml-4  ml-lg-0 text-grey-m2 text-left text-lg-left" style="left: 30px;font-size: 15px;font-weight: 700;margin-bottom: 10px;">
                                                <i class="fas fa-user"></i>
                                                <span style="text-decoration: underline; "> <?= $data->nama_user ?></span>
                                                <small style="margin-left: 30px;">
                                                    <i class="far fa-clock"></i>
                                                    <?= $data->jam ?> WIB
                                                </small>
                                            </div>
                                            <div style="left: 30px;font-size: 15px;font-weight: 700; margin-bottom: 5px;" class="col-lg-12 text-grey-m2 text-left text-lg-left" style="left: 30px;">
                                                <i class="fas fa-file-alt"></i>
                                                Deskripsi:
                                            </div>

                                            <div class="col-12  text-grey-m2 text-left text-lg-left" style="left: 30px;">
                                                <?= $data->note ?>
                                            </div>
                                        </div>
                                    <?php endforeach ?>

                                    <div class="row pos-rel mt-3">

                                        <div style="left: 30px;font-size: 15px;font-weight: 700;margin-bottom: 30px;" class="col-4 ml-4 col-lg-2 ml-lg-0 text-grey-m2 text-left text-lg-left" style="left: 30px;">
                                            <span style="text-decoration: underline; "> </span>
                                            <small style="margin-left: 30px;">
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php if ($is_done == 'done'):?> 
                            <h5 class="alert alert-success text-center">
                                Proses Pengajuan Permohonan Selesai
                            </h5>
                        <?php endif ?>
                    </div>
                </div>
            </div>

            <?php if ($access_to_action) : ?>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="card-title">
                            Disposisi/ Catatan/ Laporan Permohonan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                        
                            <form action="<?= base_url('master-list/disposisi') ?>" method="post">
                                <input type="hidden" value="<?= $this->input->get('ref') ?>" name="ref">
                                <?php if ($acc_dirjen == 'pending') : ?>
                                    <label for="form-field-select-1">Setujui Permohonan?</label>
                                    <select name="acc_dirjen" class="form-control" id="acc_dirjen">
                                        <option value=""></option>
                                        <option value="true">Ya</option>
                                        <option value="false">Tidak</option>

                                    </select>
                                <?php endif ?>
                               
                                <?php if ($this->session->userdata('level_user') != 'sub_koordinator') : ?>
                                    <label style="margin-top: 15px;" for="form-field-select-1">Disposisi ke <small>(Silakan kosongi form disposisi jika ingin Lapor Atasan)</small></label>
                                    <select required name="disposisi" class="form-control" id="disposisi">
                                        <option value=""></option>
                                        <?php foreach ($group_disposisi as $key => $value) : ?>
                                            <option value="<?= $value->id_user ?>"><?= $value->nama_user ?></option>
                                        <?php endforeach ?>
                                        
                                    </select>
                                <?php endif ?>

                                <label style="margin-top: 15px;" for="form-field-select-1">Catatan <span style="color: red;">*</span></label>
                                <textarea id="summernote" name="note"></textarea>
                                <div class="my-5 border-t-1 brc-grey-l1 bgc-grey-l3 py-3">
                                    <div class="offset-md-3 col-md-9">
                                        <button id="btn-submit" class="btn btn-info" type="submit">
                                            <i class="fa fa-check mr-1"></i>
                                            Disposisi
                                        </button>
                                        
                                        <?php if ($step_lapor_atasan): ?>
                                            <button class="btn btn-secondary" type="submit">
                                                <i class="fas fa-arrow-up"></i>
                                                Lapor Atasan
                                            </button>
                                            <script>
                                                $('#disposisi').prop('required', false);
                                            </script>

                                        <?php else:?>
                                            <button style="cursor: not-allowed; pointer-events: all !important;" disabled class="btn btn-secondary" type="submit">
                                                <i class="fas fa-arrow-up"></i>
                                                Lapor Atasan
                                            </button>

                                        <?php endif ?> 
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            <?php else : ?>
                <div class="card mt-3">
                    <div class="card-header">
                        <h5 class="card-title">
                            Disposisi/ Catatan/ Laporan Permohonan
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="col-12">

                            <form action="<?= base_url('master-list/disposisi') ?>" method="post">
                                <input type="hidden" value="<?= $this->input->get('ref') ?>" name="ref">
                                <?php if ($this->session->userdata('level_user') != 'sub_koordinator') : ?>
                                    <label for="form-field-select-1">Disposisi ke</label>
                                    <select disabled required name="disposisi" class="form-control" id="disposisi">
                                        <option value=""></option>
                                        <?php foreach ($group_disposisi as $key => $value) : ?>
                                            <option value="<?= $value->id_user ?>"><?= $value->nama_user ?></option>
                                        <?php endforeach ?>

                                    </select>
                                <?php endif ?>

                                <label style="margin-top: 15px;" for="form-field-select-1">Catatan</label>
                                <textarea disabled required id="summernote" name="note"></textarea>
                                <div class="my-5 border-t-1 brc-grey-l1 bgc-grey-l3 py-3">
                                    <div class="offset-md-3 col-md-9">
                                        <button style="cursor: not-allowed; pointer-events: all !important;" disabled class="btn btn-info" type="submit">
                                            <i class="fa fa-check mr-1"></i>
                                            Disposisi
                                        </button>


                                        <button style="cursor: not-allowed; pointer-events: all !important;" class="btn btn-secondary" disabled type="submit">
                                            <i class="fas fa-arrow-up"></i>
                                            Lapor Atasan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

                <script>
                    $("#disposisi").prop("readonly", true);
                    $('#summernote').summernote('disable');
                </script>
            <?php endif ?>



        </div>


    </div><!-- /.page-content -->
</div>

<script>
    $('#acc_dirjen').on('change', function() {
        if (this.value == 'true') {
            $("#btn-submit").html(`<i class="fa fa-check mr-1"></i>Selesai`);
        } else {
            $("#btn-submit").html(`<i class="fa fa-check mr-1"></i>Disposisi`);

        }
    });
</script>

<script>
    jQuery(function($) {
        var tableId = '#datatable';
        var tableWapperId = '#datatable_wrapper';
        var tableHeader = '#table-header';


        $.extend(true, $.fn.dataTable.defaults, {
            dom: "<'row'<'col-12 col-sm-6'l><'col-12 col-sm-6 text-right table-tools-col'f>" +
                "<'row'<'col-12'tr>" +
                "<'row'<'col-12 col-md-5'i><'col-12 col-md-7'p>",
            renderer: 'bootstrap'
        });


        var $_table = $(tableId).DataTable({

            colReorder: {
                //disable column reordering for first and last columns
                fixedColumnsLeft: 1,
                fixedColumnsRight: 1
            },

            //"sDom": 'BRfrtlip',

            classes: {
                sLength: "dataTables_length text-left w-auto",
            },


            buttons: {
                dom: {
                    button: {
                        className: 'btn' //remove the default 'btn-secondary'
                    },
                    container: {
                        className: 'dt-buttons btn-group bgc-white-tp2 text-right w-auto'
                    }
                },

                buttons: [{
                        "extend": "colvis",
                        "text": "<i class='far fa-eye text-125 text-dark-m2'></i> <span class='d-none'>Show/hide columns</span>",
                        "className": "btn-sm btn-outline-info btn-h-outline-primary btn-a-outline-primary",
                        columns: ':not(:first)'
                    },

                    {
                        "extend": "copy",
                        "text": "<i class='far fa-copy text-125 text-purple'></i> <span class='d-none'>Copy to clipboard</span>",
                        "className": "btn-sm btn-outline-info btn-h-outline-primary btn-a-outline-primary"
                    },

                    {
                        "extend": "csv",
                        "text": "<i class='fa fa-database text-125 text-success-m2'></i> <span class='d-none'>Export to CSV</span>",
                        "className": "btn-sm btn-outline-info btn-h-outline-primary btn-a-outline-primary"
                    },

                    {
                        "extend": "print",
                        "text": "<i class='fa fa-print text-125 text-orange-d1'></i> <span class='d-none'>Print</span>",
                        "className": "btn-sm btn-outline-info btn-h-outline-primary",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                    }
                ]

            },


            //first and last column are not sortable
            columnDefs: [{
                    orderable: false,
                    className: null,
                    targets: 0
                },
                {
                    orderable: false,
                    className: null,
                    targets: -1
                }
            ],

            //multiple row selection
            select: {
                style: 'multis'
            },


            order: [], //no specific initial ordering

            language: {
                search: '<i class="fa fa-search pos-abs mt-2 ml-2 text-blue-m2"></i>',
                searchPlaceholder: " Search Employees..."
            }
        });

        //specify position of table buttons
        $('.table-tools-col') //specified above in $.fn.dataTable.defaults
            .append($_table.buttons().container())
            //move searchbox into table header
            .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-4 radius-round')
            //and add a "plus" button
            .end().append('<button data-rel="tooltip" type="button" class="btn radius-round btn-outline-primary border-2 btn-sm ml-2" title="Add New"><i class="fa fa-plus"></i></button>');


        //var defaultColvisAction = $_table.button(0).action();
        //$_table.button(0).action(function (e, dt, button, config) {
        //	defaultColvisAction(e, dt, button, config);
        //});

        //add/remove bgc-h-* class when selecting/deselecting rows
        var _highlightSelectedRow = function(row) {
            row.querySelector('input[type=checkbox]').checked = true;
            row.classList.add('bgc-success-l3');
            row.classList.remove('bgc-h-default-l4');
        }
        var _unhighlightDeselectedRow = function(row) {
            row.querySelector('input[type=checkbox]').checked = false;
            row.classList.remove('bgc-success-l3');
            row.classList.add('bgc-h-default-l4');
        }
        $_table.on('select', function(e, dt, type, index) {
            if (type == 'row') {
                var row = $_table.row(index).node();
                _highlightSelectedRow(row);
            }
        }).on('deselect', function(e, dt, type, index) {
            if (type == 'row') {
                var row = $_table.row(index).node();
                _unhighlightDeselectedRow(row);
            }
        });

        //when clicking the checkbox in table header, select/deselect all rows
        $(tableId).on('click', 'th input[type=checkbox]', function() {
            if (this.checked) {
                $_table.rows().select().every(function() {
                    _highlightSelectedRow(this.node());
                });
            } else {
                $_table.rows().deselect().every(function() {
                    _unhighlightDeselectedRow(this.node());
                });
            }
        });


        //add/remove bgc-h-* class to TH when soring columns
        var previousTh = null;
        var toggleTH_highlight = function(th) {
            th.classList.toggle('bgc-yellow-l1');
            th.classList.toggle('bgc-h-default-l3');
            th.classList.toggle('text-blue-d2');
        }
        $(tableId).on('click', 'th:not(.sorting_disabled)', function() {
            if (previousTh != null) toggleTH_highlight(previousTh); //unhighlight previous TH
            toggleTH_highlight(this);
            previousTh = this;
        });

        //don't select row when clicking on the edit icon
        $('a[data-action=edit').on('click', function(e) {
            e.preventDefault();
            e.stopPropagation(); //don't select
        });

        //highlight DataTable header and footer
        //also already done in CSS, but you can use custom colors here
        //$(tableWapperId).find('> .row').eq(0).addClass('bgc-primary-l4').end().eq(2).addClass('bgc-primary-l4');


        //enable tooltips
        setTimeout(function() {
            $('.dt-buttons button').each(function() {
                var div = $(this).find('span').first();
                if (div.length == 1) $(this).tooltip({
                    container: 'body',
                    title: div.parent().text()
                });
                else $(this).tooltip({
                    container: 'body',
                    title: $(this).text()
                });
            });
            $('[data-rel=tooltip').tooltip({
                container: 'body'
            });
        }, 0);



    });
</script>

<script>
    jQuery(function($) {

        //update icons
        $.extend($.summernote.options.icons, {
            'align': 'fa fa-align',
            'alignCenter': 'fa fa-align-center',
            'alignJustify': 'fa fa-align-justify',
            'alignLeft': 'fa fa-align-left',
            'alignRight': 'fa fa-align-right',
            'indent': 'fa fa-indent',
            'outdent': 'fa fa-outdent',
            'arrowsAlt': 'fa fa-arrows-alt',
            'bold': 'fa fa-bold',
            'caret': 'fa fa-caret-down text-grey-m3 ml-1',
            'circle': 'fa fa-circle',
            'close': 'fa fa fa-close',
            'code': 'fa fa-code',
            'eraser': 'fa fa-eraser',
            'font': 'fa fa-font',
            'italic': 'fa fa-italic',
            'link': 'fa fa-link text-success-m1',
            'unlink': 'fas fa-unlink',
            'magic': 'fa fa-magic text-brown-m3',
            'menuCheck': 'fa fa-check',
            'minus': 'fa fa-minus',
            'orderedlist': 'fa fa-list-ol text-blue',
            'pencil': 'fa fa-pencil',
            'picture': 'far fa-image text-purple',
            'question': 'fa fa-question',
            'redo': 'fa fa-repeat',
            'square': 'fa fa-square',
            'strikethrough': 'fa fa-strikethrough',
            'subscript': 'fa fa-subscript',
            'superscript': 'fa fa-superscript',
            'table': 'fa fa-table text-danger-m2',
            'textHeight': 'fa fa-text-height',
            'trash': 'fa fa-trash',
            'underline': 'fa fa-underline',
            'undo': 'fa fa-undo',
            'unorderedlist': 'fa fa-list-ul text-blue',
            'video': 'far fa-file-video text-pink-m2'
        });

        $('#summernote').summernote({
            height: 250,
            minHeight: 150,
            maxHeight: 400
        });



        //lightweight wysiwyg editor
        $('#bootstrap-editor').aceWysiwyg({
            toolbarStyle: 2,
            toolbar: [
                'font',
                null,
                'fontSize',
                null,
                'bold',
                'italic',
                null,
                'insertunorderedlist',
                'insertorderedlist',
                null,
                'createLink',
                'unlink',
                null,
                'insertImage',
                null,
                'foreColor',
                'backColor',
                null,
                'undo',
                'redo',
                null,
                'viewSource'
            ],


            //toolbarPlacement: function(toolbarHtml) {
            //return $(toolbarHtml).appendTo('.card-header.bgc-success-tp2')
            //}
        });



        //markdown editor
        $('#markdown-editor').markdown({
            iconlibrary: 'fa'
        }).each(function() {
            $(this).parent().find('.btn')
                .addClass('btn-xs bg-white btn-outline-secondary btn-h-outline-info btn-a-outline-info')
                .removeClass('btn-default');

            $(this).parent().find('.btn[title~="Heading"] > .fa').attr('class', 'fas fa-heading');
            $(this).parent().find('.btn[title~="Image"] > .fa').attr('class', 'far fa-image');

            $(this).parent().find('.md-control-fullscreen > .fa , .exit-fullscreen > .fa').addClass('text-orange-m1 text-110');
        });


    });
</script>