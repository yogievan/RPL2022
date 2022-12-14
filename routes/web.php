<?php
Route::get('/', 'AuthController@signin')->name('login');
Route::post('/user/ceklogin', 'AuthController@ceklogin');

// Route::get('/admin/Login', 'AuthController@adminsignin')->name('loginAdmin');
// Route::post('/admin/ceklogin', 'AuthController@adminceklogin');

// Route::get('/manager/Login', 'AuthController@managersignin')->name('loginManager');
// Route::post('/manager/ceklogin', 'AuthController@managerceklogin');

Route::get('/sign-up', 'AuthController@signup');
Route::get('/DashboardGuest', 'AuthController@DashboardGuest');
Route::get('/TabelUser', 'AdminUserController@TabelUser');
Route::post('/create/user', 'AuthController@addDataUser');
Route::get('/formTiketShuttle', 'CustomerGuestController@formShuttle');
Route::get('/searchTiket', 'CustomerGuestController@searchTiket');  
Route::get('/formSewaBus', 'CustomerGuestController@formSewa');
Route::get('/formSewaBus/book', 'CustomerGuestController@formSewa_book');

//user
Route::get('/DashboardCustomer', 'CustomerController@DashboardCustomer');
Route::get('/profileUser/{id}', 'AuthController@profile_user');
Route::post('/update/user/{id}', 'AuthController@profile_update');
Route::get('/settingprofile', 'CustomerController@setting_profile');

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
Route::get('/TabelTransaksi', 'AdminController@TableTransaksi');
Route::post('/validasiTransaksiPribadi/{id}', 'AdminController@validasiPribadi');
Route::get('/viewDataTransaksi/pribadi/{id}','AdminController@view_tansaksi_pribadi');
Route::get('/viewDataTransaksi/instansi/{id}','AdminController@view_tansaksi_instansi');

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

Route::get('/admin/logout', 'AuthController@adminlogout');

//manager
Route::get('/DashboardManager', 'ManagerController@DashboardManager');
