<?php $group = $this->session->userdata('group') ?>
<ul class="nav nav-list">
    <li class="">
        <a href="<?= base_url('dashboard-admin') ?>">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Home </span>
        </a>

        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class=" menu-icon fa fa-database"></i>
            <span class="menu-text"> BM Master list </span>

            <b class="arrow fa fa-angle-down"></b>
        </a>

        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="<?= base_url('master-list/daftar-permohonan') ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Daftar Permohonan
                </a>

                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="<?= base_url('master-list/status-proses') ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Status Proses
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="<?= base_url('master-list/sudah-terbit') ?>">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Sudah Terbit
                </a>

                <b class="arrow"></b>
            </li>
        </ul>
    </li>




</ul><!-- /.nav-list -->