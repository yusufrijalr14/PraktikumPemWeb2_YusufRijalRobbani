<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// admin routes
$route['administrator'] = 'auth';
$route['administrator/login'] = 'auth/login';
$route['administrator/logout'] = 'auth/logout';
$route['administrator/dashboard'] = 'dashboard';

// tempat wisata
$route['administrator/tempat-wisata'] = 'tempatwisata';
$route['administrator/tambah-wisata'] = 'tempatwisata/form_add';
$route['administrator/proses-tambah-wisata'] = 'tempatwisata/add';
$route['administrator/edit-wisata/(:any)'] = 'tempatwisata/form_edit/$1';
$route['administrator/proses-edit-wisata/(:any)'] = 'tempatwisata/edit/$1';
$route['administrator/hapus-wisata/(:any)'] = 'tempatwisata/delete/$1';
$route['administrator/detail-wisata/(:any)'] = 'tempatwisata/detail/$1';

// jenis wisata
$route['administrator/jenis-wisata'] = 'jeniswisata';
$route['administrator/tambah-jenis-wisata'] = 'jeniswisata/form_add';
$route['administrator/proses-tambah-jenis-wisata'] = 'jeniswisata/add';
$route['administrator/edit-jenis-wisata/(:any)'] = 'jeniswisata/form_edit/$1';
$route['administrator/proses-edit-jenis-wisata/(:any)'] = 'jeniswisata/edit/$1';
$route['administrator/hapus-jenis-wisata/(:any)'] = 'jeniswisata/delete/$1';

// jenis wisata
$route['administrator/kecamatan'] = 'kecamatan';
$route['administrator/tambah-kecamatan'] = 'kecamatan/form_add';
$route['administrator/proses-tambah-kecamatan'] = 'kecamatan/add';
$route['administrator/edit-kecamatan/(:any)'] = 'kecamatan/form_edit/$1';
$route['administrator/proses-edit-kecamatan/(:any)'] = 'kecamatan/edit/$1';
$route['administrator/hapus-kecamatan/(:any)'] = 'kecamatan/delete/$1';

// pengguna
$route['administrator/pengguna'] = 'pengguna';
$route['administrator/tambah-pengguna'] = 'pengguna/form_add';
$route['administrator/proses-tambah-pengguna'] = 'pengguna/add';
$route['administrator/edit-pengguna/(:any)'] = 'pengguna/form_edit/$1';
$route['administrator/proses-edit-pengguna/(:any)'] = 'pengguna/edit/$1';
$route['administrator/hapus-pengguna/(:any)'] = 'pengguna/delete/$1';

// user route
$route['detail-wisata/(:any)'] = 'pages/detail/$1';
$route['register/(:any)'] = 'pages/register/$1';
$route['login'] = 'pages/login';
$route['logout'] = 'pages/logout';
$route['komentar/(:any)'] = 'pages/komentar/$1';
$route['tambah-komentar'] = 'pages/tambah_komentar';

$route['default_controller'] = 'pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
