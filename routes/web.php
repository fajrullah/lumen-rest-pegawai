<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return array(
                    'Version' => $router->app->version(),
                    'PUT/deletel/GET' => '/[divisi|jabatan|karyawan]/$1',
                    'POST/GET' => '/[divisi|jabatan|karyawan]'
    );
});

/**
 * CRUD DIVISI
 */
$router->get('/divisi', 'ExampleController@getAllDivisi');
$router->get('/divisi/{id}', 'ExampleController@getDetailDivisi');
$router->post('/divisi', 'ExampleController@saveDataDivisi');
$router->put('/divisi/{id}', 'ExampleController@updateDataDivisi');
$router->delete('/divisi/{id}', 'ExampleController@destroyDataDivisi');

/**
 * CRUD JABATAN
 */
$router->get('/jabatan', 'ExampleController@getAllJabatan');
$router->get('/jabatan/{id}', 'ExampleController@getDetailJabatan');
$router->post('/jabatan', 'ExampleController@saveDataJabatan');
$router->put('/jabatan/{id}', 'ExampleController@updateDataJabatan');
$router->delete('/jabatan/{id}', 'ExampleController@destroyDataJabatan');

/**
 * CRUD KARYAWAN
 */
$router->get('/karyawan', 'ExampleController@getAllKaryawan');
$router->get('/karyawan/{id}', 'ExampleController@getDetailKaryawan');
$router->post('/karyawan', 'ExampleController@saveDataKaryawan');
$router->put('/karyawan/{id}', 'ExampleController@updateDataKaryawan');
$router->delete('/karyawan/{id}', 'ExampleController@destroyDataKaryawan');