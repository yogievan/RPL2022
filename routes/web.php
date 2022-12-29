<?php
//login
Route::get('/', 'AuthController@signin')->name('login');
Route::post('/user/ceklogin', 'AuthController@ceklogin');

Route::get('/admin/Login', 'AdminController@adminsignin')->name('login');
Route::post('/admin/ceklogin', 'AdminController@adminceklogin');

Route::get('/manager/Login', 'ManagerController@managersignin')->name('login');
Route::post('/manager/ceklogin', 'ManagerController@managerceklogin');

//sign-up
Route::get('/sign-up', 'AuthController@signup');
Route::post('/create/user', 'AuthController@addDataUser');

Route::get('/admin/sign-up', 'AdminController@AdminSignup');
Route::post('/create/admin', 'AdminController@addDataAdmin');

Route::get('/manager/sign-up', 'ManagerController@ManajerSignup');
Route::post('/create/manager', 'ManagerController@addDataManajer');

//dashboard
Route::get('/DashboardGuest', 'AuthController@DashboardGuest');
Route::get('/TabelUser', 'AdminUserController@TabelUser');
Route::get('/formTiketShuttle', 'CustomerGuestController@formShuttle');
Route::get('/searchTiket', 'CustomerGuestController@searchTiket');  
Route::get('/formSewaBus', 'CustomerGuestController@formSewa');
Route::get('/formSewaBus/book', 'CustomerGuestController@formSewa_book');

Route::group(['middleware' => ['auth']], function () {

});

//user
Route::get('/DashboardCustomer', 'CustomerController@DashboardCustomer');

Route::get('/formTiketShuttle/customer', 'CustomerController@formShuttle');
Route::get('/searchTiket/customer', 'CustomerController@searchTiket');
Route::get('/book/tiket/shuttle/customer/{id}', 'CustomerController@bookingTiket');
Route::put('/formTiketBus/book/Tiket/customer/{id}','CustomerController@tansaksi_tiketShuttle');

Route::get('/formSewaBus/customer', 'CustomerController@formSewa');
Route::get('/formSewaBus/book/customer/{id}', 'CustomerController@formSewa_book');
Route::put('/formSewaBus/book/bus/customer/{id}','CustomerController@tansaksi_sewaBus');

Route::get('/BookingLog', 'CustomerController@bookingLog');
Route::get('/BookingLog/Shuttle/{id}', 'CustomerController@viewbookingLogShuttle');
Route::get('/BookingLog/Sewa/{id}', 'CustomerController@viewbookingLogSewa');

Route::get('/logout', 'AuthController@logout');

//admin
Route::get('/user/search', 'AuthController@user_search');
Route::get('/viewDataUser/{id}', 'AdminUserController@user_view');

Route::get('/DashboardAdmin', 'AdminController@DashboardAdmin');
Route::get('/TabelTransaksi', 'TransaksiController@TableTransaksi');
Route::put('/validasiTransaksiPribadi/{id}', 'TransaksiController@validasiPribadi');
Route::put('/validasiTransaksiInstansi/{id}', 'TransaksiController@validasiInstansi');

Route::get('/viewDataTransaksi/pribadi/{id}','TransaksiController@view_tansaksi_pribadi');
Route::get('/viewDataTransaksi/instansi/{id}','TransaksiController@view_tansaksi_instansi');

Route::get('/TabelBus', 'AdminBusController@TableBus');
Route::get('/addDataBus', 'AdminBusController@addDataBus');
Route::post('/addDataBus/Create', 'AdminBusController@addDataBus_create');
Route::get('/updateDataBus/{id}', 'AdminBusController@updateDataBus');
Route::put('/updateDataBus/Update/{id}', 'AdminBusController@updateDataBus_update');
Route::get('/deleteDataBus/Delete/{id}', 'AdminBusController@deleteDataBus_delete');
Route::get('/bus/search', 'AdminBusController@bus_search');
Route::get('/viewDataBus/{id}', 'AdminBusController@bus_view');

Route::get('/TabelSifat', 'AdminSifatController@TableSifat');

Route::get('/TabelShuttle', 'AdminShuttleController@TableShuttle');
Route::get('/addDataShuttle', 'AdminShuttleController@addDataShuttle');
Route::post('/addDataShuttle/Create', 'AdminShuttleController@addDataShuttle_create');
Route::get('/updateDataShuttle/{id}', 'AdminShuttleController@updateDataShuttle');
Route::put('/updateDataShuttle/Update/{id}', 'AdminShuttleController@updateDataShuttle_update');
Route::get('/deleteDataShuttle/Delete/{id}', 'AdminShuttleController@deleteDataShuttle_delete');
Route::get('/Shuttle/search', 'AdminShuttleController@shuttle_search');

Route::get('/TabelJadwal', 'AdminJadwalController@TableJadwal');
Route::get('/backJadwal', 'AdminJadwalController@backJadwal');
Route::get('/addDataJadwal', 'AdminJadwalController@addDataJadwal');
Route::post('/addDataJadwal/Create', 'AdminJadwalController@addDataJadwal_create');
Route::get('/updateDataJadwal/{id}', 'AdminJadwalController@updateDataJadwal');
Route::put('/updateDataJadwal/Update/{id}', 'AdminJadwalController@updateDataJadwal_update');
Route::get('/deleteDataJadwal/Delete/{id}', 'AdminJadwalController@deleteDataJadwal_delete');
Route::get('/Jadwal/search', 'AdminJadwalController@jadwal_search');

Route::get('/admin/logout', 'AdminController@adminlogout');

//manager
Route::get('/DashboardManager', 'ManagerController@DashboardManager');
Route::get('/manager/logout', 'ManagerController@managerlogout');

Auth::routes();

Route::get('/login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('sent-mail', 'TransaksiController@mailSend');