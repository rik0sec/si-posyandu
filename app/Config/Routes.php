<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/

$routes->match(['get','post'],'login','Auth::login');
$routes->get('logout','Auth::logout');

/*
|--------------------------------------------------------------------------
| DASHBOARD
|--------------------------------------------------------------------------
*/

$routes->get('dashboard','Dashboard::index');

/*
|--------------------------------------------------------------------------
| BALITA
|--------------------------------------------------------------------------
*/

$routes->get('balita','Balita::index');

$routes->match(['get','post'],'balita/tambah','Balita::tambah');

$routes->match(['get','post'],'balita/edit/(:num)','Balita::edit/$1');

$routes->get('balita/delete/(:num)','Balita::delete/$1');

$routes->get('balita/detail/(:num)','Balita::detail/$1');


/*
|--------------------------------------------------------------------------
| PETUGAS
|--------------------------------------------------------------------------
*/

$routes->get('petugas','Petugas::index');

$routes->match(['get','post'],'petugas/tambah','Petugas::tambah');

$routes->match(['get','post'],'petugas/edit/(:num)','Petugas::edit/$1');

$routes->get('petugas/delete/(:num)','Petugas::delete/$1');


/*
|--------------------------------------------------------------------------
| IMUNISASI
|--------------------------------------------------------------------------
*/

$routes->get('imunisasi','Imunisasi::index');

$routes->match(['get','post'],'imunisasi/tambah','Imunisasi::tambah');

$routes->match(['get','post'],'imunisasi/edit/(:num)','Imunisasi::edit/$1');

$routes->get('imunisasi/delete/(:num)','Imunisasi::delete/$1');


/*
|--------------------------------------------------------------------------
| PENIMBANGAN
|--------------------------------------------------------------------------
*/

$routes->get('penimbangan','Penimbangan::index');

$routes->match(['get','post'],'penimbangan/tambah','Penimbangan::tambah');

$routes->match(['get','post'],'penimbangan/edit/(:num)','Penimbangan::edit/$1');

$routes->get('penimbangan/delete/(:num)','Penimbangan::delete/$1');

/*
|--------------------------------------------------------------------------
| LAPORAN
|--------------------------------------------------------------------------
*/

$routes->get('laporan', 'Laporan::index');
$routes->get('laporan/cetak', 'Laporan::cetak');