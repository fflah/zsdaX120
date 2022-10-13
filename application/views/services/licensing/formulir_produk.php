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
                    Formulir Data Produk
                </h1>
                <a onclick="history.back()" style="margin-top:-33px;float: right;" class="btn">
                    <i class="ace-icon fa fa-reply  align-top bigger-125"></i>
                    Kembali
                </a>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->
                    <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="" role="form">
                        <input type="hidden" name="formulir_pemohon_id" value="<?=$id_permohonan?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Mesin </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input value="" required type="text" name="nama_mesin" id="nama_mesin" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Merek Mesin </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="merek_mesin" id="merek_mesin" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> HS Code </label>
                            <div class="col-sm-9">
                                <select id="hs_code" name="hs_code" class="chosen-select form-control" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                    <option value="">&nbsp;</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="8481.10.19">8481.10.19</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="8481.10.22">8481.10.22</option>
                                    <option value="8413.70.11">8413.70.11</option>
                                    <option value="8413.70.19">8413.70.19</option>
                                    <option value="8701.10.11">8701.10.11</option>
                                    <option value="8701.10.19">8701.10.19</option>
                                    <option value="8433.52.00">8433.52.00</option>
                                    <option value="8424.41.10">8424.41.10</option>
                                    <option value="8424.30.00">8424.30.00</option>
                                    <option value="8424.30.00">8424.30.00</option>
                                    <option value="8419.31.40">8419.31.40</option>
                                    <option value="8419.31.90">8419.31.90</option>
                                    <option value="8433.51.00">8433.51.00</option>
                                    <option value="8433.52.00">8433.52.00</option>
                                    <option value="8437.80.61">8437.80.61</option>
                                    <option value="8437.80.51">8437.80.51</option>
                                    <option value="8437.80.61">8437.80.61</option>
                                    <option value="8437.80.20">8437.80.20</option>
                                    <option value="8437.80.51">8437.80.51</option>
                                    <option value="8433.60.10">8433.60.10</option>
                                    <option value="8433.60.20">8433.60.20</option>
                                    <option value="8433.30.00">8433.30.00</option>
                                    <option value="8433.11.00">8433.11.00</option>
                                    <option value="8437.80.10">8437.80.10</option>
                                    <option value="4016.99.51">4016.99.51</option>
                                    <option value="8432.10.00">8432.10.00</option>
                                    <option value="8201.30.10">8201.30.10</option>
                                    <option value="8201.40.00">8201.40.00</option>
                                    <option value="8201.30.90">8201.30.90</option>
                                    <option value="8201.90.00">8201.90.00</option>
                                    <option value="8201.10.00">8201.10.00</option>
                                    <option value="8474.20.19">8474.20.19</option>
                                    <option value="8474.20.19">8474.20.19</option>
                                    <option value="8424.90.99">8424.90.99</option>
                                    <option value="8421.31.10">8421.31.10</option>
                                    <option value="8421.31.10">8421.31.10</option>
                                    <option value="8429.51.00">8429.51.00</option>
                                    <option value="8421.39.20">8421.39.20</option>
                                    <option value="8421.39.90">8421.39.90</option>
                                    <option value="8428.32.90">8428.32.90</option>
                                    <option value="8417.90.00">8417.90.00</option>
                                    <option value="8459.41.00">8459.41.00</option>
                                    <option value="8459.49.10">8459.49.10</option>
                                    <option value="8430.49.10">8430.49.10</option>
                                    <option value="8905.20.00">8905.20.00</option>
                                    <option value="8907.90.90">8907.90.90</option>
                                    <option value="8430.49.10">8430.49.10</option>
                                    <option value="8907.90.90">8907.90.90</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7304.29.90">7304.29.90</option>
                                    <option value="7304.29.90">7304.29.90</option>
                                    <option value="7304.24.90">7304.24.90</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7304.22.90">7304.22.90</option>
                                    <option value="7304.23.90">7304.23.90</option>
                                    <option value="7306.11.10">7306.11.10</option>
                                    <option value="7306.11.20">7306.11.20</option>
                                    <option value="7306.11.90">7306.11.90</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7306.11.10">7306.11.10</option>
                                    <option value="7306.11.20">7306.11.20</option>
                                    <option value="7306.11.90">7306.11.90</option>
                                    <option value="7307.11.10">7307.11.10</option>
                                    <option value="7307.11.90">7307.11.90</option>
                                    <option value="7307.19.00">7307.19.00</option>
                                    <option value="7307.21.10">7307.21.10</option>
                                    <option value="7307.21.90">7307.21.90</option>
                                    <option value="7307.22.10">7307.22.10</option>
                                    <option value="7307.22.90">7307.22.90</option>
                                    <option value="7307.91.10">7307.91.10</option>
                                    <option value="7307.91.90">7307.91.90</option>
                                    <option value="7307.92.10">7307.92.10</option>
                                    <option value="7307.92.90">7307.92.90</option>
                                    <option value="7307.93.10">7307.93.10</option>
                                    <option value="7307.93.90">7307.93.90</option>
                                    <option value="8413.30.90">8413.30.90</option>
                                    <option value="8413.70.11">8413.70.11</option>
                                    <option value="8413.70.19">8413.70.19</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8907.90.90">8907.90.90</option>
                                    <option value="8309.90.60">8309.90.60</option>
                                    <option value="8309.90.91">8309.90.91</option>
                                    <option value="8309.90.99">8309.90.99</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="8481.80.72">8481.80.72</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8905.20.00">8905.20.00</option>
                                    <option value="8905.20.00">8905.20.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7307.19.00">7307.19.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="8535.29.10">8535.29.10</option>
                                    <option value="8535.29.90">8535.29.90</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7307.19.00">7307.19.00</option>
                                    <option value="7307.19.00">7307.19.00</option>
                                    <option value="7307.99.10">7307.99.10</option>
                                    <option value="7307.99.90">7307.99.90</option>
                                    <option value="7312.10.99">7312.10.99</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8481.10.91">8481.10.91</option>
                                    <option value="8481.10.99">8481.10.99</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="4016.99.19">4016.99.19</option>
                                    <option value="8431.43.00">8431.43.00</option>
                                    <option value="8205.10.00">8205.10.00</option>
                                    <option value="8413.70.11">8413.70.11</option>
                                    <option value="8413.70.19">8413.70.19</option>
                                    <option value="8429.51.00">8429.51.00</option>
                                    <option value="8429.52.00">8429.52.00</option>
                                    <option value="8429.59.00">8429.59.00</option>
                                    <option value="8429.11.00">8429.11.00</option>
                                    <option value="8429.19.00">8429.19.00</option>
                                    <option value="8429.20.00">8429.20.00</option>
                                    <option value="8704.10.37">8704.10.37</option>
                                    <option value="8429.40.40">8429.40.40</option>
                                    <option value="8429.40.50">8429.40.50</option>
                                    <option value="8429.40.90">8429.40.90</option>
                                    <option value="8479.10.10">8479.10.10</option>
                                    <option value="8474.20.11">8474.20.11</option>
                                    <option value="8474.31.10">8474.31.10</option>
                                    <option value="8474.31.20">8474.31.20</option>
                                    <option value="8427.20.00">8427.20.00</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8426.11.00">8426.11.00</option>
                                    <option value="8426.19.30">8426.19.30</option>
                                    <option value="8426.20.00">8426.20.00</option>
                                    <option value="8428.10.31">8428.10.31</option>
                                    <option value="8428.10.39">8428.10.39</option>
                                    <option value="8428.10.39">8428.10.39</option>
                                    <option value="8428.90.90">8428.90.90</option>
                                    <option value="8428.10.31">8428.10.31</option>
                                    <option value="8428.40.00">8428.40.00</option>
                                    <option value="8479.71.00">8479.71.00</option>
                                    <option value="8479.79.00">8479.79.00</option>
                                    <option value="8514.90.90">8514.90.90</option>
                                    <option value="8514.90.90">8514.90.90</option>
                                    <option value="8514.90.90">8514.90.90</option>
                                    <option value="8417.90.00">8417.90.00</option>
                                    <option value="8514.90.90">8514.90.90</option>
                                    <option value="8417.90.00">8417.90.00</option>
                                    <option value="8413.50.31">8413.50.31</option>
                                    <option value="8413.50.32">8413.50.32</option>
                                    <option value="8413.50.40">8413.50.40</option>
                                    <option value="8413.50.90">8413.50.90</option>
                                    <option value="8413.60.31">8413.60.31</option>
                                    <option value="8413.60.32">8413.60.32</option>
                                    <option value="8413.60.40">8413.60.40</option>
                                    <option value="8413.60.90">8413.60.90</option>
                                    <option value="8413.70.11">8413.70.11</option>
                                    <option value="8413.70.19">8413.70.19</option>
                                    <option value="8413.70.31">8413.70.31</option>
                                    <option value="8413.70.39">8413.70.39</option>
                                    <option value="8413.70.42">8413.70.42</option>
                                    <option value="8413.70.43">8413.70.43</option>
                                    <option value="8413.70.49">8413.70.49</option>
                                    <option value="8413.70.51">8413.70.51</option>
                                    <option value="8413.70.59">8413.70.59</option>
                                    <option value="8413.70.91">8413.70.91</option>
                                    <option value="8413.70.99">8413.70.99</option>
                                    <option value="8414.80.90">8414.80.90</option>
                                    <option value="8414.59.30">8414.59.30</option>
                                    <option value="8414.59.41">8414.59.41</option>
                                    <option value="8414.59.49">8414.59.49</option>
                                    <option value="8421.11.00">8421.11.00</option>
                                    <option value="8421.19.10">8421.19.10</option>
                                    <option value="8421.19.90">8421.19.90</option>
                                    <option value="8421.21.11">8421.21.11</option>
                                    <option value="8421.21.22">8421.21.22</option>
                                    <option value="8421.29.20">8421.29.20</option>
                                    <option value="8421.91.90">8421.91.90</option>
                                    <option value="8421.99.94">8421.99.94</option>
                                    <option value="8417.10.00">8417.10.00</option>
                                    <option value="7310.29.91">7310.29.91</option>
                                    <option value="7310.29.99">7310.29.99</option>
                                    <option value="8419.31.30">8419.31.30</option>
                                    <option value="8419.31.40">8419.31.40</option>
                                    <option value="8419.31.90">8419.31.90</option>
                                    <option value="8419.32.10">8419.32.10</option>
                                    <option value="8419.32.20">8419.32.20</option>
                                    <option value="8419.39.11">8419.39.11</option>
                                    <option value="8419.39.19">8419.39.19</option>
                                    <option value="8419.39.20">8419.39.20</option>
                                    <option value="8404.10.11">8404.10.11</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8404.10.20">8404.10.20</option>
                                    <option value="8404.10.11">8404.10.11</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8404.10.20">8404.10.20</option>
                                    <option value="8404.10.11">8404.10.11</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8404.10.20">8404.10.20</option>
                                    <option value="8404.10.11">8404.10.11</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8404.10.20">8404.10.20</option>
                                    <option value="8414.59.30">8414.59.30</option>
                                    <option value="8414.59.50">8414.59.50</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8421.21.19">8421.21.19</option>
                                    <option value="8421.21.23">8421.21.23</option>
                                    <option value="8421.22.90">8421.22.90</option>
                                    <option value="8421.29.20">8421.29.20</option>
                                    <option value="8421.29.30">8421.29.30</option>
                                    <option value="8421.29.40">8421.29.40</option>
                                    <option value="8421.29.50">8421.29.50</option>
                                    <option value="8421.29.90">8421.29.90</option>
                                    <option value="8421.39.90">8421.39.90</option>
                                    <option value="8404.10.19">8404.10.19</option>
                                    <option value="8421.21.19">8421.21.19</option>
                                    <option value="8421.21.23">8421.21.23</option>
                                    <option value="8421.22.90">8421.22.90</option>
                                    <option value="8421.29.20">8421.29.20</option>
                                    <option value="8421.29.30">8421.29.30</option>
                                    <option value="8421.29.40">8421.29.40</option>
                                    <option value="8421.29.50">8421.29.50</option>
                                    <option value="8421.29.90">8421.29.90</option>
                                    <option value="8421.39.90">8421.39.90</option>
                                    <option value="8421.39.90">8421.39.90</option>
                                    <option value="8421.39.90">8421.39.90</option>
                                    <option value="8479.60.00">8479.60.00</option>
                                    <option value="8421.21.22">8421.21.22</option>
                                    <option value="8421.21.23">8421.21.23</option>
                                    <option value="8421.21.22">8421.21.22</option>
                                    <option value="8421.21.23">8421.21.23</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7311.00.99">7311.00.99</option>
                                    <option value="7311.00.23">7311.00.23</option>
                                    <option value="7311.00.91">7311.00.91</option>
                                    <option value="7311.00.92">7311.00.92</option>
                                    <option value="7311.00.27">7311.00.27</option>
                                    <option value="7311.00.29">7311.00.29</option>
                                    <option value="7311.00.99">7311.00.99</option>
                                    <option value="8419.50.10">8419.50.10</option>
                                    <option value="8406.82.10">8406.82.10</option>
                                    <option value="8406.82.90">8406.82.90</option>
                                    <option value="8410.11.00">8410.11.00</option>
                                    <option value="8402.11.10">8402.11.10</option>
                                    <option value="8402.11.20">8402.11.20</option>
                                    <option value="8402.12.11">8402.12.11</option>
                                    <option value="8402.12.19">8402.12.19</option>
                                    <option value="8402.12.21">8402.12.21</option>
                                    <option value="8402.12.29">8402.12.29</option>
                                    <option value="8402.19.11">8402.19.11</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.19.21">8402.19.21</option>
                                    <option value="8402.12.29">8402.12.29</option>
                                    <option value="8402.20.10">8402.20.10</option>
                                    <option value="8402.20.20">8402.20.20</option>
                                    <option value="8402.90.10">8402.90.10</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8402.11.10">8402.11.10</option>
                                    <option value="8402.11.20">8402.11.20</option>
                                    <option value="8402.12.11">8402.12.11</option>
                                    <option value="8402.12.19">8402.12.19</option>
                                    <option value="8402.12.21">8402.12.21</option>
                                    <option value="8402.12.29">8402.12.29</option>
                                    <option value="8402.19.11">8402.19.11</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.19.21">8402.19.21</option>
                                    <option value="8402.20.10">8402.20.10</option>
                                    <option value="8402.20.20">8402.20.20</option>
                                    <option value="8402.90.10">8402.90.10</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8408.90.10">8408.90.10</option>
                                    <option value="8408.90.99">8408.90.99</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7310.10.99">7310.10.99</option>
                                    <option value="7311.00.99">7311.00.99</option>
                                    <option value="8419.50.91">8419.50.91</option>
                                    <option value="8419.50.92">8419.50.92</option>
                                    <option value="8419.90.19">8419.90.19</option>
                                    <option value="8419.90.29">8419.90.29</option>
                                    <option value="8418.69.41">8418.69.41</option>
                                    <option value="8418.69.49">8418.69.49</option>
                                    <option value="8418.99.10">8418.99.10</option>
                                    <option value="8428.20.90">8428.20.90</option>
                                    <option value="8428.31.00">8428.31.00</option>
                                    <option value="8428.32.90">8428.32.90</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8428.39.90">8428.39.90</option>
                                    <option value="8428.20.90">8428.20.90</option>
                                    <option value="8428.31.00">8428.31.00</option>
                                    <option value="8428.32.90">8428.32.90</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8428.39.90">8428.39.90</option>
                                    <option value="8424.10.90">8424.10.90</option>
                                    <option value="8481.10.11">8481.10.11</option>
                                    <option value="8481.10.19">8481.10.19</option>
                                    <option value="8481.10.21">8481.10.21</option>
                                    <option value="8481.10.22">8481.10.22</option>
                                    <option value="8481.10.91">8481.10.91</option>
                                    <option value="8481.10.99">8481.10.99</option>
                                    <option value="8481.20.10">8481.20.10</option>
                                    <option value="8481.20.20">8481.20.20</option>
                                    <option value="8481.20.90">8481.20.90</option>
                                    <option value="8481.30.10">8481.30.10</option>
                                    <option value="8481.30.20">8481.30.20</option>
                                    <option value="8481.30.10">8481.30.10</option>
                                    <option value="8481.30.40">8481.30.40</option>
                                    <option value="8481.30.90">8481.30.90</option>
                                    <option value="8481.40.10">8481.40.10</option>
                                    <option value="8481.40.30">8481.40.30</option>
                                    <option value="8481.40.90">8481.40.90</option>
                                    <option value="8481.80.11">8481.80.11</option>
                                    <option value="8481.80.12">8481.80.12</option>
                                    <option value="8481.80.13">8481.80.13</option>
                                    <option value="8481.80.14">8481.80.14</option>
                                    <option value="8481.80.21">8481.80.21</option>
                                    <option value="8481.80.22">8481.80.22</option>
                                    <option value="8481.80.30">8481.80.30</option>
                                    <option value="8481.80.40">8481.80.40</option>
                                    <option value="8481.80.50">8481.80.50</option>
                                    <option value="8481.80.61">8481.80.61</option>
                                    <option value="8481.80.62">8481.80.62</option>
                                    <option value="8481.80.63">8481.80.63</option>
                                    <option value="8481.80.64">8481.80.64</option>
                                    <option value="8481.80.65">8481.80.65</option>
                                    <option value="8481.80.66">8481.80.66</option>
                                    <option value="8481.80.67">8481.80.67</option>
                                    <option value="8481.80.71">8481.80.71</option>
                                    <option value="8481.80.72">8481.80.72</option>
                                    <option value="8481.80.73">8481.80.73</option>
                                    <option value="8481.80.74">8481.80.74</option>
                                    <option value="8481.80.77">8481.80.77</option>
                                    <option value="8481.80.78">8481.80.78</option>
                                    <option value="8481.80.79">8481.80.79</option>
                                    <option value="8481.80.81">8481.80.81</option>
                                    <option value="8481.80.82">8481.80.82</option>
                                    <option value="8481.80.85">8481.80.85</option>
                                    <option value="8481.80.87">8481.80.87</option>
                                    <option value="8481.80.88">8481.80.88</option>
                                    <option value="8481.80.89">8481.80.89</option>
                                    <option value="8481.80.91">8481.80.91</option>
                                    <option value="8481.80.92">8481.80.92</option>
                                    <option value="8481.80.99">8481.80.99</option>
                                    <option value="8481.90.10">8481.90.10</option>
                                    <option value="8481.90.21">8481.90.21</option>
                                    <option value="8481.90.22">8481.90.22</option>
                                    <option value="8481.90.23">8481.90.23</option>
                                    <option value="8481.90.29">8481.90.29</option>
                                    <option value="8481.90.31">8481.90.31</option>
                                    <option value="8481.90.39">8481.90.39</option>
                                    <option value="8481.90.41">8481.90.41</option>
                                    <option value="8481.90.49">8481.90.49</option>
                                    <option value="8481.90.90">8481.90.90</option>
                                    <option value="8484.80.85">8484.80.85</option>
                                    <option value="7304.19.00">7304.19.00</option>
                                    <option value="8482.10.00">8482.10.00</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7310.29.91">7310.29.91</option>
                                    <option value="7310.29.99">7310.29.99</option>
                                    <option value="7320.90.90">7320.90.90</option>
                                    <option value="7322.90.00">7322.90.00</option>
                                    <option value="8414.59.50">8414.59.50</option>
                                    <option value="8414.59.91">8414.59.91</option>
                                    <option value="8414.59.92">8414.59.92</option>
                                    <option value="8414.59.99">8414.59.99</option>
                                    <option value="8414.80.90">8414.80.90</option>
                                    <option value="8419.39.19">8419.39.19</option>
                                    <option value="8426.11.00">8426.11.00</option>
                                    <option value="8428.32.90">8428.32.90</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8474.10.10">8474.10.10</option>
                                    <option value="8474.20.19">8474.20.19</option>
                                    <option value="8479.82.10">8479.82.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8514.90.90">8514.90.90</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8419.39.19">8419.39.19</option>
                                    <option value="8419.50.10">8419.50.10</option>
                                    <option value="8428.32.90">8428.32.90</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8433.90.10">8433.90.10</option>
                                    <option value="8438.80.11">8438.80.11</option>
                                    <option value="8438.80.12">8438.80.12</option>
                                    <option value="8438.90.12">8438.90.12</option>
                                    <option value="8438.90.22">8438.90.22</option>
                                    <option value="7304.19.00">7304.19.00</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8433.52.00">8433.52.00</option>
                                    <option value="8435.10.10">8435.10.10</option>
                                    <option value="8438.30.10">8438.30.10</option>
                                    <option value="8479.20.10">8479.20.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8402.11.10">8402.11.10</option>
                                    <option value="8402.11.20">8402.11.20</option>
                                    <option value="8402.12.11">8402.12.11</option>
                                    <option value="8402.12.19">8402.12.19</option>
                                    <option value="8402.12.21">8402.12.21</option>
                                    <option value="8402.12.29">8402.12.29</option>
                                    <option value="8402.19.11">8402.19.11</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.20.10">8402.20.10</option>
                                    <option value="8402.20.20">8402.20.20</option>
                                    <option value="8413.19.10">8413.19.10</option>
                                    <option value="8413.19.20">8413.19.20</option>
                                    <option value="8419.31.30">8419.31.30</option>
                                    <option value="8421.19.10">8421.19.10</option>
                                    <option value="8423.30.10">8423.30.10</option>
                                    <option value="8428.20.10">8428.20.10</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8437.80.59">8437.80.59</option>
                                    <option value="8438.30.10">8438.30.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="9032.81.00">9032.81.00</option>
                                    <option value="9032.81.00">9032.81.00</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8421.21.19">8421.21.19</option>
                                    <option value="8421.29.90">8421.29.90</option>
                                    <option value="9032.89.90">9032.89.90</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8421.21.19">8421.21.19</option>
                                    <option value="8421.29.90">8421.29.90</option>
                                    <option value="9032.89.90">9032.89.90</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7322.90.00">7322.90.00</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8418.99.10">8418.99.10</option>
                                    <option value="8419.40.10">8419.40.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8479.60.00">8479.60.00</option>
                                    <option value="7304.19.00">7304.19.00</option>
                                    <option value="8402.19.19">8402.19.19</option>
                                    <option value="8402.90.90">8402.90.90</option>
                                    <option value="8433.52.00">8433.52.00</option>
                                    <option value="8435.10.10">8435.10.10</option>
                                    <option value="8438.30.10">8438.30.10</option>
                                    <option value="8479.20.10">8479.20.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8465.20.00">8465.20.00</option>
                                    <option value="8465.99.30">8465.99.30</option>
                                    <option value="8417.20.00">8417.20.00</option>
                                    <option value="8422.30.00">8422.30.00</option>
                                    <option value="8428.33.90">8428.33.90</option>
                                    <option value="8437.10.30">8437.10.30</option>
                                    <option value="8437.10.40">8437.10.40</option>
                                    <option value="8438.10.10">8438.10.10</option>
                                    <option value="8441.30.10">8441.30.10</option>
                                    <option value="7309.00.11">7309.00.11</option>
                                    <option value="7309.00.19">7309.00.19</option>
                                    <option value="7309.00.91">7309.00.91</option>
                                    <option value="7309.00.99">7309.00.99</option>
                                    <option value="7411.29.00">7411.29.00</option>
                                    <option value="8418.10.20">8418.10.20</option>
                                    <option value="8418.10.90">8418.10.90</option>
                                    <option value="8418.99.10">8418.99.10</option>
                                    <option value="8439.10.00">8439.10.00</option>
                                    <option value="8439.20.00">8439.20.00</option>
                                    <option value="8439.30.00">8439.30.00</option>
                                    <option value="8439.91.00">8439.91.00</option>
                                    <option value="8439.99.00">8439.99.00</option>
                                    <option value="8415.81.91">8415.81.91</option>
                                    <option value="8419.39.19">8419.39.19</option>
                                    <option value="8433.90.10">8433.90.10</option>
                                    <option value="8441.30.10">8441.30.10</option>
                                    <option value="8479.82.10">8479.82.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8509.40.00">8509.40.00</option>
                                    <option value="8419.39.19">8419.39.19</option>
                                    <option value="8435.10.10">8435.10.10</option>
                                    <option value="8441.10.10">8441.10.10</option>
                                    <option value="8479.82.10">8479.82.10</option>
                                    <option value="8479.89.31">8479.89.31</option>
                                    <option value="8479.89.39">8479.89.39</option>
                                    <option value="8436.10.10">8436.10.10</option>
                                    <option value="8436.10.20">8436.10.20</option>
                                    <option value="8436.80.11">8436.80.11</option>
                                    <option value="8458.19.10">8458.19.10</option>
                                    <option value="8458.19.90">8458.19.90</option>
                                    <option value="8459.39.10">8459.39.10</option>
                                    <option value="8459.69.10">8459.69.10</option>
                                    <option value="8458.11.10">8458.11.10</option>
                                    <option value="8458.11.90">8458.11.90</option>
                                    <option value="8515.39.10">8515.39.10</option>
                                    <option value="8459.29.10">8459.29.10</option>
                                    <option value="8459.41.00">8459.41.00</option>
                                    <option value="8459.49.10">8459.49.10</option>
                                    <option value="8462.91.00">8462.91.00</option>
                                    <option value="8462.21.00">8462.21.00</option>
                                    <option value="8462.29.10">8462.29.10</option>
                                    <option value="7214.20.31">7214.20.31</option>
                                    <option value="7214.20.39">7214.20.39</option>
                                    <option value="7214.20.41">7214.20.41</option>
                                    <option value="7214.20.49">7214.20.49</option>
                                    <option value="7214.20.51">7214.20.51</option>
                                    <option value="7214.20.59">7214.20.59</option>
                                    <option value="7214.20.61">7214.20.61</option>
                                    <option value="7214.20.69">7214.20.69</option>
                                    <option value="7214.91.19">7214.91.19</option>
                                    <option value="7214.91.21">7214.91.21</option>
                                    <option value="7214.91.29">7214.91.29</option>
                                    <option value="7214.99.11">7214.99.11</option>
                                    <option value="7214.99.19">7214.99.19</option>
                                    <option value="7214.99.91">7214.99.91</option>
                                    <option value="7214.99.92">7214.99.92</option>
                                    <option value="7214.99.99">7214.99.99</option>
                                    <option value="7213.10.10">7213.10.10</option>
                                    <option value="7213.10.90">7213.10.90</option>
                                    <option value="7213.91.20">7213.91.20</option>
                                    <option value="7213.91.90">7213.91.90</option>
                                    <option value="7213.99.20">7213.99.20</option>
                                    <option value="7213.99.90">7213.99.90</option>
                                    <option value="7217.10.10">7217.10.10</option>
                                    <option value="7217.10.22">7217.10.22</option>
                                    <option value="7216.10.00">7216.10.00</option>
                                    <option value="7216.21.10">7216.21.10</option>
                                    <option value="7216.21.90">7216.21.90</option>
                                    <option value="7216.22.00">7216.22.00</option>
                                    <option value="7216.31.10">7216.31.10</option>
                                    <option value="7216.31.90">7216.31.90</option>
                                    <option value="7216.32.10">7216.32.10</option>
                                    <option value="7216.32.90">7216.32.90</option>
                                    <option value="7216.40.10">7216.40.10</option>
                                    <option value="7216.40.90">7216.40.90</option>
                                    <option value="7216.50.11">7216.50.11</option>
                                    <option value="7216.50.19">7216.50.19</option>
                                    <option value="7216.50.91">7216.50.91</option>
                                    <option value="7216.50.99">7216.50.99</option>
                                    <option value="7216.61.00">7216.61.00</option>
                                    <option value="7216.69.00">7216.69.00</option>
                                    <option value="7216.91.10">7216.91.10</option>
                                    <option value="7216.91.90">7216.91.90</option>
                                    <option value="7216.99.00">7216.99.00</option>
                                    <option value="7216.33.11">7216.33.11</option>
                                    <option value="7216.33.19">7216.33.19</option>
                                    <option value="7216.33.90">7216.33.90</option>
                                    <option value="7301.20.00">7301.20.00</option>
                                    <option value="7210.41.11">7210.41.11</option>
                                    <option value="7210.41.12">7210.41.12</option>
                                    <option value="7210.41.19">7210.41.19</option>
                                    <option value="7210.41.91">7210.41.91</option>
                                    <option value="7210.41.99">7210.41.99</option>
                                    <option value="7210.49.11">7210.49.11</option>
                                    <option value="7210.49.12">7210.49.12</option>
                                    <option value="7210.49.13">7210.49.13</option>
                                    <option value="7210.49.19">7210.49.19</option>
                                    <option value="7210.49.91">7210.49.91</option>
                                    <option value="7210.49.99">7210.49.99</option>
                                    <option value="7212.30.11">7212.30.11</option>
                                    <option value="7212.30.12">7212.30.12</option>
                                    <option value="7212.30.13">7212.30.13</option>
                                    <option value="7212.30.14">7212.30.14</option>
                                    <option value="7212.30.19">7212.30.19</option>
                                    <option value="7212.30.90">7212.30.90</option>
                                    <option value="7210.12.10">7210.12.10</option>
                                    <option value="7210.12.90">7210.12.90</option>
                                    <option value="7212.10.11">7212.10.11</option>
                                    <option value="7212.10.13">7212.10.13</option>
                                    <option value="7212.10.19">7212.10.19</option>
                                    <option value="7212.10.92">7212.10.92</option>
                                    <option value="7212.10.93">7212.10.93</option>
                                    <option value="7212.10.99">7212.10.99</option>
                                    <option value="7210.70.11">7210.70.11</option>
                                    <option value="7210.70.19">7210.70.19</option>
                                    <option value="7210.70.91">7210.70.91</option>
                                    <option value="7210.70.99">7210.70.99</option>
                                    <option value="7210.90.10">7210.90.10</option>
                                    <option value="7210.90.90">7210.90.90</option>
                                    <option value="7212.40.11">7212.40.11</option>
                                    <option value="7212.40.91">7212.40.91</option>
                                    <option value="7210.61.11">7210.61.11</option>
                                    <option value="7210.61.12">7210.61.12</option>
                                    <option value="7210.61.19">7210.61.19</option>
                                    <option value="7210.61.91">7210.61.91</option>
                                    <option value="7210.69.11">7210.69.11</option>
                                    <option value="7210.69.91">7210.69.91</option>
                                    <option value="7212.50.23">7212.50.23</option>
                                    <option value="7212.50.24">7212.50.24</option>
                                    <option value="7212.50.29">7212.50.29</option>
                                    <option value="7308.10.10">7308.10.10</option>
                                    <option value="7308.10.90">7308.10.90</option>
                                    <option value="7308.20.11">7308.20.11</option>
                                    <option value="7308.20.21">7308.20.21</option>
                                    <option value="7308.20.29">7308.20.29</option>
                                    <option value="7308.30.10">7308.30.10</option>
                                    <option value="7308.30.90">7308.30.90</option>
                                    <option value="7308.40.10">7308.40.10</option>
                                    <option value="7308.90.20">7308.90.20</option>
                                    <option value="7308.90.40">7308.90.40</option>
                                    <option value="7308.90.50">7308.90.50</option>
                                    <option value="7308.40.90">7308.40.90</option>
                                    <option value="7308.90.60">7308.90.60</option>
                                    <option value="7308.90.92">7308.90.92</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="7308.40.90">7308.40.90</option>
                                    <option value="7308.90.60">7308.90.60</option>
                                    <option value="7308.90.92">7308.90.92</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="7308.40.90">7308.40.90</option>
                                    <option value="7308.90.92">7308.90.92</option>
                                    <option value="7308.90.99">7308.90.99</option>
                                    <option value="7610.90.30">7610.90.30</option>
                                    <option value="7610.90.91">7610.90.91</option>
                                    <option value="7610.90.99">7610.90.99</option>
                                    <option value="2523.21.00">2523.21.00</option>
                                    <option value="2523.29.10">2523.29.10</option>
                                    <option value="2523.29.90">2523.29.90</option>
                                    <option value="2523.29.90">2523.29.90</option>
                                    <option value="2523.90.00">2523.90.00</option>
                                    <option value="2523.29.90">2523.29.90</option>
                                    <option value="2523.90.00">2523.90.00</option>
                                    <option value="6810.91.00">6810.91.00</option>
                                    <option value="6810.91.00">6810.91.00</option>
                                    <option value="6810.91.00">6810.91.00</option>
                                    <option value="6810.11.00">6810.11.00</option>
                                    <option value="6810.19.10">6810.19.10</option>
                                    <option value="6810.99.00">6810.99.00</option>
                                    <option value="6905.10.00">6905.10.00</option>
                                    <option value="7003.12.20">7003.12.20</option>
                                    <option value="7003.12.90">7003.12.90</option>
                                    <option value="7003.19.90">7003.19.90</option>
                                    <option value="7004.20.90">7004.20.90</option>
                                    <option value="7004.90.90">7004.90.90</option>
                                    <option value="7005.10.90">7005.10.90</option>
                                    <option value="7005.21.90">7005.21.90</option>
                                    <option value="7005.29.90">7005.29.90</option>
                                    <option value="7006.00.90">7006.00.90</option>
                                    <option value="7007.19.90">7007.19.90</option>
                                    <option value="7007.29.90">7007.29.90</option>
                                    <option value="7008.00.00">7008.00.00</option>
                                    <option value="6907.21.21">6907.21.21</option>
                                    <option value="6907.21.22">6907.21.22</option>
                                    <option value="6907.21.91">6907.21.91</option>
                                    <option value="6907.21.92">6907.21.92</option>
                                    <option value="6907.22.11">6907.22.11</option>
                                    <option value="6907.22.12">6907.22.12</option>
                                    <option value="6907.22.91">6907.22.91</option>
                                    <option value="6907.22.92">6907.22.92</option>
                                    <option value="6907.23.11">6907.23.11</option>
                                    <option value="6907.23.12">6907.23.12</option>
                                    <option value="6907.23.91">6907.23.91</option>
                                    <option value="6907.23.92">6907.23.92</option>
                                    <option value="6907.30.11">6907.30.11</option>
                                    <option value="6907.30.19">6907.30.19</option>
                                    <option value="6907.40.21">6907.40.21</option>
                                    <option value="6907.40.91">6907.40.91</option>
                                    <option value="6907.21.23">6907.21.23</option>
                                    <option value="6907.21.24">6907.21.24</option>
                                    <option value="6907.21.93">6907.21.93</option>
                                    <option value="6907.21.94">6907.21.94</option>
                                    <option value="6907.22.13">6907.22.13</option>
                                    <option value="6907.22.14">6907.22.14</option>
                                    <option value="6907.22.93">6907.22.93</option>
                                    <option value="6907.22.94">6907.22.94</option>
                                    <option value="6907.23.13">6907.23.13</option>
                                    <option value="6907.23.14">6907.23.14</option>
                                    <option value="6907.23.93">6907.23.93</option>
                                    <option value="6907.23.94">6907.23.94</option>
                                    <option value="6907.30.91">6907.30.91</option>
                                    <option value="6907.30.99">6907.30.99</option>
                                    <option value="6907.40.22">6907.40.22</option>
                                    <option value="6907.40.92">6907.40.92</option>
                                    <option value="6910.10.00">6910.10.00</option>
                                    <option value="6905.10.00">6905.10.00</option>
                                    <option value="6905.90.00">6905.90.00</option>
                                    <option value="6906.00.00">6906.00.00</option>
                                    <option value="3917.21.00">3917.21.00</option>
                                    <option value="3917.23.00">3917.23.00</option>
                                    <option value="3925.10.00">3925.10.00</option>
                                    <option value="4418.10.00">4418.10.00</option>
                                    <option value="4418.20.00">4418.20.00</option>
                                    <option value="4418.40.00">4418.40.00</option>
                                    <option value="4418.50.00">4418.50.00</option>
                                    <option value="4418.60.00">4418.60.00</option>
                                    <option value="4418.74.00">4418.74.00</option>
                                    <option value="4418.75.00">4418.75.00</option>
                                    <option value="4418.79.00">4418.79.00</option>
                                    <option value="3918.10.11">3918.10.11</option>
                                    <option value="3918.10.19">3918.10.19</option>
                                    <option value="3918.10.90">3918.10.90</option>
                                    <option value="3918.90.11">3918.90.11</option>
                                    <option value="3918.90.13">3918.90.13</option>
                                    <option value="4412.31.00">4412.31.00</option>
                                    <option value="4412.33.00">4412.33.00</option>
                                    <option value="4412.34.00">4412.34.00</option>
                                    <option value="4412.31.00">4412.31.00</option>
                                    <option value="4412.39.00">4412.39.00</option>
                                    <option value="4412.99.10">4412.99.10</option>
                                    <option value="4412.99.20">4412.99.20</option>
                                    <option value="4412.99.30">4412.99.30</option>
                                    <option value="4412.99.90">4412.99.90</option>
                                    <option value="4408.10.10">4408.10.10</option>
                                    <option value="4412.94.00">4412.94.00</option>
                                    <option value="4421.99.96">4421.99.96</option>
                                    <option value="4411.12.00">4411.12.00</option>
                                    <option value="4411.13.00">4411.13.00</option>
                                    <option value="4411.14.00">4411.14.00</option>
                                    <option value="4407.11.00">4407.11.00</option>
                                    <option value="4407.12.00">4407.12.00</option>
                                    <option value="4407.19.00">4407.19.00</option>
                                    <option value="4407.21.10">4407.21.10</option>
                                    <option value="4407.21.90">4407.21.90</option>
                                    <option value="4407.22.10">4407.22.10</option>
                                    <option value="4407.22.90">4407.22.90</option>
                                    <option value="4407.25.11">4407.25.11</option>
                                    <option value="4407.25.19">4407.25.19</option>
                                    <option value="4407.25.21">4407.25.21</option>
                                    <option value="4407.25.29">4407.25.29</option>
                                    <option value="4407.26.10">4407.26.10</option>
                                    <option value="4407.26.90">4407.26.90</option>
                                    <option value="4407.27.10">4407.27.10</option>
                                    <option value="4407.27.90">4407.27.90</option>
                                    <option value="4407.28.10">4407.28.10</option>
                                    <option value="4407.28.90">4407.28.90</option>
                                    <option value="4407.29.11">4407.29.11</option>
                                    <option value="4407.29.19">4407.29.19</option>
                                    <option value="4407.29.21">4407.29.21</option>
                                    <option value="4407.29.29">4407.29.29</option>
                                    <option value="4407.29.31">4407.29.31</option>
                                    <option value="4407.29.39">4407.29.39</option>
                                    <option value="4407.29.41">4407.29.41</option>
                                    <option value="4407.29.49">4407.29.49</option>
                                    <option value="4407.29.51">4407.29.51</option>
                                    <option value="4407.29.59">4407.29.59</option>
                                    <option value="4407.29.61">4407.29.61</option>
                                    <option value="4407.29.69">4407.29.69</option>
                                    <option value="4407.29.71">4407.29.71</option>
                                    <option value="4407.29.79">4407.29.79</option>
                                    <option value="4407.29.81">4407.29.81</option>
                                    <option value="4407.29.89">4407.29.89</option>
                                    <option value="4407.29.91">4407.29.91</option>
                                    <option value="4407.29.92">4407.29.92</option>
                                    <option value="4407.29.94">4407.29.94</option>
                                    <option value="4407.29.95">4407.29.95</option>
                                    <option value="4407.29.96">4407.29.96</option>
                                    <option value="4407.29.97">4407.29.97</option>
                                    <option value="4407.29.98">4407.29.98</option>
                                    <option value="4407.91.10">4407.91.10</option>
                                    <option value="4407.91.90">4407.91.90</option>
                                    <option value="4407.92.10">4407.92.10</option>
                                    <option value="4407.92.90">4407.92.90</option>
                                    <option value="4407.93.10">4407.93.10</option>
                                    <option value="4407.93.90">4407.93.90</option>
                                    <option value="4407.94.10">4407.94.10</option>
                                    <option value="4407.94.90">4407.94.90</option>
                                    <option value="4407.95.10">4407.95.10</option>
                                    <option value="4407.95.90">4407.95.90</option>
                                    <option value="4407.96.90">4407.96.90</option>
                                    <option value="4407.97.90">4407.97.90</option>
                                    <option value="4407.99.10">4407.99.10</option>
                                    <option value="4407.99.90">4407.99.90</option>
                                    <option value="4410.11.00">4410.11.00</option>
                                    <option value="4409.10.00">4409.10.00</option>
                                    <option value="6811.40.10">6811.40.10</option>
                                    <option value="6811.81.00">6811.81.00</option>
                                    <option value="6802.10.00">6802.10.00</option>
                                    <option value="6802.93.10">6802.93.10</option>
                                    <option value="6802.93.90">6802.93.90</option>
                                    <option value="7016.10.00">7016.10.00</option>
                                    <option value="7208.10.00">7208.10.00</option>
                                    <option value="7208.36.00">7208.36.00</option>
                                    <option value="7208.37.00">7208.37.00</option>
                                    <option value="7208.38.00">7208.38.00</option>
                                    <option value="7208.39.10">7208.39.10</option>
                                    <option value="7208.39.90">7208.39.90</option>
                                    <option value="7208.90.10">7208.90.10</option>
                                    <option value="7208.90.20">7208.90.20</option>
                                    <option value="7208.90.90">7208.90.90</option>
                                    <option value="7211.14.13">7211.14.13</option>
                                    <option value="7211.14.14">7211.14.14</option>
                                    <option value="7211.14.15">7211.14.15</option>
                                    <option value="7211.14.19">7211.14.19</option>
                                    <option value="7211.14.91">7211.14.91</option>
                                    <option value="7211.14.92">7211.14.92</option>
                                    <option value="7211.14.93">7211.14.93</option>
                                    <option value="7211.14.99">7211.14.99</option>
                                    <option value="7211.19.13">7211.19.13</option>
                                    <option value="7211.19.14">7211.19.14</option>
                                    <option value="7211.19.15">7211.19.15</option>
                                    <option value="7211.19.19">7211.19.19</option>
                                    <option value="7211.19.91">7211.19.91</option>
                                    <option value="7211.19.92">7211.19.92</option>
                                    <option value="7211.19.93">7211.19.93</option>
                                    <option value="7211.19.99">7211.19.99</option>
                                    <option value="7208.40.00">7208.40.00</option>
                                    <option value="7208.51.00">7208.51.00</option>
                                    <option value="7208.52.00">7208.52.00</option>
                                    <option value="7208.53.00">7208.53.00</option>
                                    <option value="7208.54.10">7208.54.10</option>
                                    <option value="7208.54.90">7208.54.90</option>
                                    <option value="7211.13.11">7211.13.11</option>
                                    <option value="7211.13.12">7211.13.12</option>
                                    <option value="7211.13.19">7211.13.19</option>
                                    <option value="7211.13.91">7211.13.91</option>
                                    <option value="7211.13.99">7211.13.99</option>
                                    <option value="7208.25.00">7208.25.00</option>
                                    <option value="7208.26.00">7208.26.00</option>
                                    <option value="7208.27.11">7208.27.11</option>
                                    <option value="7208.27.19">7208.27.19</option>
                                    <option value="7208.27.91">7208.27.91</option>
                                    <option value="7208.27.99">7208.27.99</option>
                                    <option value="7209.15.00">7209.15.00</option>
                                    <option value="7209.16.10">7209.16.10</option>
                                    <option value="7209.16.90">7209.16.90</option>
                                    <option value="7209.17.10">7209.17.10</option>
                                    <option value="7209.17.90">7209.17.90</option>
                                    <option value="7209.18.10">7209.18.10</option>
                                    <option value="7209.18.99">7209.18.99</option>
                                    <option value="7211.23.10">7211.23.10</option>
                                    <option value="7211.23.20">7211.23.20</option>
                                    <option value="7211.23.30">7211.23.30</option>
                                    <option value="7211.23.90">7211.23.90</option>
                                    <option value="7209.25.00">7209.25.00</option>
                                    <option value="7209.26.10">7209.26.10</option>
                                    <option value="7209.26.90">7209.26.90</option>
                                    <option value="7209.27.10">7209.27.10</option>
                                    <option value="7209.27.90">7209.27.90</option>
                                    <option value="7209.28.10">7209.28.10</option>
                                    <option value="7209.28.90">7209.28.90</option>
                                    <option value="7209.90.90">7209.90.90</option>
                                    <option value="7211.29.10">7211.29.10</option>
                                    <option value="7211.29.20">7211.29.20</option>
                                    <option value="7211.29.30">7211.29.30</option>
                                    <option value="7211.29.90">7211.29.90</option>
                                    <option value="7211.90.11">7211.90.11</option>
                                    <option value="7211.90.12">7211.90.12</option>
                                    <option value="7211.90.13">7211.90.13</option>
                                    <option value="7211.90.14">7211.90.14</option>
                                    <option value="7211.90.19">7211.90.19</option>
                                    <option value="7211.90.91">7211.90.91</option>
                                    <option value="7211.90.99">7211.90.99</option>
                                    <option value="7219.33.00">7219.33.00</option>
                                    <option value="7219.34.00">7219.34.00</option>
                                    <option value="7219.35.00">7219.35.00</option>
                                    <option value="7213.91.10">7213.91.10</option>
                                    <option value="7213.91.20">7213.91.20</option>
                                    <option value="7213.91.90">7213.91.90</option>
                                    <option value="7213.99.10">7213.99.10</option>
                                    <option value="7213.99.20">7213.99.20</option>
                                    <option value="7213.99.90">7213.99.90</option>
                                    <option value="7215.50.10">7215.50.10</option>
                                    <option value="7215.50.91">7215.50.91</option>
                                    <option value="7215.50.99">7215.50.99</option>
                                    <option value="7215.90.10">7215.90.10</option>
                                    <option value="7215.90.90">7215.90.90</option>
                                    <option value="7217.10.10">7217.10.10</option>
                                    <option value="7217.10.22">7217.10.22</option>
                                    <option value="7217.10.29">7217.10.29</option>
                                    <option value="7217.10.33">7217.10.33</option>
                                    <option value="7217.10.39">7217.10.39</option>
                                    <option value="7217.20.10">7217.20.10</option>
                                    <option value="7217.20.20">7217.20.20</option>
                                    <option value="7217.20.91">7217.20.91</option>
                                    <option value="7217.20.99">7217.20.99</option>
                                    <option value="7217.30.11">7217.30.11</option>
                                    <option value="7217.30.19">7217.30.19</option>
                                    <option value="7217.30.21">7217.30.21</option>
                                    <option value="7217.30.29">7217.30.29</option>
                                    <option value="7217.30.33">7217.30.33</option>
                                    <option value="7217.30.35">7217.30.35</option>
                                    <option value="7217.30.39">7217.30.39</option>
                                    <option value="7217.90.10">7217.90.10</option>
                                    <option value="7217.90.90">7217.90.90</option>
                                    <option value="7217.10.33">7217.10.33</option>
                                    <option value="7229.20.00">7229.20.00</option>
                                    <option value="7229.90.20">7229.90.20</option>
                                    <option value="7229.90.91">7229.90.91</option>
                                    <option value="7229.90.99">7229.90.99</option>
                                    <option value="7312.10.91">7312.10.91</option>
                                    <option value="7312.10.99">7312.10.99</option>
                                    <option value="7312.90.00">7312.90.00</option>
                                    <option value="7312.10.20">7312.10.20</option>
                                    <option value="7312.10.10">7312.10.10</option>
                                    <option value="7305.11.00">7305.11.00</option>
                                    <option value="7305.12.10">7305.12.10</option>
                                    <option value="7305.12.90">7305.12.90</option>
                                    <option value="7305.20.00">7305.20.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7305.31.10">7305.31.10</option>
                                    <option value="7305.31.90">7305.31.90</option>
                                    <option value="7305.90.00">7305.90.00</option>
                                    <option value="7306.19.10">7306.19.10</option>
                                    <option value="7306.19.20">7306.19.20</option>
                                    <option value="7306.19.90">7306.19.90</option>
                                    <option value="7306.21.00">7306.21.00</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7306.30.19">7306.30.19</option>
                                    <option value="7306.30.29">7306.30.29</option>
                                    <option value="7306.50.19">7306.50.19</option>
                                    <option value="7306.50.91">7306.50.91</option>
                                    <option value="7306.50.99">7306.50.99</option>
                                    <option value="7306.61.90">7306.61.90</option>
                                    <option value="7306.69.90">7306.69.90</option>
                                    <option value="7306.90.19">7306.90.19</option>
                                    <option value="7306.90.91">7306.90.91</option>
                                    <option value="7306.90.92">7306.90.92</option>
                                    <option value="7306.90.99">7306.90.99</option>
                                    <option value="7305.19.10">7305.19.10</option>
                                    <option value="7305.19.90">7305.19.90</option>
                                    <option value="7306.29.00">7306.29.00</option>
                                    <option value="7305.39.10">7305.39.10</option>
                                    <option value="7305.39.90">7305.39.90</option>
                                    <option value="7306.30.49">7306.30.49</option>
                                    <option value="7306.30.91">7306.30.91</option>
                                    <option value="7306.30.92">7306.30.92</option>
                                    <option value="7306.30.99">7306.30.99</option>
                                    <option value="8311.10.10">8311.10.10</option>
                                    <option value="8311.10.90">8311.10.90</option>
                                    <option value="8311.20.21">8311.20.21</option>
                                    <option value="8311.20.29">8311.20.29</option>
                                    <option value="8311.20.90">8311.20.90</option>
                                    <option value="8311.30.21">8311.30.21</option>
                                    <option value="8311.30.29">8311.30.29</option>
                                    <option value="8311.30.91">8311.30.91</option>
                                    <option value="8311.30.99">8311.30.99</option>
                                    <option value="7313.00.00">7313.00.00</option>
                                    <option value="7313.00.00">7313.00.00</option>
                                    <option value="7314.12.00">7314.12.00</option>
                                    <option value="7314.31.00">7314.31.00</option>
                                    <option value="7314.39.00">7314.39.00</option>
                                    <option value="7314.41.00">7314.41.00</option>
                                    <option value="7314.42.00">7314.42.00</option>
                                    <option value="7314.49.00">7314.49.00</option>
                                    <option value="7314.50.00">7314.50.00</option>
                                    <option value="7318.11.00">7318.11.00</option>
                                    <option value="7318.12.10">7318.12.10</option>
                                    <option value="7318.12.90">7318.12.90</option>
                                    <option value="7318.13.00">7318.13.00</option>
                                    <option value="7318.14.10">7318.14.10</option>
                                    <option value="7318.14.90">7318.14.90</option>
                                    <option value="7318.15.10">7318.15.10</option>
                                    <option value="7318.15.90">7318.15.90</option>
                                    <option value="7318.16.10">7318.16.10</option>
                                    <option value="7318.16.90">7318.16.90</option>
                                    <option value="7318.19.10">7318.19.10</option>
                                    <option value="7318.19.90">7318.19.90</option>
                                    <option value="7318.21.00">7318.21.00</option>
                                    <option value="7318.22.00">7318.22.00</option>
                                    <option value="7318.23.10">7318.23.10</option>
                                    <option value="7318.23.90">7318.23.90</option>
                                    <option value="7318.24.00">7318.24.00</option>
                                    <option value="7318.29.10">7318.29.10</option>
                                    <option value="7318.29.90">7318.29.90</option>
                                    <option value="7317.00.10">7317.00.10</option>
                                    <option value="7317.00.20">7317.00.20</option>
                                    <option value="7317.00.30">7317.00.30</option>
                                    <option value="7317.00.90">7317.00.90</option>
                                    <option value="7321.11.00">7321.11.00</option>
                                    <option value="7321.81.00">7321.81.00</option>
                                    <option value="7321.90.10">7321.90.10</option>
                                    <option value="7321.90.20">7321.90.20</option>
                                    <option value="7321.90.90">7321.90.90</option>
                                    <option value="7323.93.10">7323.93.10</option>
                                    <option value="7323.99.10">7323.99.10</option>
                                    <option value="7606.11.90">7606.11.90</option>
                                    <option value="7606.91.00">7606.91.00</option>
                                    <option value="7607.11.00">7607.11.00</option>
                                    <option value="7610.10.10">7610.10.10</option>
                                    <option value="7610.10.90">7610.10.90</option>
                                    <option value="2806.10.00">2806.10.00</option>
                                    <option value="2807.00.00">2807.00.00</option>
                                    <option value="3102.30.00">3102.30.00</option>
                                    <option value="2833.22.90">2833.22.90</option>
                                    <option value="2827.32.00">2827.32.00</option>
                                    <option value="2828.10.00">2828.10.00</option>
                                    <option value="2849.10.00">2849.10.00</option>
                                    <option value="2804.40.00">2804.40.00</option>
                                    <option value="2811.22.10">2811.22.10</option>
                                    <option value="2713.12.00">2713.12.00</option>
                                    <option value="3815.11.00">3815.11.00</option>
                                    <option value="2511.10.00">2511.10.00</option>
                                    <option value="2508.10.00">2508.10.00</option>
                                    <option value="2523.90.00">2523.90.00</option>
                                    <option value="6805.10.00">6805.10.00</option>
                                    <option value="6805.20.00">6805.20.00</option>
                                    <option value="6805.30.00">6805.30.00</option>
                                    <option value="3602.00.00">3602.00.00</option>
                                    <option value="3215.11.10">3215.11.10</option>
                                    <option value="3215.11.90">3215.11.90</option>
                                    <option value="3215.19.00">3215.19.00</option>
                                    <option value="3208.20.90">3208.20.90</option>
                                    <option value="3208.90.19">3208.90.19</option>
                                    <option value="3208.90.29">3208.90.29</option>
                                    <option value="3209.10.10">3209.10.10</option>
                                    <option value="3209.10.90">3209.10.90</option>
                                    <option value="3209.90.00">3209.90.00</option>
                                    <option value="3209.10.50">3209.10.50</option>
                                    <option value="3209.10.90">3209.10.90</option>
                                    <option value="3208.20.40">3208.20.40</option>
                                    <option value="3208.20.90">3208.20.90</option>
                                    <option value="3206.19.10">3206.19.10</option>
                                    <option value="3102.10.00">3102.10.00</option>
                                    <option value="3102.21.00">3102.21.00</option>
                                    <option value="2905.16.00">2905.16.00</option>
                                    <option value="2931.90.21">2931.90.21</option>
                                    <option value="2924.29.20">2924.29.20</option>
                                    <option value="2924.29.20">2924.29.20</option>
                                    <option value="2932.99.10">2932.99.10</option>
                                    <option value="2916.12.00">2916.12.00</option>
                                    <option value="2917.36.00">2917.36.00</option>
                                    <option value="2933.59.10">2933.59.10</option>
                                    <option value="3208.20.90">3208.20.90</option>
                                    <option value="3209.10.90">3209.10.90</option>
                                    <option value="3208.20.90">3208.20.90</option>
                                    <option value="3209.10.90">3209.10.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3209.90.00">3209.90.00</option>
                                    <option value="3208.20.90">3208.20.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3210.00.99">3210.00.99</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3208.90.30">3208.90.30</option>
                                    <option value="3208.90.90">3208.90.90</option>
                                    <option value="3209.90.00">3209.90.00</option>
                                    <option value="3209.10.10">3209.10.10</option>
                                    <option value="3209.10.90">3209.10.90</option>
                                    <option value="3209.90.00">3209.90.00</option>
                                    <option value="8418.10.11">8418.10.11</option>
                                    <option value="8418.21.10">8418.21.10</option>
                                    <option value="8419.11.10">8419.11.10</option>
                                    <option value="8509.40.00">8509.40.00</option>
                                    <option value="8415.10.10">8415.10.10</option>
                                    <option value="8415.10.90">8415.10.90</option>
                                    <option value="8528.72.10">8528.72.10</option>
                                    <option value="8528.72.91">8528.72.91</option>
                                    <option value="8528.72.92">8528.72.92</option>
                                    <option value="8528.72.99">8528.72.99</option>
                                    <option value="8536.20.11">8536.20.11</option>
                                    <option value="8536.20.12">8536.20.12</option>
                                    <option value="8536.20.13">8536.20.13</option>
                                    <option value="8536.20.19">8536.20.19</option>
                                    <option value="8536.20.20">8536.20.20</option>
                                    <option value="8541.40.21">8541.40.21</option>
                                    <option value="8541.40.22">8541.40.22</option>
                                    <option value="8541.40.29">8541.40.29</option>
                                    <option value="8544.11.20">8544.11.20</option>
                                    <option value="8544.11.30">8544.11.30</option>
                                    <option value="8544.11.40">8544.11.40</option>
                                    <option value="8544.11.90">8544.11.90</option>
                                    <option value="8544.19.00">8544.19.00</option>
                                    <option value="8544.20.11">8544.20.11</option>
                                    <option value="8544.20.19">8544.20.19</option>
                                    <option value="8544.20.21">8544.20.21</option>
                                    <option value="8544.20.29">8544.20.29</option>
                                    <option value="8544.20.31">8544.20.31</option>
                                    <option value="8544.20.39">8544.20.39</option>
                                    <option value="8544.20.41">8544.20.41</option>
                                    <option value="8544.20.49">8544.20.49</option>
                                    <option value="8544.42.11">8544.42.11</option>
                                    <option value="8544.42.13">8544.42.13</option>
                                    <option value="8544.42.19">8544.42.19</option>
                                    <option value="8544.60.21">8544.60.21</option>
                                    <option value="8544.60.22">8544.60.22</option>
                                    <option value="8544.60.29">8544.60.29</option>
                                    <option value="8544.60.31">8544.60.31</option>
                                    <option value="8544.60.39">8544.60.39</option>
                                    <option value="8535.90.90">8535.90.90</option>
                                    <option value="8536.90.12">8536.90.12</option>
                                    <option value="8536.90.19">8536.90.19</option>
                                    <option value="8536.90.32">8536.90.32</option>
                                    <option value="8536.90.39">8536.90.39</option>
                                    <option value="8536.90.94">8536.90.94</option>
                                    <option value="8536.90.99">8536.90.99</option>
                                    <option value="8546.20.90">8546.20.90</option>
                                    <option value="8546.90.00">8546.90.00</option>
                                    <option value="9028.30.10">9028.30.10</option>
                                    <option value="8536.20.91">8536.20.91</option>
                                    <option value="8536.20.99">8536.20.99</option>
                                    <option value="8504.21.92">8504.21.92</option>
                                    <option value="8504.21.93">8504.21.93</option>
                                    <option value="8504.21.99">8504.21.99</option>
                                    <option value="8504.22.92">8504.22.92</option>
                                    <option value="8504.22.93">8504.22.93</option>
                                    <option value="8504.22.99">8504.22.99</option>
                                    <option value="8504.23.10">8504.23.10</option>
                                    <option value="8504.23.21">8504.23.21</option>
                                    <option value="8504.23.22">8504.23.22</option>
                                    <option value="8504.23.29">8504.23.29</option>
                                    <option value="8504.21.92">8504.21.92</option>
                                    <option value="8504.21.93">8504.21.93</option>
                                    <option value="8504.21.99">8504.21.99</option>
                                    <option value="8504.22.92">8504.22.92</option>
                                    <option value="8504.22.93">8504.22.93</option>
                                    <option value="8504.22.99">8504.22.99</option>
                                    <option value="8504.23.10">8504.23.10</option>
                                    <option value="8504.23.21">8504.23.21</option>
                                    <option value="8504.23.22">8504.23.22</option>
                                    <option value="8504.23.29">8504.23.29</option>
                                    <option value="8504.33.19">8504.33.19</option>
                                    <option value="8537.10.19">8537.10.19</option>
                                    <option value="8537.20.11">8537.20.11</option>
                                    <option value="8537.20.19">8537.20.19</option>
                                    <option value="8537.10.11">8537.10.11</option>
                                    <option value="8537.10.12">8537.10.12</option>
                                    <option value="8537.10.13">8537.10.13</option>
                                    <option value="8537.10.19">8537.10.19</option>
                                    <option value="8537.20.21">8537.20.21</option>
                                    <option value="8537.20.29">8537.20.29</option>
                                    <option value="8501.40.21">8501.40.21</option>
                                    <option value="8501.40.29">8501.40.29</option>
                                    <option value="8501.52.31">8501.52.31</option>
                                    <option value="8501.52.39">8501.52.39</option>
                                    <option value="8501.53.00">8501.53.00</option>
                                    <option value="7308.20.19">7308.20.19</option>
                                    <option value="7308.20.19">7308.20.19</option>
                                    <option value="8502.11.00">8502.11.00</option>
                                    <option value="8502.12.10">8502.12.10</option>
                                    <option value="8502.12.20">8502.12.20</option>
                                    <option value="8502.13.90">8502.13.90</option>
                                    <option value="8504.40.19">8504.40.19</option>
                                    <option value="8528.71.11">8528.71.11</option>
                                    <option value="8528.71.19">8528.71.19</option>
                                    <option value="8504.40.30">8504.40.30</option>
                                    <option value="8517.61.00">8517.61.00</option>
                                    <option value="8529.10.99">8529.10.99</option>
                                    <option value="8517.61.00">8517.61.00</option>
                                    <option value="8517.61.00">8517.61.00</option>
                                    <option value="8544.70.10">8544.70.10</option>
                                    <option value="8544.70.90">8544.70.90</option>
                                    <option value="8544.42.21">8544.42.21</option>
                                    <option value="8544.42.23">8544.42.23</option>
                                    <option value="8544.42.29">8544.42.29</option>
                                    <option value="8544.42.32">8544.42.32</option>
                                    <option value="8544.42.33">8544.42.33</option>
                                    <option value="8544.42.34">8544.42.34</option>
                                    <option value="8544.42.94">8544.42.94</option>
                                    <option value="8544.42.95">8544.42.95</option>
                                    <option value="8544.42.96">8544.42.96</option>
                                    <option value="8544.42.97">8544.42.97</option>
                                    <option value="8544.42.98">8544.42.98</option>
                                    <option value="8544.42.99">8544.42.99</option>
                                    <option value="8544.49.11">8544.49.11</option>
                                    <option value="8544.49.13">8544.49.13</option>
                                    <option value="8544.49.19">8544.49.19</option>
                                    <option value="8544.49.21">8544.49.21</option>
                                    <option value="8544.49.22">8544.49.22</option>
                                    <option value="8544.49.23">8544.49.23</option>
                                    <option value="8544.49.24">8544.49.24</option>
                                    <option value="8544.49.29">8544.49.29</option>
                                    <option value="8544.49.31">8544.49.31</option>
                                    <option value="8544.49.32">8544.49.32</option>
                                    <option value="8544.49.39">8544.49.39</option>
                                    <option value="8544.49.41">8544.49.41</option>
                                    <option value="8544.49.42">8544.49.42</option>
                                    <option value="8544.49.49">8544.49.49</option>
                                    <option value="8901.10.10">8901.10.10</option>
                                    <option value="8901.10.20">8901.10.20</option>
                                    <option value="8901.10.60">8901.10.60</option>
                                    <option value="8901.10.70">8901.10.70</option>
                                    <option value="8901.10.10">8901.10.10</option>
                                    <option value="8901.10.20">8901.10.20</option>
                                    <option value="8901.10.60">8901.10.60</option>
                                    <option value="8901.10.70">8901.10.70</option>
                                    <option value="8901.10.80">8901.10.80</option>
                                    <option value="8901.10.90">8901.10.90</option>
                                    <option value="8901.20.50">8901.20.50</option>
                                    <option value="8901.20.70">8901.20.70</option>
                                    <option value="8901.20.50">8901.20.50</option>
                                    <option value="8901.20.70">8901.20.70</option>
                                    <option value="8901.20.50">8901.20.50</option>
                                    <option value="8901.20.70">8901.20.70</option>
                                    <option value="8901.90.11">8901.90.11</option>
                                    <option value="8901.90.12">8901.90.12</option>
                                    <option value="8901.90.14">8901.90.14</option>
                                    <option value="8901.90.11">8901.90.11</option>
                                    <option value="8901.90.12">8901.90.12</option>
                                    <option value="8901.90.14">8901.90.14</option>
                                    <option value="8901.90.31">8901.90.31</option>
                                    <option value="8901.90.32">8901.90.32</option>
                                    <option value="8901.90.33">8901.90.33</option>
                                    <option value="8901.90.34">8901.90.34</option>
                                    <option value="8901.90.35">8901.90.35</option>
                                    <option value="8901.90.31">8901.90.31</option>
                                    <option value="8901.90.32">8901.90.32</option>
                                    <option value="8901.90.33">8901.90.33</option>
                                    <option value="8901.90.34">8901.90.34</option>
                                    <option value="8901.90.35">8901.90.35</option>
                                    <option value="8901.90.36">8901.90.36</option>
                                    <option value="8901.90.31">8901.90.31</option>
                                    <option value="8901.90.32">8901.90.32</option>
                                    <option value="8901.90.33">8901.90.33</option>
                                    <option value="8901.90.34">8901.90.34</option>
                                    <option value="8901.90.35">8901.90.35</option>
                                    <option value="8901.90.36">8901.90.36</option>
                                    <option value="8901.90.31">8901.90.31</option>
                                    <option value="8901.90.32">8901.90.32</option>
                                    <option value="8901.90.33">8901.90.33</option>
                                    <option value="8901.90.34">8901.90.34</option>
                                    <option value="8901.90.35">8901.90.35</option>
                                    <option value="8901.90.31">8901.90.31</option>
                                    <option value="8901.90.32">8901.90.32</option>
                                    <option value="8901.90.33">8901.90.33</option>
                                    <option value="8901.90.34">8901.90.34</option>
                                    <option value="8901.90.35">8901.90.35</option>
                                    <option value="8901.90.36">8901.90.36</option>
                                    <option value="8901.00.31">8901.00.31</option>
                                    <option value="8901.00.32">8901.00.32</option>
                                    <option value="8901.00.33">8901.00.33</option>
                                    <option value="8901.00.34">8901.00.34</option>
                                    <option value="8901.00.35">8901.00.35</option>
                                    <option value="8904.00.10">8904.00.10</option>
                                    <option value="8904.00.31">8904.00.31</option>
                                    <option value="8904.00.39">8904.00.39</option>
                                    <option value="8904.00.10">8904.00.10</option>
                                    <option value="8904.00.31">8904.00.31</option>
                                    <option value="8904.00.39">8904.00.39</option>
                                    <option value="8905.10.00">8905.10.00</option>
                                    <option value="8905.10.00">8905.10.00</option>
                                    <option value="8905.90.90">8905.90.90</option>
                                    <option value="8603.10.00">8603.10.00</option>
                                    <option value="8603.90.00">8603.90.00</option>
                                    <option value="8605.00.00">8605.00.00</option>
                                    <option value="8606.10.00">8606.10.00</option>
                                    <option value="8606.30.00">8606.30.00</option>
                                    <option value="8606.91.00">8606.91.00</option>
                                    <option value="8606.92.00">8606.92.00</option>
                                    <option value="8606.99.00">8606.99.00</option>
                                    <option value="8607.11.00">8607.11.00</option>
                                    <option value="8607.12.00">8607.12.00</option>
                                    <option value="8803.30.00">8803.30.00</option>
                                    <option value="8802.20.90">8802.20.90</option>
                                    <option value="8803.30.00">8803.30.00</option>
                                    <option value="8711.20.96">8711.20.96</option>
                                    <option value="8703.21.45">8703.21.45</option>
                                    <option value="8703.22.47">8703.22.47</option>
                                    <option value="8703.23.55">8703.23.55</option>
                                    <option value="8703.23.56">8703.23.56</option>
                                    <option value="8703.23.57">8703.23.57</option>
                                    <option value="8703.23.58">8703.23.58</option>
                                    <option value="8703.21.59">8703.21.59</option>
                                    <option value="8703.22.59">8703.22.59</option>
                                    <option value="8703.23.65">8703.23.65</option>
                                    <option value="8703.23.66">8703.23.66</option>
                                    <option value="8703.23.67">8703.23.67</option>
                                    <option value="8703.23.68">8703.23.68</option>
                                    <option value="8703.31.59">8703.31.59</option>
                                    <option value="8703.32.74">8703.32.74</option>
                                    <option value="8703.32.75">8703.32.75</option>
                                    <option value="8703.32.76">8703.32.76</option>
                                    <option value="8703.33.80">8703.33.80</option>
                                    <option value="8703.21.51">8703.21.51</option>
                                    <option value="8703.21.59">8703.21.59</option>
                                    <option value="8703.22.51">8703.22.51</option>
                                    <option value="8703.22.59">8703.22.59</option>
                                    <option value="8703.23.61">8703.23.61</option>
                                    <option value="8703.23.65">8703.23.65</option>
                                    <option value="8703.23.62">8703.23.62</option>
                                    <option value="8703.23.66">8703.23.66</option>
                                    <option value="8703.23.63">8703.23.63</option>
                                    <option value="8703.23.67">8703.23.67</option>
                                    <option value="8703.23.64">8703.23.64</option>
                                    <option value="8703.23.68">8703.23.68</option>
                                    <option value="8703.31.51">8703.31.51</option>
                                    <option value="8703.31.59">8703.31.59</option>
                                    <option value="8703.32.71">8703.32.71</option>
                                    <option value="8703.32.72">8703.32.72</option>
                                    <option value="8703.32.74">8703.32.74</option>
                                    <option value="8703.32.75">8703.32.75</option>
                                    <option value="8703.32.73">8703.32.73</option>
                                    <option value="8703.32.76">8703.32.76</option>
                                    <option value="8703.33.71">8703.33.71</option>
                                    <option value="8703.33.80">8703.33.80</option>
                                    <option value="8704.21.29">8704.21.29</option>
                                    <option value="8704.31.29">8704.31.29</option>
                                    <option value="8702.20.79">8702.20.79</option>
                                    <option value="8702.10.89">8702.10.89</option>
                                    <option value="8702.10.71">8702.10.71</option>
                                    <option value="8702.10.81">8702.10.81</option>
                                    <option value="8702.10.79">8702.10.79</option>
                                    <option value="8702.10.89">8702.10.89</option>
                                    <option value="8702.90.59">8702.90.59</option>
                                    <option value="8702.90.69">8702.90.69</option>
                                    <option value="8702.90.79">8702.90.79</option>
                                    <option value="8702.20.50">8702.20.50</option>
                                    <option value="8702.30.50">8702.30.50</option>
                                    <option value="8702.40.50">8702.40.50</option>
                                    <option value="8702.90.40">8702.90.40</option>
                                    <option value="8702.20.71">8702.20.71</option>
                                    <option value="8702.20.79">8702.20.79</option>
                                    <option value="8702.30.79">8702.30.79</option>
                                    <option value="8702.40.79">8702.40.79</option>
                                    <option value="8702.90.69">8702.90.69</option>
                                    <option value="8702.20.71">8702.20.71</option>
                                    <option value="8702.20.79">8702.20.79</option>
                                    <option value="8702.30.79">8702.30.79</option>
                                    <option value="8702.40.79">8702.40.79</option>
                                    <option value="8702.90.71">8702.90.71</option>
                                    <option value="8702.20.99">8702.20.99</option>
                                    <option value="8702.30.99">8702.30.99</option>
                                    <option value="8702.40.99">8702.40.99</option>
                                    <option value="8702.90.80">8702.90.80</option>
                                    <option value="8704.22.41">8704.22.41</option>
                                    <option value="8704.22.42">8704.22.42</option>
                                    <option value="8704.22.43">8704.22.43</option>
                                    <option value="8704.22.45">8704.22.45</option>
                                    <option value="8704.22.46">8704.22.46</option>
                                    <option value="8704.22.51">8704.22.51</option>
                                    <option value="8704.22.41">8704.22.41</option>
                                    <option value="8704.22.42">8704.22.42</option>
                                    <option value="8704.22.43">8704.22.43</option>
                                    <option value="8704.22.45">8704.22.45</option>
                                    <option value="8704.22.47">8704.22.47</option>
                                    <option value="8704.22.59">8704.22.59</option>
                                    <option value="8704.23.21">8704.23.21</option>
                                    <option value="8704.23.22">8704.23.22</option>
                                    <option value="8704.23.23">8704.23.23</option>
                                    <option value="8704.23.24">8704.23.24</option>
                                    <option value="8704.23.25">8704.23.25</option>
                                    <option value="8704.23.29">8704.23.29</option>
                                    <option value="8704.23.61">8704.23.61</option>
                                    <option value="8704.23.62">8704.23.62</option>
                                    <option value="8704.23.63">8704.23.63</option>
                                    <option value="8704.23.64">8704.23.64</option>
                                    <option value="8704.23.65">8704.23.65</option>
                                    <option value="8704.23.66">8704.23.66</option>
                                    <option value="8704.23.69">8704.23.69</option>
                                    <option value="8704.22.41">8704.22.41</option>
                                    <option value="8704.22.42">8704.22.42</option>
                                    <option value="8704.22.43">8704.22.43</option>
                                    <option value="8704.22.45">8704.22.45</option>
                                    <option value="8712.00.10">8712.00.10</option>
                                    <option value="8712.00.20">8712.00.20</option>
                                    <option value="8712.00.30">8712.00.30</option>
                                    <option value="8712.00.90">8712.00.90</option>
                                    <option value="4011.10.00">4011.10.00</option>
                                    <option value="4011.20.10">4011.20.10</option>
                                    <option value="4011.20.90">4011.20.90</option>
                                    <option value="4011.40.00">4011.40.00</option>
                                    <option value="4013.10.11">4013.10.11</option>
                                    <option value="4013.10.19">4013.10.19</option>
                                    <option value="4013.10.21">4013.10.21</option>
                                    <option value="4013.10.29">4013.10.29</option>
                                    <option value="4013.90.20">4013.90.20</option>
                                    <option value="7007.11.10">7007.11.10</option>
                                    <option value="7007.11.30">7007.11.30</option>
                                    <option value="7007.21.10">7007.21.10</option>
                                    <option value="7007.21.30">7007.21.30</option>
                                    <option value="9402.90.90">9402.90.90</option>
                                    <option value="9402.10.10">9402.10.10</option>
                                    <option value="9403.20.90">9403.20.90</option>
                                    <option value="9403.83.00">9403.83.00</option>
                                    <option value="9402.10.10">9402.10.10</option>
                                    <option value="8713.10.00">8713.10.00</option>
                                    <option value="8713.90.00">8713.90.00</option>
                                    <option value="8716.80.90">8716.80.90</option>
                                    <option value="9018.90.90">9018.90.90</option>
                                    <option value="9018.90.30">9018.90.30</option>
                                    <option value="8423.10.10">8423.10.10</option>
                                    <option value="8423.10.20">8423.10.20</option>
                                    <option value="8417.80.00">8417.80.00</option>
                                    <option value="9018.31.10">9018.31.10</option>
                                    <option value="4015.11.00">4015.11.00</option>
                                    <option value="4015.11.00">4015.11.00</option>
                                    <option value="3926.20.90">3926.20.90</option>
                                    <option value="8419.89.19">8419.89.19</option>
                                    <option value="8419.89.19">8419.89.19</option>
                                    <option value="8419.89.19">8419.89.19</option>
                                    <option value="8419.89.19">8419.89.19</option>
                                    <option value="3926.90.39">3926.90.39</option>
                                    <option value="3923.10.10">3923.10.10</option>
                                    <option value="3923.10.90">3923.10.90</option>
                                    <option value="3923.21.11">3923.21.11</option>
                                    <option value="3923.21.19">3923.21.19</option>
                                    <option value="3923.30.20">3923.30.20</option>
                                    <option value="3923.30.90">3923.30.90</option>
                                    <option value="8424.89.10">8424.89.10</option>
                                    <option value="8424.89.90">8424.89.90</option>
                                    <option value="9402.90.10">9402.90.10</option>
                                    <option value="7326.90.99">7326.90.99</option>
                                    <option value="7326.90.99">7326.90.99</option>
                                    <option value="7326.90.99">7326.90.99</option>
                                    <option value="9018.90.20">9018.90.20</option>
                                    <option value="9018.90.20">9018.90.20</option>
                                    <option value="9018.90.20">9018.90.20</option>
                                    <option value="9018.90.20">9018.90.20</option>
                                    <option value="7017.10.90">7017.10.90</option>
                                    <option value="7017.10.90">7017.10.90</option>
                                    <option value="7017.10.90">7017.10.90</option>
                                    <option value="8303.00.00">8303.00.00</option>
                                    <option value="8304.00.10">8304.00.10</option>
                                    <option value="4810.22.10">4810.22.10</option>
                                    <option value="4810.22.10">4810.22.10</option>
                                    <option value="4810.22.91">4810.22.91</option>
                                    <option value="4810.22.99">4810.22.99</option>
                                    <option value="4810.29.10">4810.29.10</option>
                                    <option value="4810.29.10">4810.29.10</option>
                                    <option value="4810.29.91">4810.29.91</option>
                                    <option value="4810.29.99">4810.29.99</option>
                                    <option value="4809.20.00">4809.20.00</option>
                                    <option value="4809.90.10">4809.90.10</option>
                                    <option value="4809.90.90">4809.90.90</option>
                                    <option value="4816.20.10">4816.20.10</option>
                                    <option value="4816.20.90">4816.20.90</option>
                                    <option value="4816.90.10">4816.90.10</option>
                                    <option value="4816.90.20">4816.90.20</option>
                                    <option value="4816.90.30">4816.90.30</option>
                                    <option value="4816.90.40">4816.90.40</option>
                                    <option value="4816.90.50">4816.90.50</option>
                                    <option value="4816.90.90">4816.90.90</option>
                                    <option value="8303.00.00">8303.00.00</option>
                                    <option value="8304.00.10">8304.00.10</option>
                                    <option value="9401.30.00">9401.30.00</option>
                                    <option value="9401.61.00">9401.61.00</option>
                                    <option value="9401.69.10">9401.69.10</option>
                                    <option value="9401.69.90">9401.69.90</option>
                                    <option value="9403.30.00">9403.30.00</option>
                                    <option value="9401.53.00">9401.53.00</option>
                                    <option value="9403.82.00">9403.82.00</option>
                                    <option value="9403.83.00">9403.83.00</option>
                                    <option value="3926.30.00">3926.30.00</option>
                                    <option value="3926.10.00">3926.10.00</option>
                                    <option value="9028.20.20">9028.20.20</option>
                                    <option value="8481.30.90">8481.30.90</option>
                                    <option value="8422.30.00">8422.30.00</option>
                                    <option value="8438.50.10">8438.50.10</option>
                                    <option value="8438.50.20">8438.50.20</option>
                                    <option value="8421.29.40">8421.29.40</option>
                                    <option value="4016.94.00">4016.94.00</option>
                                    <option value="3919.10.10">3919.10.10</option>
                                    <option value="3919.10.91">3919.10.91</option>
                                    <option value="3919.10.92">3919.10.92</option>
                                    <option value="3919.10.99">3919.10.99</option>
                                    <option value="3919.90.10">3919.90.10</option>
                                    <option value="3919.90.20">3919.90.20</option>
                                    <option value="3919.90.91">3919.90.91</option>
                                    <option value="3919.90.92">3919.90.92</option>
                                    <option value="3919.90.99">3919.90.99</option>
                                    <option value="3920.10.11">3920.10.11</option>
                                    <option value="3920.10.19">3920.10.19</option>
                                    <option value="3920.10.90">3920.10.90</option>
                                    <option value="3920.20.10">3920.20.10</option>
                                    <option value="3920.20.91">3920.20.91</option>
                                    <option value="3920.20.99">3920.20.99</option>
                                    <option value="3920.30.20">3920.30.20</option>
                                    <option value="3920.30.91">3920.30.91</option>
                                    <option value="3920.30.92">3920.30.92</option>
                                    <option value="3920.30.99">3920.30.99</option>
                                    <option value="3923.10.90">3923.10.90</option>
                                    <option value="3923.21.99">3923.21.99</option>
                                    <option value="3923.29.90">3923.29.90</option>
                                    <option value="3923.30.20">3923.30.20</option>
                                    <option value="3923.30.90">3923.30.90</option>
                                    <option value="3926.90.55">3926.90.55</option>
                                    <option value="3923.29.90">3923.29.90</option>
                                    <option value="4805.91.90">4805.91.90</option>
                                    <option value="4810.13.99">4810.13.99</option>
                                    <option value="4810.14.19">4810.14.19</option>
                                    <option value="4810.14.91">4810.14.91</option>
                                    <option value="4810.14.99">4810.14.99</option>
                                    <option value="4802.55.20">4802.55.20</option>
                                    <option value="4802.55.69">4802.55.69</option>
                                    <option value="4802.55.90">4802.55.90</option>
                                    <option value="4810.13.99">4810.13.99</option>
                                    <option value="4810.14.19">4810.14.19</option>
                                    <option value="4810.19.91">4810.19.91</option>
                                    <option value="4810.19.99">4810.19.99</option>
                                    <option value="4819.10.00">4819.10.00</option>
                                    <option value="4819.20.00">4819.20.00</option>
                                    <option value="4819.30.00">4819.30.00</option>
                                    <option value="4819.40.00">4819.40.00</option>
                                    <option value="4819.50.00">4819.50.00</option>
                                    <option value="4819.60.00">4819.60.00</option>
                                    <option value="1701.99.10">1701.99.10</option>

                                </select>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <!-- style="display: none;" -->
                        <div id="section_dokumen_surat_asosiasi" style="display: none;" class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Dokumen Surat Asosiasi </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <span style="font-weight: 700;">Silakan upload dokumen surat asosiasi dibawah ini!</span>
                                    <input type="file" name="dokumen_surat_asosiasi" id="dokumen_surat_asosiasi" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div id="section_hs_code" style="display: none ;" class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Manual Input HS Code </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <span style="font-weight: 700;">Silakan Input HS Code anda disini!</span>
                                    <input type="text" id="manual_hs_code" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kegunaan </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="kegunaan" id="kegunaan" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Spesifikasi Mesin</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="spesifikasi" id="spesifikasi" class="form-control col-xs-12 col-sm-5">
                                    <p style="margin-top: 41px;">Upload dokumen spesifikasi</p>
                                    <input required style="margin-top: -5px;" type="file" name="dokumen_spesifikasi" id="dokumen_spesifikasi" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nilai Mesin </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input placeholder="Rupiah" required type="number" name="nilai_mesin" id="nilai_mesin" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Umur Teknis Mesin  </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="number" name="umur_teknis_mesin" id="umur_teknis_mesin" placeholder="Dalam satuan tahun" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Foto Mesin </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="file" name="foto_mesin" id="foto_mesin" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Jumlah Mesin </label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="number" name="jumlah_mesin" id="jumlah_mesin" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Asal negara:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <select required id="asal_negara" name="asal_negara" class="chosen-select form-control" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                        <option value="">&nbsp;</option>
                                        <option value="Afganistan">Afganistan</option>
                                        <option value="Afrika Selatan">Afrika Selatan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Aljazair">Aljazair</option>
                                        <option value="Amerika Serikat">Amerika Serikat</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Antigua dan Barbuda">Antigua dan Barbuda</option>
                                        <option value="Arab Saudi">Arab Saudi</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahama">Bahama</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belanda">Belanda</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgia">Belgia</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Brasil">Brasil</option>
                                        <option value="Britania Raya">Britania Raya</option>
                                        <option value="Brunei">Brunei</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chili">Chili</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominika">Dominika</option>
                                        <option value="Ekuador">Ekuador</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Eswatini">Eswatini</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Filipina">Filipina</option>
                                        <option value="Finlandia">Finlandia</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea Bissau">Guinea Bissau</option>
                                        <option value="Guinea Ekuatorial">Guinea Ekuatorial</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hungaria">Hungaria</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Irak">Irak</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Irlandia">Irlandia</option>
                                        <option value="Islandia">Islandia</option>
                                        <option value="Jamaika">Jamaika</option>
                                        <option value="Jepang">Jepang</option>
                                        <option value="Jerman">Jerman</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italia">Italia</option>
                                        <option value="Kamboja">Kamboja</option>
                                        <option value="Kamerun">Kamerun</option>
                                        <option value="Kanada">Kanada</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kepulauan Marshall">Kepulauan Marshall</option>
                                        <option value="Kepulauan Solomon">Kepulauan Solomon</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kolombia">Kolombia</option>
                                        <option value="Komoro">Komoro</option>
                                        <option value="Korea Selatan">Korea Selatan</option>
                                        <option value="Korea Utara">Korea Utara</option>
                                        <option value="Kosta Rika">Kosta Rika</option>
                                        <option value="Kroasia">Kroasia</option>
                                        <option value="Kuba">Kuba</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxemburg">Luxemburg</option>
                                        <option value="Madagaskar">Madagaskar</option>
                                        <option value="Makedonia">Makedonia</option>
                                        <option value="Maladewa">Maladewa</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Maroko">Maroko</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Meksiko">Meksiko</option>
                                        <option value="Mesir">Mesir</option>
                                        <option value="Mikronesia">Mikronesia</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monako">Monako</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Mozambik">Mozambik</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Nikaragua">Nikaragua</option>
                                        <option value="Norwegia">Norwegia</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestina">Palestina</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Pantai Gading">Pantai Gading</option>
                                        <option value="Papua Nugini">Papua Nugini</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Prancis">Prancis</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Polandia">Polandia</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republik Afrika Tengah">Republik Afrika Tengah</option>
                                        <option value="Republik Ceko">Republik Ceko</option>
                                        <option value="Republik Demokrasi Kongo">Republik Demokrasi Kongo</option>
                                        <option value="Republik Dominika">Republik Dominika</option>
                                        <option value="Republik Kongo">Republik Kongo</option>
                                        <option value="Republik Rakyat Tiongkok">Republik Rakyat Tiongkok</option>
                                        <option value="Rumania">Rumania</option>
                                        <option value="Rusia">Rusia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Sahara Barat">Sahara Barat</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Vincent dan Grenadines">Saint Vincent dan Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome dan Principe">Sao Tome dan Principe</option>
                                        <option value="Selandia Baru">Selandia Baru</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Siprus">Siprus</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="Spanyol">Spanyol</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="St. Kitt & Nevis">St. Kitt & Nevis</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriah">Suriah</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Swedia">Swedia</option>
                                        <option value="Swiss">Swiss</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanjung Verde">Tanjung Verde</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor Leste">Timor Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad dan Tobago">Trinidad dan Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turki">Turki</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraina">Ukraina</option>
                                        <option value="Uni Emirat Arab">Uni Emirat Arab</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatikan">Vatikan</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Yaman">Yaman</option>
                                        <option value="Yordania">Yordania</option>
                                        <option value="Yunani">Yunani</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Pelabuhan Bongkar:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <select required id="pelabuhan_bongkar" name="pelabuhan_bongkar" class="chosen-select form-control-hidden-accessible" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                        <option value="">&nbsp;</option>
                                        <option value="Adaut - Maluku Tenggara Barat">Adaut - Maluku Tenggara Barat</option>
                                        <option value="Atapupu - Belu">Atapupu - Belu</option>
                                        <option value="Air Buaya - Buru">Air Buaya - Buru</option>
                                        <option value="Ambalau - Buru Selatan">Ambalau - Buru Selatan</option>
                                        <option value="Air Bangis - Pasaman Barat">Air Bangis - Pasaman Barat</option>
                                        <option value="Probolinggo - Probolinggo">Probolinggo - Probolinggo</option>
                                        <option value="Agats - Asmat">Agats - Asmat</option>
                                        <option value="Awerange/Barru - Luwu Timur">Awerange/Barru - Luwu Timur</option>
                                        <option value="Amahai - Maluku Tengah">Amahai - Maluku Tengah</option>
                                        <option value="Anyer Lor - Serang">Anyer Lor - Serang</option>
                                        <option value="Amamapare - Mimika">Amamapare - Mimika</option>
                                        <option value="Ampenan - Lombok Barat">Ampenan - Lombok Barat</option>
                                        <option value="Ambon - Kota Ambon">Ambon - Kota Ambon</option>
                                        <option value="Ansus - Kepulauan Yapen">Ansus - Kepulauan Yapen</option>
                                        <option value="Ampana - Tojo Una-una">Ampana - Tojo Una-una</option>
                                        <option value="Pasapuat - Kepulauan Mentawai">Pasapuat - Kepulauan Mentawai</option>
                                        <option value="Pare-pare - Kota Pare-pare">Pare-pare - Kota Pare-pare</option>
                                        <option value="Arwala/sutilarang - Maluku Barat Daya">Arwala/sutilarang - Maluku Barat Daya</option>
                                        <option value="Asiki - Boven Digul">Asiki - Boven Digul</option>
                                        <option value="Mangga Dua - Kota Ternate">Mangga Dua - Kota Ternate</option>
                                        <option value="Pasokan - Tojo Una-una">Pasokan - Tojo Una-una</option>
                                        <option value="Atsy - Asmat">Atsy - Asmat</option>
                                        <option value="Amurang - Minahasa Selatan">Amurang - Minahasa Selatan</option>
                                        <option value="Pasangkayu - Mamuju Utara">Pasangkayu - Mamuju Utara</option>
                                        <option value="Baranusa - Alor">Baranusa - Alor</option>
                                        <option value="Badas - Sumbawa">Badas - Sumbawa</option>
                                        <option value="Bajoe - Bone">Bajoe - Bone</option>
                                        <option value="Baing - Sumba Timur">Baing - Sumba Timur</option>
                                        <option value="Bataka - Halmahera Barat">Bataka - Halmahera Barat</option>
                                        <option value="Bulukumba/Lappe'e - Bulukumba">Bulukumba/Lappe'e - Bulukumba</option>
                                        <option value="Babang - Halmahera Selatan">Babang - Halmahera Selatan</option>
                                        <option value="Banabungi Pasarwajo - Buton">Banabungi Pasarwajo - Buton</option>
                                        <option value="Bau-bau/Murhum - Kota Bau-bau">Bau-bau/Murhum - Kota Bau-bau</option>
                                        <option value="Bumbulan - Pohuwato">Bumbulan - Pohuwato</option>
                                        <option value="Biu - Sabu Raijua">Biu - Sabu Raijua</option>
                                        <option value="Bicoli - Halmahera Timur">Bicoli - Halmahera Timur</option>
                                        <option value="Budong-budong - Mamuju">Budong-budong - Mamuju</option>
                                        <option value="Banjarmasin - Kota Banjarmasin">Banjarmasin - Kota Banjarmasin</option>
                                        <option value="Bere-bere - Pulau Morotai">Bere-bere - Pulau Morotai</option>
                                        <option value="Belang-belang - Mamuju">Belang-belang - Mamuju</option>
                                        <option value="Benete - Sumbawa Barat">Benete - Sumbawa Barat</option>
                                        <option value="Beo - Kepulauan Talaud">Beo - Kepulauan Talaud</option>
                                        <option value="Bojonegara - Serang">Bojonegara - Serang</option>
                                        <option value="Banggai - Banggai Kepulauan">Banggai - Banggai Kepulauan</option>
                                        <option value="Bantaeng - Jeneponto">Bantaeng - Jeneponto</option>
                                        <option value="Buhias - Sitaro">Buhias - Sitaro</option>
                                        <option value="Bastiong - Kota Ternate">Bastiong - Kota Ternate</option>
                                        <option value="Biak - Biak Numfor">Biak - Biak Numfor</option>
                                        <option value="Bitung - Kota Bitung">Bitung - Kota Bitung</option>
                                        <option value="Tanjung Wangi - Banyuwangi">Tanjung Wangi - Banyuwangi</option>
                                        <option value="Bukide - Kepulauan Sangihe">Bukide - Kepulauan Sangihe</option>
                                        <option value="Bengkalis - Bengkalis">Bengkalis - Bengkalis</option>
                                        <option value="Pulau Baai - Bengkulu">Pulau Baai - Bengkulu</option>
                                        <option value="Bula - Seram Bagian Timur">Bula - Seram Bagian Timur</option>
                                        <option value="Belang - Minahasa Tenggara">Belang - Minahasa Tenggara</option>
                                        <option value="Manggar - Belitung Timur">Manggar - Belitung Timur</option>
                                        <option value="Belinyu - Bangka">Belinyu - Bangka</option>
                                        <option value="Belawan - Kota Medan">Belawan - Kota Medan</option>
                                        <option value="Buli - Halmahera Timur">Buli - Halmahera Timur</option>
                                        <option value="Bima - Bima">Bima - Bima</option>
                                        <option value="Benjina - Kepulauan Aru">Benjina - Kepulauan Aru</option>
                                        <option value="Banemo - Halmahera Tengah">Banemo - Halmahera Tengah</option>
                                        <option value="Brondong - Lamongan">Brondong - Lamongan</option>
                                        <option value="Bungku - Morowali">Bungku - Morowali</option>
                                        <option value="Benoa - Kota Denpasar">Benoa - Kota Denpasar</option>
                                        <option value="Binongko - Kota Bau-bau">Binongko - Kota Bau-bau</option>
                                        <option value="Bonerate - Luwu Utara">Bonerate - Luwu Utara</option>
                                        <option value="Batu Panjang - Bengkalis">Batu Panjang - Bengkalis</option>
                                        <option value="Balikpapan - Kota Balikpapan">Balikpapan - Kota Balikpapan</option>
                                        <option value="Brebes - Brebes">Brebes - Brebes</option>
                                        <option value="Balauring - Lembata">Balauring - Lembata</option>
                                        <option value="Baa - Rotendao">Baa - Rotendao</option>
                                        <option value="Barus - Tapanuli Tengah">Barus - Tapanuli Tengah</option>
                                        <option value="Bisui - Halmahera Selatan">Bisui - Halmahera Selatan</option>
                                        <option value="Biringkasi - Pangkajene Kepulauan">Biringkasi - Pangkajene Kepulauan</option>
                                        <option value="Batutua - Rotendao">Batutua - Rotendao</option>
                                        <option value="Batang - Batang">Batang - Batang</option>
                                        <option value="Batu Atas - Buton">Batu Atas - Buton</option>
                                        <option value="Binanatu - Sumba Barat">Binanatu - Sumba Barat</option>
                                        <option value="Baturube - Morowali">Baturube - Morowali</option>
                                        <option value="Bunta - Banggai">Bunta - Banggai</option>
                                        <option value="Sangsit - Buleleng">Sangsit - Buleleng</option>
                                        <option value="Batu Merah - Kota Ambon">Batu Merah - Kota Ambon</option>
                                        <option value="Batu Enam - Rokan Hilir">Batu Enam - Rokan Hilir</option>
                                        <option value="Batam/Batu Ampar - Kota Batam">Batam/Batu Ampar - Kota Batam</option>
                                        <option value="Busua - Halmahera Selatan">Busua - Halmahera Selatan</option>
                                        <option value="Tanjung Buton - Siak">Tanjung Buton - Siak</option>
                                        <option value="Banyu Wangi/Boom - Banyuwangi">Banyu Wangi/Boom - Banyuwangi</option>
                                        <option value="Bawean - Gresik">Bawean - Gresik</option>
                                        <option value="Bade - Mappi">Bade - Mappi</option>
                                        <option value="Batu Goyang - Kepulauan Aru">Batu Goyang - Kepulauan Aru</option>
                                        <option value="Pulau Banyak - Aceh Singkil">Pulau Banyak - Aceh Singkil</option>
                                        <option value="Bayun - Asmat">Bayun - Asmat</option>
                                        <option value="Cirebon - Cirebon">Cirebon - Cirebon</option>
                                        <option value="Celukan Bawang - Buleleng">Celukan Bawang - Buleleng</option>
                                        <option value="Calang - Aceh Jaya">Calang - Aceh Jaya</option>
                                        <option value="Calabai - Dompu">Calabai - Dompu</option>
                                        <option value="Carocok Painan - Pesisir Selatan">Carocok Painan - Pesisir Selatan</option>
                                        <option value="Carik - Lombok Utara">Carik - Lombok Utara</option>
                                        <option value="Cituis - Tangerang">Cituis - Tangerang</option>
                                        <option value="Cilacap - Cilacap">Cilacap - Cilacap</option>
                                        <option value="Dama - Halmahera Utara">Dama - Halmahera Utara</option>
                                        <option value="Dawai - Kepulauan Yapen">Dawai - Kepulauan Yapen</option>
                                        <option value="Sukadana - Kota Singkawang">Sukadana - Kota Singkawang</option>
                                        <option value="Dawera/Dawelor - Maluku Barat Daya">Dawera/Dawelor - Maluku Barat Daya</option>
                                        <option value="Dabo Singkep - Lingga">Dabo Singkep - Lingga</option>
                                        <option value="Jayapura - Jayapura">Jayapura - Jayapura</option>
                                        <option value="Dompak - Kota Tanjung Pinang">Dompak - Kota Tanjung Pinang</option>
                                        <option value="Damar - Maluku Barat Daya">Damar - Maluku Barat Daya</option>
                                        <option value="Teluk Palu - Donggala">Teluk Palu - Donggala</option>
                                        <option value="Dobo - Kepulauan Aru">Dobo - Kepulauan Aru</option>
                                        <option value="Dofa - Kepulauan Sula">Dofa - Kepulauan Sula</option>
                                        <option value="Dorosagu - Jayapura">Dorosagu - Jayapura</option>
                                        <option value="Dapalan - Kepulauan Talaud">Dapalan - Kepulauan Talaud</option>
                                        <option value="Daruba - Pulau Morotai">Daruba - Pulau Morotai</option>
                                        <option value="Darume - Halmahera Utara">Darume - Halmahera Utara</option>
                                        <option value="Dumai - Kota Dumai">Dumai - Kota Dumai</option>
                                        <option value="Dawi-dawi - Kolaka">Dawi-dawi - Kolaka</option>
                                        <option value="Eci - Mappi">Eci - Mappi</option>
                                        <option value="Segun - Sorong Selatan">Segun - Sorong Selatan</option>
                                        <option value="Elat - Maluku Tenggara">Elat - Maluku Tenggara</option>
                                        <option value="Ende - Ende">Ende - Ende</option>
                                        <option value="Kuala Enok - Indragiri Hilir">Kuala Enok - Indragiri Hilir</option>
                                        <option value="Ereke - Buton Utara">Ereke - Buton Utara</option>
                                        <option value="Eray - Maluku Barat Daya">Eray - Maluku Barat Daya</option>
                                        <option value="Essang - Kepulauan Talaud">Essang - Kepulauan Talaud</option>
                                        <option value="Fani - Raja Ampat">Fani - Raja Ampat</option>
                                        <option value="Fak-fak - Fakfak">Fak-fak - Fakfak</option>
                                        <option value="Fogi - Buru Selatan">Fogi - Buru Selatan</option>
                                        <option value="Falabisahaya - Kepulauan Sula">Falabisahaya - Kepulauan Sula</option>
                                        <option value="Giliketapang - Probolinggo">Giliketapang - Probolinggo</option>
                                        <option value="Geser - Seram Bagian Timur">Geser - Seram Bagian Timur</option>
                                        <option value="Galesong - Jeneponton">Galesong - Jeneponton</option>
                                        <option value="Gilimanuk - Jembrana">Gilimanuk - Jembrana</option>
                                        <option value="Galela - Halmahera Utara">Galela - Halmahera Utara</option>
                                        <option value="Manu/Gamumu - Halmahera Selatan">Manu/Gamumu - Halmahera Selatan</option>
                                        <option value="Gorom - Seram Bagian Timur">Gorom - Seram Bagian Timur</option>
                                        <option value="Garongkong - Barru">Garongkong - Barru</option>
                                        <option value="Gilimandangin - Sampang">Gilimandangin - Sampang</option>
                                        <option value="Gunung Sitoli - Kota Gunungsitoli">Gunung Sitoli - Kota Gunungsitoli</option>
                                        <option value="Gresik - Gresik">Gresik - Gresik</option>
                                        <option value="Talaga Raya - Buton">Talaga Raya - Buton</option>
                                        <option value="Gorontalo - Gorontalo">Gorontalo - Gorontalo</option>
                                        <option value="Hatu Piru - Seram Bagian Barat">Hatu Piru - Seram Bagian Barat</option>
                                        <option value="Amahaii - Maluku Tengah">Amahaii - Maluku Tengah</option>
                                        <option value="Boipinang - Kolaka">Boipinang - Kolaka</option>
                                        <option value="Bagan siapi-api - Rokan Hilir">Bagan siapi-api - Rokan Hilir</option>
                                        <option value="Bintuhan/Linau - Kaur">Bintuhan/Linau - Kaur</option>
                                        <option value="Buano - Saram Bagian Barat">Buano - Saram Bagian Barat</option>
                                        <option value="Batanjung - Kapuas">Batanjung - Kapuas</option>
                                        <option value="Banten/Cigading - Kota Cilegon">Banten/Cigading - Kota Cilegon</option>
                                        <option value="Bemo - Seram Bagian Timur">Bemo - Seram Bagian Timur</option>
                                        <option value="Biaro - Kepulauan Sangihe">Biaro - Kepulauan Sangihe</option>
                                        <option value="Bagan Asahan - Asahan">Bagan Asahan - Asahan</option>
                                        <option value="Gudang Arang - Kota Ambon">Gudang Arang - Kota Ambon</option>
                                        <option value="Indari - Halmahera Selatan">Indari - Halmahera Selatan</option>
                                        <option value="Bulaa - Maluku Tengah">Bulaa - Maluku Tengah</option>
                                        <option value="Idi - Aceh Timur">Idi - Aceh Timur</option>
                                        <option value="Kotabunan - Bolaang Mongodo">Kotabunan - Bolaang Mongodo</option>
                                        <option value="Ketapang - Sumenep">Ketapang - Sumenep</option>
                                        <option value="Kepulauan Seribu - Kepulauan Seribu">Kepulauan Seribu - Kepulauan Seribu</option>
                                        <option value="Korido - Biak Numfor">Korido - Biak Numfor</option>
                                        <option value="Lamkera - Flores Timur">Lamkera - Flores Timur</option>
                                        <option value="Mangoli - Kepulauan Sula">Mangoli - Kepulauan Sula</option>
                                        <option value="Muara Siberut/Simailepet - Kepulauan Mentawai">Muara Siberut/Simailepet - Kepulauan Mentawai</option>
                                        <option value="Mantangisi - Tojo Una-una">Mantangisi - Tojo Una-una</option>
                                        <option value="Melonguane - Kepulauan Sangihe">Melonguane - Kepulauan Sangihe</option>
                                        <option value="Maloy - Kutai Timur">Maloy - Kutai Timur</option>
                                        <option value="Munte/Luwu Utara - Luwu Utara">Munte/Luwu Utara - Luwu Utara</option>
                                        <option value="Mesuji/OKI - Ogan Kemering Ilir">Mesuji/OKI - Ogan Kemering Ilir</option>
                                        <option value="Marunda - Jakarta Utara">Marunda - Jakarta Utara</option>
                                        <option value="Boom Bary/Palembang - Kota Palembang">Boom Bary/Palembang - Kota Palembang</option>
                                        <option value="Natal/Sikara-kara - Mandailing Natal">Natal/Sikara-kara - Mandailing Natal</option>
                                        <option value="Pulau Laut - Natuna">Pulau Laut - Natuna</option>
                                        <option value="Ippi - Ende">Ippi - Ende</option>
                                        <option value="Pemalang - Pekalongan">Pemalang - Pekalongan</option>
                                        <option value="Poom - Kepulauan Yapen">Poom - Kepulauan Yapen</option>
                                        <option value="Pawi - Raja Ampat">Pawi - Raja Ampat</option>
                                        <option value="Ambo - Mamuju">Ambo - Mamuju</option>
                                        <option value="Indramayu - Indramayu">Indramayu - Indramayu</option>
                                        <option value="Seba - Sabu Raijua">Seba - Sabu Raijua</option>
                                        <option value="Sapudi - Sumenep">Sapudi - Sumenep</option>
                                        <option value="Sagea - Halmahera Tengah">Sagea - Halmahera Tengah</option>
                                        <option value="Tanjung Tiram/Karimun - Karimun">Tanjung Tiram/Karimun - Karimun</option>
                                        <option value="Teor - Maluku Tengah">Teor - Maluku Tengah</option>
                                        <option value="Belitung - Belitung">Belitung - Belitung</option>
                                        <option value="Tobilota - Flores Timur">Tobilota - Flores Timur</option>
                                        <option value="Tulehuu - Maluku Tengah">Tulehuu - Maluku Tengah</option>
                                        <option value="Tana Paser/Pondong - Paser">Tana Paser/Pondong - Paser</option>
                                        <option value="Tanjung Uban/Teluk Sasah - Kepulauan Riau">Tanjung Uban/Teluk Sasah - Kepulauan Riau</option>
                                        <option value="Tinombo - Parigi Moutong">Tinombo - Parigi Moutong</option>
                                        <option value="Tanjung Batu/Kotabaru - Kota Banjar Baru">Tanjung Batu/Kotabaru - Kota Banjar Baru</option>
                                        <option value="Toyando - Maluku Tenggara">Toyando - Maluku Tenggara</option>
                                        <option value="Taddan - Pamekasan">Taddan - Pamekasan</option>
                                        <option value="Tepeleo/Tapaleo - Halmahera Tengah">Tepeleo/Tapaleo - Halmahera Tengah</option>
                                        <option value="Ujung Jampea - Kepulauan Selayar">Ujung Jampea - Kepulauan Selayar</option>
                                        <option value="Ilwaki - Maluku Barat Daya">Ilwaki - Maluku Barat Daya</option>
                                        <option value="Inawatan - Sorong Selatan">Inawatan - Sorong Selatan</option>
                                        <option value="Penajam Paser - Kutai Timur">Penajam Paser - Kutai Timur</option>
                                        <option value="Jeneponto - Jeneponto">Jeneponto - Jeneponto</option>
                                        <option value="Jepara - Jepara">Jepara - Jepara</option>
                                        <option value="Yenggarbun - Supiori">Yenggarbun - Supiori</option>
                                        <option value="Jailolo - Halmahera Barat">Jailolo - Halmahera Barat</option>
                                        <option value="Jinato - Pangkajene Kepulauan">Jinato - Pangkajene Kepulauan</option>
                                        <option value="Juwana - Pati">Juwana - Pati</option>
                                        <option value="Kabare - Raja Ampat">Kabare - Raja Ampat</option>
                                        <option value="Kolonedale - Morowali">Kolonedale - Morowali</option>
                                        <option value="Kawaluso - Kepulauan Sangihe">Kawaluso - Kepulauan Sangihe</option>
                                        <option value="Kalianget - Sumenep">Kalianget - Sumenep</option>
                                        <option value="Kuala Jelay - Sukamara">Kuala Jelay - Sukamara</option>
                                        <option value="Kobisadar - Maluku Tengah">Kobisadar - Maluku Tengah</option>
                                        <option value="Kereng Bengkirai - Kota Palangkaraya">Kereng Bengkirai - Kota Palangkaraya</option>
                                        <option value="Kalabahi - Alor">Kalabahi - Alor</option>
                                        <option value="Kaledupa - Wakatobi">Kaledupa - Wakatobi</option>
                                        <option value="Kendari - Kendari">Kendari - Kendari</option>
                                        <option value="Kendal - Kendal">Kendal - Kendal</option>
                                        <option value="Kendawangan - Ketapang">Kendawangan - Ketapang</option>
                                        <option value="Kresek/Kronjo - Tangerang">Kresek/Kronjo - Tangerang</option>
                                        <option value="Kempo - Dompu">Kempo - Dompu</option>
                                        <option value="Karang Agung - Banyuasin">Karang Agung - Banyuasin</option>
                                        <option value="Kuala Gaung - Rokan Hilir">Kuala Gaung - Rokan Hilir</option>
                                        <option value="Karimata - Sambas">Karimata - Sambas</option>
                                        <option value="Kasipute - Bombana">Kasipute - Bombana</option>
                                        <option value="Kotiti - Halmahera Selatan">Kotiti - Halmahera Selatan</option>
                                        <option value="Karimun Jawa - Jepara">Karimun Jawa - Jepara</option>
                                        <option value="Kahakitang - Kepulauan Sangihe">Kahakitang - Kepulauan Sangihe</option>
                                        <option value="P. Kalukalukuang - Bone">P. Kalukalukuang - Bone</option>
                                        <option value="Kao - Halmahera Utara">Kao - Halmahera Utara</option>
                                        <option value="Kalama - Kepulauan Sangihe">Kalama - Kepulauan Sangihe</option>
                                        <option value="Kalatoa - Pangkajene Kepulauan">Kalatoa - Pangkajene Kepulauan</option>
                                        <option value="Komodo - Manggarai Barat">Komodo - Manggarai Barat</option>
                                        <option value="Kuala Mendahara - Tanjung Jabung Timur">Kuala Mendahara - Tanjung Jabung Timur</option>
                                        <option value="Kalianda - Lampung Selatan">Kalianda - Lampung Selatan</option>
                                        <option value="Kaimana - Kaimana">Kaimana - Kaimana</option>
                                        <option value="Kangean - Sumenep">Kangean - Sumenep</option>
                                        <option value="Kintap - Tanah Laut">Kintap - Tanah Laut</option>
                                        <option value="Karangantu - Serang">Karangantu - Serang</option>
                                        <option value="Kolbano - Timor Tengah Selatan">Kolbano - Timor Tengah Selatan</option>
                                        <option value="Kobror - Kepulauan Aru">Kobror - Kepulauan Aru</option>
                                        <option value="Kroing - Maluku Barat Daya">Kroing - Maluku Barat Daya</option>
                                        <option value="Kokas - Fakfak">Kokas - Fakfak</option>
                                        <option value="Kolaka - Kolaka">Kolaka - Kolaka</option>
                                        <option value="Kakorotan - Kepulauan Talaud">Kakorotan - Kepulauan Talaud</option>
                                        <option value="Kuala Pembuang - Seruyan">Kuala Pembuang - Seruyan</option>
                                        <option value="Keramaian - Sumenep">Keramaian - Sumenep</option>
                                        <option value="Kesui - Seram Bagian Timur">Kesui - Seram Bagian Timur</option>
                                        <option value="Kalbut - Situbondo">Kalbut - Situbondo</option>
                                        <option value="Kotabaru - Baru">Kotabaru - Baru</option>
                                        <option value="Kertapati - Kota Palembang">Kertapati - Kota Palembang</option>
                                        <option value="Kuala Tanjung - BATU BARA">Kuala Tanjung - BATU BARA</option>
                                        <option value="Kuala Tungkal - TANJUNG JABUNG BARAT">Kuala Tungkal - TANJUNG JABUNG BARAT</option>
                                        <option value="Karatung - KEPULAUAN TALAUD">Karatung - KEPULAUAN TALAUD</option>
                                        <option value="Sukabangun Ketapang - KETAPANG">Sukabangun Ketapang - KETAPANG</option>
                                        <option value="Kadatua - BUTON">Kadatua - BUTON</option>
                                        <option value="Kairatu - SERAM BAGIAN BARAT">Kairatu - SERAM BAGIAN BARAT</option>
                                        <option value="Kuala Langsa - KOTA LANGSA">Kuala Langsa - KOTA LANGSA</option>
                                        <option value="Kuala Semboja/Sebulu - KUTAI KERTANEGARA">Kuala Semboja/Sebulu - KUTAI KERTANEGARA</option>
                                        <option value="Kumai - KOTAWARINGIN BARAT">Kumai - KOTAWARINGIN BARAT</option>
                                        <option value="Kur - KAB. TUAL">Kur - KAB. TUAL</option>
                                        <option value="Kwandang - GORONTALO UTARA">Kwandang - GORONTALO UTARA</option>
                                        <option value="Kawio - KEPULAUAN SANGIHE">Kawio - KEPULAUAN SANGIHE</option>
                                        <option value="Moa - MALUKU BARAT DAYA">Moa - MALUKU BARAT DAYA</option>
                                        <option value="Kisar - MALUKU BARAT DAYA">Kisar - MALUKU BARAT DAYA</option>
                                        <option value="Kayuadi - PANGKAJENE KEPULAUAN">Kayuadi - PANGKAJENE KEPULAUAN</option>
                                        <option value="Kalibaru - JAKARTA UTARA">Kalibaru - JAKARTA UTARA</option>
                                        <option value="Labuhan - PANDEGLANG">Labuhan - PANDEGLANG</option>
                                        <option value="Labuha - HALMAHERA SELATAN">Labuha - HALMAHERA SELATAN</option>
                                        <option value="Labuan Bajo - MANGGARAI BARAT">Labuan Bajo - MANGGARAI BARAT</option>
                                        <option value="Loleo Jaya - HALMAHERA SELATAN">Loleo Jaya - HALMAHERA SELATAN</option>
                                        <option value="Leti - MALUKU BARAT DAYA">Leti - MALUKU BARAT DAYA</option>
                                        <option value="Leok - BUOL">Leok - BUOL</option>
                                        <option value="Maidi - KOTA TIDORE KEPULAUAN">Maidi - KOTA TIDORE KEPULAUAN</option>
                                        <option value="Lagundi - LAMPUNG SELATAN">Lagundi - LAMPUNG SELATAN</option>
                                        <option value="Lirang - MALUKU BARAT DAYA">Lirang - MALUKU BARAT DAYA</option>
                                        <option value="Lahewa - NIAS UTARA">Lahewa - NIAS UTARA</option>
                                        <option value="Labuhan Haji - LOMBOK TIMUR">Labuhan Haji - LOMBOK TIMUR</option>
                                        <option value="Teluk Leidong - LABUAN BATU UTARA">Teluk Leidong - LABUAN BATU UTARA</option>
                                        <option value="Larantuka - FLORES TIMUR">Larantuka - FLORES TIMUR</option>
                                        <option value="Legon Bajak - JEPARA">Legon Bajak - JEPARA</option>
                                        <option value="Tanah Ampo - KARANG ASEM">Tanah Ampo - KARANG ASEM</option>
                                        <option value="Lerokis - MALUKU BARAT DAYA">Lerokis - MALUKU BARAT DAYA</option>
                                        <option value="Kedi - HALMAHERA BARAT">Kedi - HALMAHERA BARAT</option>
                                        <option value="Lasalimu - BUTON">Lasalimu - BUTON</option>
                                        <option value="Labuhan Lombok - LOMBOK TIMUR">Labuhan Lombok - LOMBOK TIMUR</option>
                                        <option value="Labuhan Maringgai - LAMPUNG TIMUR">Labuhan Maringgai - LAMPUNG TIMUR</option>
                                        <option value="Lembar - LOMBOK BARAT">Lembar - LOMBOK BARAT</option>
                                        <option value="Langara - KONAWE UTARA">Langara - KONAWE UTARA</option>
                                        <option value="Liana Banggai - BUTON">Liana Banggai - BUTON</option>
                                        <option value="Lakor - MALUKU BARAT DAYA">Lakor - MALUKU BARAT DAYA</option>
                                        <option value="Lipang - KEPULAUAN SANGIHE">Lipang - KEPULAUAN SANGIHE</option>
                                        <option value="Lampia - LUWU TIMUR">Lampia - LUWU TIMUR</option>
                                        <option value="Lapuko - KONAWE SELATAN">Lapuko - KONAWE SELATAN</option>
                                        <option value="Leksula - BURU SELATAN">Leksula - BURU SELATAN</option>
                                        <option value="Lakara - KONAWE SELATAN">Lakara - KONAWE SELATAN</option>
                                        <option value="Lirung - KEPULAUAN TALAUD">Lirung - KEPULAUAN TALAUD</option>
                                        <option value="Lurang - MALUKU BARAT DAYA">Lurang - MALUKU BARAT DAYA</option>
                                        <option value="Larat - MALUKU TENGGARA BARAT">Larat - MALUKU TENGGARA BARAT</option>
                                        <option value="Loseng - KEPULAUAN SULA">Loseng - KEPULAUAN SULA</option>
                                        <option value="Lhokseumawe/Kreung Geukeh - ACEH UTARA">Lhokseumawe/Kreung Geukeh - ACEH UTARA</option>
                                        <option value="Letung - KEPULAUAN ANAMBAS">Letung - KEPULAUAN ANAMBAS</option>
                                        <option value="Lhok Tuan - KOTA BONTANG">Lhok Tuan - KOTA BONTANG</option>
                                        <option value="Likupang - MINAHASA UTARA">Likupang - MINAHASA UTARA</option>
                                        <option value="Labuhan Uki - BOLAANG MONGONDO">Labuhan Uki - BOLAANG MONGONDO</option>
                                        <option value="Lameruru - KONAWE UTARA">Lameruru - KONAWE UTARA</option>
                                        <option value="Lameruru - KONAWE UTARA">Lameruru - KONAWE UTARA</option>
                                        <option value="Luwuk - BANGGAI">Luwuk - BANGGAI</option>
                                        <option value="Lewoleba - LEMBATA">Lewoleba - LEMBATA</option>
                                        <option value="Laiwui - HALMAHERA SELATAN">Laiwui - HALMAHERA SELATAN</option>
                                        <option value="Lawele - BUTON">Lawele - BUTON</option>
                                        <option value="Maffa - HALMAHERA SELATAN">Maffa - HALMAHERA SELATAN</option>
                                        <option value="Majene - MAJENE">Majene - MAJENE</option>
                                        <option value="Makassar - KOTA MAKASAR">Makassar - KOTA MAKASAR</option>
                                        <option value="Marampit - KEPULAUAN TALAUD">Marampit - KEPULAUAN TALAUD</option>
                                        <option value="Muara Baru - JAKARTA UTARA">Muara Baru - JAKARTA UTARA</option>
                                        <option value="Malbufa - KEPULAUAN SULA">Malbufa - KEPULAUAN SULA</option>
                                        <option value="Marabombang - PINRANG">Marabombang - PINRANG</option>
                                        <option value="Marabatuan - BARU">Marabatuan - BARU</option>
                                        <option value="Tanjung Moco - KOTA TANJUNG PINANG">Tanjung Moco - KOTA TANJUNG PINANG</option>
                                        <option value="Midai - NATUNA">Midai - NATUNA</option>
                                        <option value="Manado - KOTA MANADO">Manado - KOTA MANADO</option>
                                        <option value="Mega - TAMBRAUW">Mega - TAMBRAUW</option>
                                        <option value="Malenge - TOJO UNA-UNA">Malenge - TOJO UNA-UNA</option>
                                        <option value="Menanga - FLORES TIMUR">Menanga - FLORES TIMUR</option>
                                        <option value="Menui - MOROWALI">Menui - MOROWALI</option>
                                        <option value="Mesuji/Lampung - MESUJI">Mesuji/Lampung - MESUJI</option>
                                        <option value="Pulau Mules - MANGGARAI">Pulau Mules - MANGGARAI</option>
                                        <option value="Pemenang - LOMBOK UTARA">Pemenang - LOMBOK UTARA</option>
                                        <option value="Meulaboh - ACEH BARAT">Meulaboh - ACEH BARAT</option>
                                        <option value="Menggala - TULANG BAWANG">Menggala - TULANG BAWANG</option>
                                        <option value="Mangarang - KEPULAUAN TALAUD">Mangarang - KEPULAUAN TALAUD</option>
                                        <option value="Miangas - KEPULAUAN TALAUD">Miangas - KEPULAUAN TALAUD</option>
                                        <option value="Mahaleta - MALUKU BARAT DAYA">Mahaleta - MALUKU BARAT DAYA</option>
                                        <option value="Manitingting - HALMAHERA TIMUR">Manitingting - HALMAHERA TIMUR</option>
                                        <option value="Maccini Baji - BULUKUMBA">Maccini Baji - BULUKUMBA</option>
                                        <option value="Mamuju - MAMUJU">Mamuju - MAMUJU</option>
                                        <option value="Muara Angke - JAKARTA UTARA">Muara Angke - JAKARTA UTARA</option>
                                        <option value="Makalehi - KEPULAUAN SANGIHE">Makalehi - KEPULAUAN SANGIHE</option>
                                        <option value="Malakoni/P. Enggano - BENGKULU UTARA">Malakoni/P. Enggano - BENGKULU UTARA</option>
                                        <option value="Merauke - MERAUKE">Merauke - MERAUKE</option>
                                        <option value="Munte/Likupang Barat - MINAHASA UTARA">Munte/Likupang Barat - MINAHASA UTARA</option>
                                        <option value="Manokwari - MANOKWARI">Manokwari - MANOKWARI</option>
                                        <option value="Makian - HALMAHERA SELATAN">Makian - HALMAHERA SELATAN</option>
                                        <option value="Teluk Malala - DONGGALA">Teluk Malala - DONGGALA</option>
                                        <option value="Tarakan - TARAKAN">Tarakan - TARAKAN</option>
                                        <option value="Mandopolo/Jojame - HALMAHERA SELATAN">Mandopolo/Jojame - HALMAHERA SELATAN</option>
                                        <option value="Maligano - MUNA">Maligano - MUNA</option>
                                        <option value="Malahayati - ACEH BESAR">Malahayati - ACEH BESAR</option>
                                        <option value="Malili (Sungai) - LUWU TIMUR">Malili (Sungai) - LUWU TIMUR</option>
                                        <option value="Malarko - KARIMUN">Malarko - KARIMUN</option>
                                        <option value="Marlasi - KEPULAUAN ARU">Marlasi - KEPULAUAN ARU</option>
                                        <option value="Molawe - KONAWE UTARA">Molawe - KONAWE UTARA</option>
                                        <option value="Maumbawa - NGADA">Maumbawa - NGADA</option>
                                        <option value="Mamboro - SUMBA TENGAH">Mamboro - SUMBA TENGAH</option>
                                        <option value="Moor - MAPPI">Moor - MAPPI</option>
                                        <option value="Mumugu - ASMAT">Mumugu - ASMAT</option>
                                        <option value="Teluk Melano/Teluk Batang - KAYONG UTARA">Teluk Melano/Teluk Batang - KAYONG UTARA</option>
                                        <option value="Manipa - SERAM BAGIAN BARAT">Manipa - SERAM BAGIAN BARAT</option>
                                        <option value="Maumere /Laurentius Say - SIKA">Maumere /Laurentius Say - SIKA</option>
                                        <option value="Moti - KOTA TERNATE">Moti - KOTA TERNATE</option>
                                        <option value="Marapokot - NAGEKO">Marapokot - NAGEKO</option>
                                        <option value="Moru - ALOR">Moru - ALOR</option>
                                        <option value="Muko-Muko - MUKO-MUKO">Muko-Muko - MUKO-MUKO</option>
                                        <option value="Muara Padang - KOTA PADANG">Muara Padang - KOTA PADANG</option>
                                        <option value="Mempawah - KETAPANG">Mempawah - KETAPANG</option>
                                        <option value="Marore - KEPULAUAN SANGIHE">Marore - KEPULAUAN SANGIHE</option>
                                        <option value="Maritaing - ALOR">Maritaing - ALOR</option>
                                        <option value="Marsela - MALUKU BARAT DAYA">Marsela - MALUKU BARAT DAYA</option>
                                        <option value="Mataritip - BERAU">Mataritip - BERAU</option>
                                        <option value="Meranti/Dorak - PULAU MERANTI">Meranti/Dorak - PULAU MERANTI</option>
                                        <option value="Masalembo - SUMENEP">Masalembo - SUMENEP</option>
                                        <option value="Muara Sabak - TANJUNG JABUNG TIMUR">Muara Sabak - TANJUNG JABUNG TIMUR</option>
                                        <option value="Mansinam - MANOKWARI">Mansinam - MANOKWARI</option>
                                        <option value="Matasiri - BARU">Matasiri - BARU</option>
                                        <option value="Matutuang - KEPULAUAN SANGIHE">Matutuang - KEPULAUAN SANGIHE</option>
                                        <option value="Maurole - ENDE">Maurole - ENDE</option>
                                        <option value="Moutong - PARIGI MOUTONG">Moutong - PARIGI MOUTONG</option>
                                        <option value="Matui - HALMAHERA BARAT">Matui - HALMAHERA BARAT</option>
                                        <option value="Muntok - BANGKA BARAT">Muntok - BANGKA BARAT</option>
                                        <option value="Teminabuan - SORONG SELATAN">Teminabuan - SORONG SELATAN</option>
                                        <option value="Namlea - BURU">Namlea - BURU</option>
                                        <option value="Nabire - NABIRE">Nabire - NABIRE</option>
                                        <option value="Banda Naira - MALUKU TENGAH">Banda Naira - MALUKU TENGAH</option>
                                        <option value="Anggrek - GORONTALO UTARA">Anggrek - GORONTALO UTARA</option>
                                        <option value="Ngalipaeng - KEPULAUAN SANGIHE">Ngalipaeng - KEPULAUAN SANGIHE</option>
                                        <option value="Nipah Panjang - TANJUNG JABUNG TIMUR">Nipah Panjang - TANJUNG JABUNG TIMUR</option>
                                        <option value="Naikliu - KUPANG">Naikliu - KUPANG</option>
                                        <option value="Ndao - ROTENDAO">Ndao - ROTENDAO</option>
                                        <option value="Papela - ROTENDAO">Papela - ROTENDAO</option>
                                        <option value="Nusa Penida (Toyapakeh) - KLUNGKUNG">Nusa Penida (Toyapakeh) - KLUNGKUNG</option>
                                        <option value="Namrole - BURU SELATAN">Namrole - BURU SELATAN</option>
                                        <option value="Bintuni - TELUK BINTUNI">Bintuni - TELUK BINTUNI</option>
                                        <option value="Nunbaun Sabu (Namosain) - KUPANG">Nunbaun Sabu (Namosain) - KUPANG</option>
                                        <option value="Poopongan - MAMUJU">Poopongan - MAMUJU</option>
                                        <option value="Oswald Siahaan/Labuhan Angin - TAPANULI TENGAH">Oswald Siahaan/Labuhan Angin - TAPANULI TENGAH</option>
                                        <option value="Kataloka/Ondor - SERAM BAGIAN TIMUR">Kataloka/Ondor - SERAM BAGIAN TIMUR</option>
                                        <option value="Ogoamas - DONGGALA">Ogoamas - DONGGALA</option>
                                        <option value="Oepoli - KUPANG">Oepoli - KUPANG</option>
                                        <option value="Oransbari - MANOKWARI">Oransbari - MANOKWARI</option>
                                        <option value="P. Sabutung - BONE">P. Sabutung - BONE</option>
                                        <option value="Palue - SIKA">Palue - SIKA</option>
                                        <option value="Paloh/Sakura - SAMBAS">Paloh/Sakura - SAMBAS</option>
                                        <option value="Para - KEPULAUAN SANGIHE">Para - KEPULAUAN SANGIHE</option>
                                        <option value="Pasuruan - PASURUAN">Pasuruan - PASURUAN</option>
                                        <option value="Padang Bai - KARANG ASEM">Padang Bai - KARANG ASEM</option>
                                        <option value="Pantai Cermin - SERDANG BEDAGAI">Pantai Cermin - SERDANG BEDAGAI</option>
                                        <option value="Pacitan - PACITAN">Pacitan - PACITAN</option>
                                        <option value="Pangkalan Dodek - BATU BARA">Pangkalan Dodek - BATU BARA</option>
                                        <option value="Pulau Ende - ENDE">Pulau Ende - ENDE</option>
                                        <option value="Pangandaran - SUKABUMI">Pangandaran - SUKABUMI</option>
                                        <option value="Petta - KEPULAUAN SANGIHE">Petta - KEPULAUAN SANGIHE</option>
                                        <option value="Pehe - SITARO">Pehe - SITARO</option>
                                        <option value="Polewali - POLEWALI MANDAR">Polewali - POLEWALI MANDAR</option>
                                        <option value="Pelita - HALMAHERA SELATAN">Pelita - HALMAHERA SELATAN</option>
                                        <option value="P. Sebesi - LAMPUNG SELATAN">P. Sebesi - LAMPUNG SELATAN</option>
                                        <option value="Pekalongan - PEKALONGAN">Pekalongan - PEKALONGAN</option>
                                        <option value="P. Gebe - HALMAHERA TIMUR">P. Gebe - HALMAHERA TIMUR</option>
                                        <option value="Pagimana - BANGGAI">Pagimana - BANGGAI</option>
                                        <option value="Pangkal Balam - KOTA PANGKAL PINANG">Pangkal Balam - KOTA PANGKAL PINANG</option>
                                        <option value="Pelaihari/Swarangan - TANAH LAUT">Pelaihari/Swarangan - TANAH LAUT</option>
                                        <option value="Panipahan - ROKAN HILIR">Panipahan - ROKAN HILIR</option>
                                        <option value="Pattirobajo - BONE">Pattirobajo - BONE</option>
                                        <option value="Jampea - KEPULAUAN SELAYAR">Jampea - KEPULAUAN SELAYAR</option>
                                        <option value="Pekajang - LINGGA">Pekajang - LINGGA</option>
                                        <option value="Pulau Kampai - LANGKAT">Pulau Kampai - LANGKAT</option>
                                        <option value="Pangkalan Brandan - LANGKAT">Pangkalan Brandan - LANGKAT</option>
                                        <option value="Pangkalan Susu - LANGKAT">Pangkalan Susu - LANGKAT</option>
                                        <option value="Pangkalan Bun - KOTAWARINGIN BARAT">Pangkalan Bun - KOTAWARINGIN BARAT</option>
                                        <option value="Paleleh - BUOL">Paleleh - BUOL</option>
                                        <option value="Palipi - MAJENE">Palipi - MAJENE</option>
                                        <option value="Pulau Kayoa - HALMAHERA SELATAN">Pulau Kayoa - HALMAHERA SELATAN</option>
                                        <option value="Pegatan Mendawai - KATINGAN">Pegatan Mendawai - KATINGAN</option>
                                        <option value="Pomako - MIMIKA">Pomako - MIMIKA</option>
                                        <option value="Pamanukan/Blanakan - SUBANG">Pamanukan/Blanakan - SUBANG</option>
                                        <option value="Paniti - HALMAHERA TENGAH">Paniti - HALMAHERA TENGAH</option>
                                        <option value="Panjang - BANDAR LAMPUNG">Panjang - BANDAR LAMPUNG</option>
                                        <option value="Pontianak - PONTIANAK">Pontianak - PONTIANAK</option>
                                        <option value="Pota - MANGGARAI TIMUR">Pota - MANGGARAI TIMUR</option>
                                        <option value="Palopo/Tg. Ringgit - KOTA PALOPO">Palopo/Tg. Ringgit - KOTA PALOPO</option>
                                        <option value="Pulau Owi - BIAK NUMFOR">Pulau Owi - BIAK NUMFOR</option>
                                        <option value="Pasipalele - HALMAHERA SELATAN">Pasipalele - HALMAHERA SELATAN</option>
                                        <option value="Popolii - TOJO UNA-UNA ">Popolii - TOJO UNA-UNA </option>
                                        <option value="Pam - RAJA AMPAT">Pam - RAJA AMPAT</option>
                                        <option value="Pulang Pisau - PULANG PISAU">Pulang Pisau - PULANG PISAU</option>
                                        <option value="Pekanbaru - KOTA PEKANBARU">Pekanbaru - KOTA PEKANBARU</option>
                                        <option value="Palabuhanratu - SUKABUMI">Palabuhanratu - SUKABUMI</option>
                                        <option value="Parigi - PARIGI MOUTONG">Parigi - PARIGI MOUTONG</option>
                                        <option value="Pigaraja - HALMAHERA SELATAN">Pigaraja - HALMAHERA SELATAN</option>
                                        <option value="Panarukan - SITUBONDO">Panarukan - SITUBONDO</option>
                                        <option value="Poso - POSO">Poso - POSO</option>
                                        <option value="Pasean - PAMEKASAN">Pasean - PAMEKASAN</option>
                                        <option value="Teluk Air / Padang Tikar - KUBU RAYA">Teluk Air / Padang Tikar - KUBU RAYA</option>
                                        <option value="Pulau Tabuan - TANGGAMUS">Pulau Tabuan - TANGGAMUS</option>
                                        <option value="Pulau Tello - NIAS SELATAN">Pulau Tello - NIAS SELATAN</option>
                                        <option value="Patani - HALMAHERA TENGAH">Patani - HALMAHERA TENGAH</option>
                                        <option value="Parit Rempak - KEPULAUAN RIAU">Parit Rempak - KEPULAUAN RIAU</option>
                                        <option value="Pantoloan - KOTA PALU">Pantoloan - KOTA PALU</option>
                                        <option value="Patimban - SUBANG">Patimban - SUBANG</option>
                                        <option value="Pamatata - KEPULAUAN SELAYAR">Pamatata - KEPULAUAN SELAYAR</option>
                                        <option value="Pulau Salura - SUMBA TIMUR">Pulau Salura - SUMBA TIMUR</option>
                                        <option value="Pulau Seluan - NATUNA">Pulau Seluan - NATUNA</option>
                                        <option value="Gita Payahe - KOTA TIDORE KEPULAUAN">Gita Payahe - KOTA TIDORE KEPULAUAN</option>
                                        <option value="Tanjung Tiram/Batubara - BATU BARA">Tanjung Tiram/Batubara - BATU BARA</option>
                                        <option value="Raha - MUNA">Raha - MUNA</option>
                                        <option value="P. Raas - SUMENEP">P. Raas - SUMENEP</option>
                                        <option value="Rembang - REMBANG">Rembang - REMBANG</option>
                                        <option value="Rengat/Kuala Cinaku - INDRAGIRI HULU">Rengat/Kuala Cinaku - INDRAGIRI HULU</option>
                                        <option value="Reo - MANGGARAI">Reo - MANGGARAI</option>
                                        <option value="Rangga Ilung - BARITO SELATAN">Rangga Ilung - BARITO SELATAN</option>
                                        <option value="Raijua - SABU RAIJUA">Raijua - SABU RAIJUA</option>
                                        <option value="Riung - NGADA">Riung - NGADA</option>
                                        <option value="Rainis - KEPULAUAN TALAUD">Rainis - KEPULAUAN TALAUD</option>
                                        <option value="Hila/Romang - MALUKU BARAT DAYA">Hila/Romang - MALUKU BARAT DAYA</option>
                                        <option value="Sluke - REMBANG">Sluke - REMBANG</option>
                                        <option value="Ranai - NATUNA">Ranai - NATUNA</option>
                                        <option value="Ransiki - MANOKWARI">Ransiki - MANOKWARI</option>
                                        <option value="Saparua/Haria - MALUKU TENGAH">Saparua/Haria - MALUKU TENGAH</option>
                                        <option value="Sukamara - SUKAMARA">Sukamara - SUKAMARA</option>
                                        <option value="Sampang - SAMPANG">Sampang - SAMPANG</option>
                                        <option value="P. Sailus - PANGKAJENE KEPULAUAN">P. Sailus - PANGKAJENE KEPULAUAN</option>
                                        <option value="Salakan - BANGGAI KEPULAUAN">Salakan - BANGGAI KEPULAUAN</option>
                                        <option value="Sape - BIMA">Sape - BIMA</option>
                                        <option value="Sibadeh - ACEH SELATAN">Sibadeh - ACEH SELATAN</option>
                                        <option value="Sei Berombang - LABUAN BATU">Sei Berombang - LABUAN BATU</option>
                                        <option value="Sabang - KOTA SABANG">Sabang - KOTA SABANG</option>
                                        <option value="Sibigo - SIMEULUE">Sibigo - SIMEULUE</option>
                                        <option value="Sadai - BANGKA SELATAN">Sadai - BANGKA SELATAN</option>
                                        <option value="Tanjung Sidupa - GORONTALO UTARA">Tanjung Sidupa - GORONTALO UTARA</option>
                                        <option value="Sedanau - NATUNA">Sedanau - NATUNA</option>
                                        <option value="Serongga - BARU">Serongga - BARU</option>
                                        <option value="Sebuku - BARU">Sebuku - BARU</option>
                                        <option value="Sebalang - LAMPUNG SELATAN">Sebalang - LAMPUNG SELATAN</option>
                                        <option value="Sepo - HALMAHERA TENGAH">Sepo - HALMAHERA TENGAH</option>
                                        <option value="Sungai Pakning - BENGKALIS">Sungai Pakning - BENGKALIS</option>
                                        <option value="Seget - SORONG">Seget - SORONG</option>
                                        <option value="Sofifi - KOTA TIDORE KEPULAUAN">Sofifi - KOTA TIDORE KEPULAUAN</option>
                                        <option value="Sungsang - BANYUASIN">Sungsang - BANYUASIN</option>
                                        <option value="Sangatta - KUTAI TIMUR">Sangatta - KUTAI TIMUR</option>
                                        <option value="Sigli - PIDIE">Sigli - PIDIE</option>
                                        <option value="Sikakap - KEPULAUAN MENTAWAI">Sikakap - KEPULAUAN MENTAWAI</option>
                                        <option value="Soasio/Goto - KOTA TIDORE KEPULAUAN">Soasio/Goto - KOTA TIDORE KEPULAUAN</option>
                                        <option value="Siuban - KEPULAUAN MENTAWAI">Siuban - KEPULAUAN MENTAWAI</option>
                                        <option value="Sinjai/Larea-rea - SINJAI">Sinjai/Larea-rea - SINJAI</option>
                                        <option value="Saketa - HALMAHERA SELATAN">Saketa - HALMAHERA SELATAN</option>
                                        <option value="Pokai - KEPULAUAN MENTAWAI">Pokai - KEPULAUAN MENTAWAI</option>
                                        <option value="Sunda Kelapa - JAKARTA UTARA">Sunda Kelapa - JAKARTA UTARA</option>
                                        <option value="Sangkulirang - KUTAI TIMUR">Sangkulirang - KUTAI TIMUR</option>
                                        <option value="Sei Kolak Kijang - KOTA TANJUNG PINANG">Sei Kolak Kijang - KOTA TANJUNG PINANG</option>
                                        <option value="Sikeli - BOMBANA">Sikeli - BOMBANA</option>
                                        <option value="Saukorem - MANOKWARI">Saukorem - MANOKWARI</option>
                                        <option value="Singkawang - SAMBAS">Singkawang - SAMBAS</option>
                                        <option value="Sibolga - KOTA SIBOLGA">Sibolga - KOTA SIBOLGA</option>
                                        <option value="Selat Panjang - PULAU MERANTI">Selat Panjang - PULAU MERANTI</option>
                                        <option value="Sungai Lumpur - OGAN KOMERING ILIR">Sungai Lumpur - OGAN KOMERING ILIR</option>
                                        <option value="Samuda - KOTAWARINGIN TIMUR">Samuda - KOTAWARINGIN TIMUR</option>
                                        <option value="Subaim - HALMAHERA TIMUR">Subaim - HALMAHERA TIMUR</option>
                                        <option value="Sampit - KOTAWARINGIN TIMUR">Sampit - KOTAWARINGIN TIMUR</option>
                                        <option value="Pulau Sambu - KOTA BATAM">Pulau Sambu - KOTA BATAM</option>
                                        <option value="Sintete - SAMBAS">Sintete - SAMBAS</option>
                                        <option value="Sinabang - SIMEULUE">Sinabang - SIMEULUE</option>
                                        <option value="Sinaboi - ROKAN HILIR">Sinaboi - ROKAN HILIR</option>
                                        <option value="Singkil - ACEH SINGKIL">Singkil - ACEH SINGKIL</option>
                                        <option value="Branta - PAMEKASAN">Branta - PAMEKASAN</option>
                                        <option value="Sungai Nyamuk/Sebatik - NUNUKAN">Sungai Nyamuk/Sebatik - NUNUKAN</option>
                                        <option value="Saonek - RAJA AMPAT">Saonek - RAJA AMPAT</option>
                                        <option value="Sorong - SORONG">Sorong - SORONG</option>
                                        <option value="Siompu - BUTON">Siompu - BUTON</option>
                                        <option value="P. Sapuka - PANGKAJENE KEPULAUAN">P. Sapuka - PANGKAJENE KEPULAUAN</option>
                                        <option value="Sapeken - SUMENEP">Sapeken - SUMENEP</option>
                                        <option value="Sanana - KEPULAUAN SULA">Sanana - KEPULAUAN SULA</option>
                                        <option value="Tanjung Selor Kayu / Kayan I - TANJUNG SELOR">Tanjung Selor Kayu / Kayan I - TANJUNG SELOR</option>
                                        <option value="Tanjung Emas - SEMARANG">Tanjung Emas - SEMARANG</option>
                                        <option value="Samarinda - KOTA SAMARINDA">Samarinda - KOTA SAMARINDA</option>
                                        <option value="Serasan - NATUNA">Serasan - NATUNA</option>
                                        <option value="Sirombu - NIAS BARAT">Sirombu - NIAS BARAT</option>
                                        <option value="Seira - MALUKU TENGGARA BARAT">Seira - MALUKU TENGGARA BARAT</option>
                                        <option value="Sausapor - TAMBRAUW">Sausapor - TAMBRAUW</option>
                                        <option value="Selat Lampa - NATUNA">Selat Lampa - NATUNA</option>
                                        <option value="Tanjung Perak - KOTA SURABAYA">Tanjung Perak - KOTA SURABAYA</option>
                                        <option value="Subi - NATUNA">Subi - NATUNA</option>
                                        <option value="Sungai Guntung - INDRAGIRI HILIR">Sungai Guntung - INDRAGIRI HILIR</option>
                                        <option value="Satui/Batu licin - TANAH BUMBU">Satui/Batu licin - TANAH BUMBU</option>
                                        <option value="Susoh - ACEH BARAT DAYA">Susoh - ACEH BARAT DAYA</option>
                                        <option value="Siwa/Bangsalae - WAJO">Siwa/Bangsalae - WAJO</option>
                                        <option value="Sawang - SITARO">Sawang - SITARO</option>
                                        <option value="Serwaru - MALUKU BARAT DAYA">Serwaru - MALUKU BARAT DAYA</option>
                                        <option value="Saumlaki - MALUKU TENGGARA BARAT">Saumlaki - MALUKU TENGGARA BARAT</option>
                                        <option value="Senayang - LINGGA">Senayang - LINGGA</option>
                                        <option value="Sesayap - TARAKAN">Sesayap - TARAKAN</option>
                                        <option value="Tilamuta - BOALEMO">Tilamuta - BOALEMO</option>
                                        <option value="Kota Agung - TANGGAMUS">Kota Agung - TANGGAMUS</option>
                                        <option value="Tanjung Satai - KAYONG UTARA">Tanjung Satai - KAYONG UTARA</option>
                                        <option value="Tanjung Batu Kundur - KARIMUN">Tanjung Batu Kundur - KARIMUN</option>
                                        <option value="Tanjung Beringin - SERDANG BEDAGAI">Tanjung Beringin - SERDANG BEDAGAI</option>
                                        <option value="Teluk Betung - BANDAR LAMPUNG">Teluk Betung - BANDAR LAMPUNG</option>
                                        <option value="Toboali - BANGKA SELATAN">Toboali - BANGKA SELATAN</option>
                                        <option value="Tobelo - HALMAHERA UTARA">Tobelo - HALMAHERA UTARA</option>
                                        <option value="Teluk Bayur - KOTA PADANG">Teluk Bayur - KOTA PADANG</option>
                                        <option value="Teluk Dalam - NIAS SELATAN">Teluk Dalam - NIAS SELATAN</option>
                                        <option value="Tabarfane - KAB. TUAL">Tabarfane - KAB. TUAL</option>
                                        <option value="Tegal - TEGAL">Tegal - TEGAL</option>
                                        <option value="Ternate - KOTA TERNATE">Ternate - KOTA TERNATE</option>
                                        <option value="Parlimbungan Ketek - MANDAILING NATAL">Parlimbungan Ketek - MANDAILING NATAL</option>
                                        <option value="Tifure - KOTA TERNATE">Tifure - KOTA TERNATE</option>
                                        <option value="Teluk Tapang - PASAMAN BARAT">Teluk Tapang - PASAMAN BARAT</option>
                                        <option value="Tagulandang - SITARO">Tagulandang - SITARO</option>
                                        <option value="Tanjung Api-Api - BANYUASIN">Tanjung Api-Api - BANYUASIN</option>
                                        <option value="Telaga Biru - BANGKALAN">Telaga Biru - BANGKALAN</option>
                                        <option value="Tahuna - KEPULAUAN SANGIHE">Tahuna - KEPULAUAN SANGIHE</option>
                                        <option value="Tuhaha - MALUKU TENGAH">Tuhaha - MALUKU TENGAH</option>
                                        <option value="Tanjung Balai Karimun - KARIMUN">Tanjung Balai Karimun - KARIMUN</option>
                                        <option value="Tanjung Pakis - LAMONGAN">Tanjung Pakis - LAMONGAN</option>
                                        <option value="Tanjung Pandan - BELITUNG">Tanjung Pandan - BELITUNG</option>
                                        <option value="Tutu Kembong - MALUKU TENGGARA BARAT">Tutu Kembong - MALUKU TENGGARA BARAT</option>
                                        <option value="Tanjung Laut - KOTA BONTANG">Tanjung Laut - KOTA BONTANG</option>
                                        <option value="Toli-toli - TOLI-TOLI">Toli-toli - TOLI-TOLI</option>
                                        <option value="Tembilahan - INDRAGIRI HULU">Tembilahan - INDRAGIRI HULU</option>
                                        <option value="Tanjung Medang - BENGKALIS">Tanjung Medang - BENGKALIS</option>
                                        <option value="Tarempa - KEPULAUAN ANAMBAS">Tarempa - KEPULAUAN ANAMBAS</option>
                                        <option value="Tanjung Pinang - KOTA TANJUNG PINANG ">Tanjung Pinang - KOTA TANJUNG PINANG </option>
                                        <option value="Taniwel - SERAM BAGIAN BARAT">Taniwel - SERAM BAGIAN BARAT</option>
                                        <option value="Talang Duku - MUARO JAMBI">Talang Duku - MUARO JAMBI</option>
                                        <option value="Torosik - BOLAANG MONGONDO SELATAN">Torosik - BOLAANG MONGONDO SELATAN</option>
                                        <option value="Tepa - MALUKU BARAT DAYA">Tepa - MALUKU BARAT DAYA</option>
                                        <option value="Tapaktuan - ACEH SELATAN">Tapaktuan - ACEH SELATAN</option>
                                        <option value="Tanjung Priok - JAKARTA UTARA">Tanjung Priok - JAKARTA UTARA</option>
                                        <option value="Tua Pejat - KEPULAUAN MENTAWAI">Tua Pejat - KEPULAUAN MENTAWAI</option>
                                        <option value="Tanjung Pura - LANGKAT">Tanjung Pura - LANGKAT</option>
                                        <option value="Tangkiang - BANGGAI">Tangkiang - BANGGAI</option>
                                        <option value="Tikong - KEPULAUAN SULA">Tikong - KEPULAUAN SULA</option>
                                        <option value="Kupang - KUPANG">Kupang - KUPANG</option>
                                        <option value="Tanjung Redeb - BERAU">Tanjung Redeb - BERAU</option>
                                        <option value="Tanjung Berakit - KEPULAUAN RIAU">Tanjung Berakit - KEPULAUAN RIAU</option>
                                        <option value="Tanjung Balai Asahan - ASAHAN">Tanjung Balai Asahan - ASAHAN</option>
                                        <option value="Tanjung Sarang Elang - LABUAN BATU">Tanjung Sarang Elang - LABUAN BATU</option>
                                        <option value="Tanjung Santan - KUTAI KERTANEGARA">Tanjung Santan - KUTAI KERTANEGARA</option>
                                        <option value="Nunukan/Tunon Taka - NUNUKAN">Nunukan/Tunon Taka - NUNUKAN</option>
                                        <option value="Teluk Sigintung/Seruyan - SERUYAN">Teluk Sigintung/Seruyan - SERUYAN</option>
                                        <option value="Tual - KAB. TUAL">Tual - KAB. TUAL</option>
                                        <option value="Tulehu - MALUKU TENGAH">Tulehu - MALUKU TENGAH</option>
                                        <option value="Una-Una - TOJO UNA-UNA">Una-Una - TOJO UNA-UNA</option>
                                        <option value="Eray/Upisera - MALUKU BARAT DAYA">Eray/Upisera - MALUKU BARAT DAYA</option>
                                        <option value="Ujung Jabung - TANJUNG JABUNG TIMUR">Ujung Jabung - TANJUNG JABUNG TIMUR</option>
                                        <option value="Belopa - KEPULAUAN SELAYAR">Belopa - KEPULAUAN SELAYAR</option>
                                        <option value="Ulu Siau - SITARO">Ulu Siau - SITARO</option>
                                        <option value="Wakai - TOJO UNA-UNA">Wakai - TOJO UNA-UNA</option>
                                        <option value="Terong/Waiwerang - FLORES TIMUR">Terong/Waiwerang - FLORES TIMUR</option>
                                        <option value="Wahai - MALUKU TENGAH">Wahai - MALUKU TENGAH</option>
                                        <option value="Wanci - WAKATOBI">Wanci - WAKATOBI</option>
                                        <option value="Wendesi - TELUK WONDAMA">Wendesi - TELUK WONDAMA</option>
                                        <option value="Wulandoni - LEMBATA">Wulandoni - LEMBATA</option>
                                        <option value="Weda - HALMAHERA TENGAH">Weda - HALMAHERA TENGAH</option>
                                        <option value="Wamengkoli - KOLAKA">Wamengkoli - KOLAKA</option>
                                        <option value="Waingapu - SUMBA TIMUR">Waingapu - SUMBA TIMUR</option>
                                        <option value="Waigama - RAJA AMPAT">Waigama - RAJA AMPAT</option>
                                        <option value="Waiwole - MANGGARAI TIMUR">Waiwole - MANGGARAI TIMUR</option>
                                        <option value="Wini - TIMOR TENGAH UTARA">Wini - TIMOR TENGAH UTARA</option>
                                        <option value="Waikelo - SUMBA BARAT DAYA">Waikelo - SUMBA BARAT DAYA</option>
                                        <option value="Wonreli - MALUKU BARAT DAYA">Wonreli - MALUKU BARAT DAYA</option>
                                        <option value="Wani - DONGGALA">Wani - DONGGALA</option>
                                        <option value="Waworada - BIMA">Waworada - BIMA</option>
                                        <option value="Wuring - SIKA">Wuring - SIKA</option>
                                        <option value="Waren - WAROPEN">Waren - WAROPEN</option>
                                        <option value="Waisarisa - SERAM BAGIAN BARAT">Waisarisa - SERAM BAGIAN BARAT</option>
                                        <option value="Waisai - RAJA AMPAT">Waisai - RAJA AMPAT</option>
                                        <option value="Wasior - TELUK WONDAMA">Wasior - TELUK WONDAMA</option>
                                        <option value="Wulur - MALUKU BARAT DAYA">Wulur - MALUKU BARAT DAYA</option>
                                        <option value="Watunohu - KOLAKA UTARA">Watunohu - KOLAKA UTARA</option>
                                        <option value="Waiwadan - FLORES TIMUR">Waiwadan - FLORES TIMUR</option>
                                        <option value="Waiwuring - FLORES TIMUR">Waiwuring - FLORES TIMUR</option>
                                        <option value="Wayaua - HALMAHERA SELATAN">Wayaua - HALMAHERA SELATAN</option>
                                        <option value="Wayabula/Posi-Posi - PULAU MOROTAI">Wayabula/Posi-Posi - PULAU MOROTAI</option>
                                        <option value="Selayar/Benteng/Rauf Rahman - KEPULAUAN SELAYAR">Selayar/Benteng/Rauf Rahman - KEPULAUAN SELAYAR</option>
                                        <option value="Yaba - HALMAHERA SELATAN">Yaba - HALMAHERA SELATAN</option>
                                        <option value="Serui - KEPULAUAN YAPEN">Serui - KEPULAUAN YAPEN</option>
                                        <option value="Sarmi - SARMI">Sarmi - SARMI</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Pelabuhan Muat:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="pelabuhan_muat" id="pelabuhan_muat" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Sumber Pembiayaan:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <select required id="sumber_pembiayaan" name="sumber_pembiayaan" class="select2-hidden-accessible" style="width: 500px;" tabindex="-1" aria-hidden="true">
                                        <option value="">&nbsp;</option>
                                        <option value="Kredit bank">Kredit bank</option>
                                        <option value="Tunai">Tunai</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <h4 style="font-weight: 600; text-decoration: underline; margin-left: 19%;" class="col-md-12 col-md-offset-2">Kapasitas Produk Sebelum</h3>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Nama Produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nama_produk_sebelum" id="nama_produk" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Jumlah Produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input placeholder="Pcs/unit per tahun" required type="number" name="jumlah_produk_sebelum" id="jumlah_produk" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Nilai produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input placeholder="Rupiah" required type="number" name="nilai_produk_sebelum" id="nilai_produk_sebelum" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>


                        <h4 style="font-weight: 600; text-decoration: underline; margin-left: 19%;" class="col-md-12 col-md-offset-2">Kapasitas Produk Sesudah</h3>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Nama Produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="text" name="nama_produk_sesudah" id="nama_produk" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Jumlah Produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input placeholder="Pcs/unit per tahun" required type="number" name="jumlah_produk_sesudah" id="jumlah_produk" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Nilai produk:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input placeholder="Rupiah" required type="number" name="nilai_produk_sesudah" id="nilai_produk" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>
                        <div class="form-group">
                            <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="file_skhu">Penyerapan tenaga kerja:</label>

                            <div class="col-xs-12 col-sm-5">
                                <div class="clearfix">
                                    <input required type="number" name="penyerapan_tenaga_kerja" id="penyerapan_tenaga_kerja" class="form-control col-xs-12 col-sm-5">
                                </div>
                            </div>
                        </div>
                        <div class="space-4"></div>

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
    $("#hs_code").bind('chosen:no_results', chosenNoResults);

    function chosenNoResults(evt, params) {
        $('#section_dokumen_surat_asosiasi').css('display', 'none');
        $('#dokumen_surat_asosiasi').removeAttr('name');
        $('#hs_code').removeAttr('name');
        $('#section_hs_code').css('display', '');
        $('#manual_hs_code').attr('name', 'hs_code');
        
        setTimeout(
        function() 
        {
            $('#hs_code').val('').trigger('chosen:updated');
        }, 1000);
        
        

    }

        
    $('#hs_code').on('change', function() {
        if (this.value != null){
            $('#section_dokumen_surat_asosiasi').css('display', '');
            $('#section_hs_code').css('display', 'none');
            $('#manual_hs_code').removeAttr('name');
            $('#dokumen_surat_asosiasi').attr('name', 'dokumen_surat_asosiasi');
    }

    });
</script>
<script>
    // Jquery Dependency

$("input[data-type='currency']").on({
    keyup: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(".") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "$" + left_side + "." + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "$" + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}



</script>