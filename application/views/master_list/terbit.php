<div role="main" class="main-content">
    <div class="page-content">
        <div class="page-header pb-2 flex-column flex-sm-row align-items-start align-items-sm-center">
            <h1 class="page-title text-primary-d2">
                Sudah Terbit
                
            </h1>

            <div class="page-tools mt-3 mt-sm-0 mb-sm-n1"></div>
        </div>
        <div class="mt-4 mx-md-2 border-t-1 brc-secondary-l1">
            <div id="table-header" class="d-none justify-content-between px-2 py-25 border-b-1 brc-secondary-l1">
                <div>
                    Results for <span class="text-600 text-primary-d1">"Latest Employees"</span>
                    <small class="text-grey-m2">(with reorderable columns)</small>
                </div>
            </div>

            <div class="table-responsive-md">
                <table id="datatable" class="table table-border-y text-dark-m2 text-95 border-y-1 brc-secondary-l1">
                    <thead class="text-secondary-m2 text-uppercase text-85">
                        <tr>
                            <th class="border-0 bgc-h-default-l3">No</th>
                            <th class="border-0 bgc-h-default-l3">Perusahaan</th>
                            <th class="border-0 bgc-h-default-l3">Jenis Permohonan</th>
                            <th class="border-0 bgc-h-default-l3">No Surat</th>
                            <th class="border-0 bgc-h-default-l3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="d-style bgc-h-default-l4">
                            <td class="text-600 text-grey-d1">61</td>
                            <td>
                                <span class="h5  text-primary">PT Rainbow Tubulan Indonesian</span>
                                <div class="text-95 text-secondary">
                                    Surat No. 134/121/41/21214/54/AS
                                </div>
                                <div class="text-95 text-secondary">
                                    Tgl. 22 January 2022
                                </div>
                            </td>
                            <td class="text-grey">2011/04/25</td>
                            <td class="text-grey">
                                Rekom Gas Bumi Dude
                                <div><a href=""><span class='badge badge-warning badge-sm'>Download PDF</span></a></div>
                            </td>
                            
                            <td>
                                <a data-rel="tooltip" data-action="edit" title="Edit" href="#" class=""><i class="fa fa-edit text-blue-m1 text-120"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </div><!-- /.page-content -->
    <!-- /.page-content -->


</div>



<script>
    
jQuery(function($) {
  var tableId = '#datatable';
  var tableWapperId = '#datatable_wrapper';
  var tableHeader = '#table-header';


  $.extend( true, $.fn.dataTable.defaults, {
    dom:
      "<'row'<'col-12 col-sm-6'l><'col-12 col-sm-6 text-right table-tools-col'f>>" +
      "<'row'<'col-12'tr>>" +
      "<'row'<'col-12 col-md-5'i><'col-12 col-md-7'p>>",
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

      buttons: [
        {
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
    columnDefs: [
      {
        orderable: false,
        className: null,
        targets:   0
      },
      {
        orderable: false,
        className: null,
        targets:   -1
      }
    ],
    
    //multiple row selection
    select: {
      style: 'multis'
    },

    
    order: [],//no specific initial ordering

    language: {
      search: '<i class="fa fa-search pos-abs mt-2 ml-2 text-blue-m2"></i>',
      searchPlaceholder: " Search Permohonan..."
    }
  });

  //specify position of table buttons
  $('.table-tools-col' )//specified above in $.fn.dataTable.defaults
  .append( $_table.buttons().container() )
  //move searchbox into table header
  .find('.dataTables_filter').appendTo('.page-tools').find('input').addClass('pl-4 radius-round')
  //and add a "plus" button
  .end().append('');


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
  $_table.on('select', function (e, dt, type, index) {
    if ( type == 'row' ) {
      var row = $_table.row( index ).node();
      _highlightSelectedRow(row);
    }
  }).on('deselect', function (e, dt, type, index) {
    if ( type == 'row' ) {
      var row = $_table.row( index ).node();
      _unhighlightDeselectedRow(row);
    }
  });

  //when clicking the checkbox in table header, select/deselect all rows
  $(tableId).on('click', 'th input[type=checkbox]', function () {
    if(this.checked) {
      $_table.rows().select().every(function() {
        _highlightSelectedRow(this.node());
      });
    }
    else {
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
    $(tableId).on('click', 'th:not(.sorting_disabled)', function () {
      if(previousTh != null) toggleTH_highlight(previousTh);//unhighlight previous TH
      toggleTH_highlight(this);
      previousTh = this;
    });

    //don't select row when clicking on the edit icon
    $('a[data-action=edit').on('click', function(e) {
      e.preventDefault();
      e.stopPropagation();//don't select
    });

    //highlight DataTable header and footer
    //also already done in CSS, but you can use custom colors here
    //$(tableWapperId).find('> .row').eq(0).addClass('bgc-primary-l4').end().eq(2).addClass('bgc-primary-l4');


    //enable tooltips
    setTimeout(function() {
      $('.dt-buttons button').each(function() {
        var div = $(this).find('span').first();
        if(div.length == 1) $(this).tooltip({container: 'body', title: div.parent().text()});
        else $(this).tooltip({container: 'body', title: $(this).text()});
      });
      $('[data-rel=tooltip').tooltip({container: 'body'});
    }, 0);

  

});
</script>