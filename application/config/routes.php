<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashboard/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login'] = 'Auth/index';
$route['register'] = 'Auth/register';
$route['logout'] = 'Auth/logout';
$route['dashboard-admin'] = 'Dashboard/dashboard_admin';

$route['services/licensing'] = 'Services/Licensing/index';
$route['services/licensing/formulir-pemohon'] = 'Services/Licensing/formulir_pemohon';
$route['services/licensing/detail-permohonan'] = 'Services/Licensing/detail_permohonan';
$route['services/licensing/surat-rekomendasi'] = 'Services/Licensing/surat_rekomendasi';

$route['services/licensing/formulir-produk'] = 'Services/Licensing/formulir_produk';
$route['services/licensing/list-produk'] = 'Services/Licensing/list_produk';
$route['services/licensing/detail-produk'] = 'Services/Licensing/detail_produk';
$route['services/licensing/delete-produk'] = 'Services/Licensing/delete_produk';

$route['master-list/daftar-permohonan'] = 'MasterList/daftar_permohonan';
$route['master-list/status-proses'] = 'MasterList/status_proses';
$route['master-list/sudah-terbit'] = 'MasterList/terbit';
$route['master-list/detail-permohonan'] = 'MasterList/detail_permohonan';
$route['master-list/disposisi'] = 'MasterList/disposisi';


