<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'home::index');

//routes barang
//$routes->get('home', 'home::index');
$routes->get('/barang', 'BarangController::index');
$routes->get('/barang/create', 'BarangController::create');
$routes->post('/barang/store', 'BarangController::store');
$routes->get('/barang/edit/(:segment)', 'BarangController::edit/$1');
$routes->post('/barang/update/(:segment)', 'BarangController::update/$1');
$routes->get('/barang/delete/(:segment)', 'BarangController::delete/$1');

//routes ruangan
$routes->get('/ruangan', 'RuanganController::index');
$routes->get('/ruangan/create', 'RuanganController::create');
$routes->post('/ruangan/store', 'RuanganController::store');
$routes->get('/ruangan/edit/(:segment)', 'RuanganController::edit/$1');
$routes->post('/ruangan/update/(:segment)', 'RuanganController::update/$1');
$routes->get('/ruangan/delete/(:segment)', 'RuanganController::delete/$1');

//routes peminjam
$routes->get('/peminjam', 'PeminjamController::index');
$routes->get('/peminjam/create', 'PeminjamController::create');
$routes->post('/peminjam/store', 'PeminjamController::store');
$routes->get('/peminjam/edit/(:segment)', 'PeminjamController::edit/$1');
$routes->post('/peminjam/update/(:segment)', 'PeminjamController::update/$1');
$routes->get('/peminjam/delete/(:segment)', 'PeminjamController::delete/$1');

//routes peminjamanbarang
$routes->get('/peminjaman_barang', 'PeminjamanBarangController::index');
$routes->get('/peminjaman_barang/create', 'PeminjamanBarangController::create');
$routes->post('/peminjaman_barang/store', 'PeminjamanBarangController::store');
$routes->get('/peminjaman_barang/edit/(:segment)', 'PeminjamanBarangController::edit/$1');
$routes->post('/peminjaman_barang/update/(:segment)', 'PeminjamanBarangController::update/$1');
$routes->get('/peminjaman_barang/delete/(:segment)', 'PeminjamanBarangController::delete/$1');

//routes peminjamanruangan
$routes->get('/peminjaman_ruangan', 'PeminjamanRuanganController::index');
$routes->get('/peminjaman_ruangan/create', 'PeminjamanRuanganController::create');
$routes->post('/peminjaman_ruangan/store', 'PeminjamanRuanganController::store');
$routes->get('/peminjaman_ruangan/edit/(:segment)', 'PeminjamanRuanganController::edit/$1');
$routes->post('/peminjaman_ruangan/update/(:segment)', 'PeminjamanRuanganController::update/$1');
$routes->get('/peminjaman_ruangan/delete/(:segment)', 'PeminjamanRuanganController::delete/$1');

//routes admin
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/create', 'AdminController::create');
$routes->post('/admin/store', 'AdminController::store');
$routes->get('/admin/edit/(:segment)', 'AdminController::edit/$1');
$routes->post('/admin/update/(:segment)', 'AdminController::update/$1');
$routes->get('/admin/delete/(:segment)', 'AdminController::delete/$1');

//routes logpeminjaman
$routes->get('/log_peminjaman', 'LogPeminjamanController::index');
$routes->get('/log_peminjaman/create', 'LogPeminjamanController::create');
$routes->post('/log_peminjaman/store', 'LogPeminjamanController::store');
$routes->get('/log_peminjaman/edit/(:segment)', 'LogPeminjamanController::edit/$1');
$routes->post('/log_peminjaman/update/(:segment)', 'LogPeminjamanController::update/$1');
$routes->get('/log_peminjaman/delete/(:segment)', 'LogPeminjamanController::delete/$1');

