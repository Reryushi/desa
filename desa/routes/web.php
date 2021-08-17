<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/test','Front\RoomBookingController@rekap_kamar');
// Authentication Routes
Auth::routes();
Route::get('login-staff', 'Auth\LoginStaff@showLoginForm')->name('login.staff');
Route::post('login-staff', 'Auth\LoginStaff@login')->name('staff.login');


// Route::post('book-room', 'admin\BookingsController@bookRoom')->name('admin.bookRoom');
// Route::get('search-room', 'front\RoomTypeController@searchRoom2')->name('search-room2');
// Route::get('search-room2', 'admin\BookingsController@searchRoom2')->name('admin.searchRoom');
// Social Logins
Route::get('/', 'Front\HomeController@index')->name('home');

// Routes for Front
Route::get('/', 'Front\HomeController@index')->name('home');

Route::get('/peraturan_desa', 'Front\TentangController@peraturan_desa');
Route::get('/penerima_blt', 'Front\TentangController@penerima_blt');
Route::get('/aparat_desa', 'Front\TentangController@aparat_desa');
Route::get('/data_desa', 'Front\TentangController@data_desa');

Route::get('/contact', 'Front\PageController@contact');
Route::get('/about', 'Front\PageController@about');
Route::post('/subscribe', 'Front\SubscriberController@store');
Route::get('/room_type', 'Front\RoomTypeController@index');
Route::get('/room_type/{id}', 'Front\RoomTypeController@show');
Route::get('/food', 'Front\FoodController@index');
Route::get('/food/{id}', 'Front\FoodController@show');
Route::get('/event', 'Front\EventController@index');
Route::get('/event/{id}', 'Front\EventController@show');
Route::post('/room_type/{id}/book', 'Front\RoomBookingController@book');
Route::post('/event/{id}/book', 'Front\EventBookingController@book');

Route::get('/kegiatan', 'Front\KegiatanController@index');
Route::get('/kegiatan/{id}', 'Front\KegiatanController@show');



Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Routes for Dashboard
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:masyarakat'], function () {
    Route::get('/', 'Dashboard\HomeController@index');
    Route::get('/room/booking', 'Dashboard\RoomBookingController@index');

     //Layanan Surat

     Route::get('/layanan', 'Dashboard\HomeController@layanan');
     Route::resource('layanan/surat_ket_pengantar', 'Dashboard\Layanan\KeteranganPengantarController', ['names' => [
        'store' => 'dashboard.surat_ket_pengantar.store',
        'index' => 'dashboard.surat_ket_pengantar.index',
        'create' => 'dashboard.surat_ket_pengantar.create',
        'destroy' => 'dashboard.surat_ket_pengantar.destroy',
        'show' => 'dashboard.surat_ket_pengantar.show'
    ]]);
    Route::resource('layanan/surat_umum', 'Dashboard\Layanan\SuratUmumController', ['names' => [
        'store' => 'dashboard.surat_umum.store',
        'index' => 'dashboard.surat_umum.index',
        'create' => 'dashboard.surat_umum.create',
        'destroy' => 'dashboard.surat_umum.destroy',
        'show' => 'dashboard.surat_umum.show'
    ]]);
    Route::resource('layanan/surat_ket_penduduk', 'Dashboard\Layanan\KeteranganPendudukController', ['names' => [
        'store' => 'dashboard.surat_ket_penduduk.store',
        'index' => 'dashboard.surat_ket_penduduk.index',
        'create' => 'dashboard.surat_ket_penduduk.create',
        'destroy' => 'dashboard.surat_ket_penduduk.destroy',
        'show' => 'dashboard.surat_ket_penduduk.show'
    ]]);
    Route::resource('layanan/surat_ket_catatan_kepolisian', 'Dashboard\Layanan\KeteranganKepolisianController', ['names' => [
        'store' => 'dashboard.surat_ket_catatan_kepolisian.store',
        'index' => 'dashboard.surat_ket_catatan_kepolisian.index',
        'create' => 'dashboard.surat_ket_catatan_kepolisian.create',
        'destroy' => 'dashboard.surat_ket_catatan_kepolisian.destroy',
        'show' => 'dashboard.surat_ket_catatan_kepolisian.show'
    ]]);
   
    Route::get('/room/booking/{id}/invoice', 'Dashboard\RoomBookingController@invoice');
    Route::get('/event/booking', 'Dashboard\EventBookingController@index');
    Route::get('room/booking/{id}/cancel', 'Dashboard\RoomBookingController@cancel');
    Route::get('/room/booking/{id}/edit', 'Dashboard\RoomBookingController@edit');
    Route::put('/room/booking/{id}/edit', 'Dashboard\RoomBookingController@update');
    Route::get('event/booking/{id}/cancel', 'Dashboard\EventBookingController@cancel');

    Route::get('profile', 'Dashboard\UserController@edit_profile');
    Route::put('profile', 'Dashboard\UserController@update_profile');

    Route::get('setting', 'Dashboard\UserController@setting');
    Route::put('setting', 'Dashboard\UserController@update_setting');

    Route::get('room/booking/{id}/review', 'Dashboard\ReviewController@create');
    Route::post('room/booking/{id}/review', 'Dashboard\ReviewController@store');
});


// Routes for Admin
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    //Layanan Surat

    Route::get('/surat_umum/{id}/approve', 'Admin\Layanan\SuratUmumController@approve');
    Route::get('/surat_umum/{id}/reject', 'Admin\Layanan\SuratUmumController@reject');

    Route::resource('surat_umum', 'Admin\Layanan\SuratUmumController', ['names' => [
        'store' => 'admin.surat_umum.store',
        'index' => 'admin.surat_umum.index',
        'create' => 'admin.surat_umum.create',
        'destroy' => 'admin.surat_umum.destroy',
        'show' => 'admin.surat_umum.show'
    ]]);

    Route::get('/surat_ket_pengantar', 'Admin\Layanan\SuratUmumController@sk_pengantar');
    Route::get('/surat_ket_penduduk', 'Admin\Layanan\SuratUmumController@sk_penduduk');
    Route::get('/surat_ket_catatan_kepolisian', 'Admin\Layanan\SuratUmumController@sk_kepolisian');

    // Route::resource('surat_ket_pengantar', 'Admin\Layanan\SuratUmumController', ['names' => [
    //     'store' => 'admin.surat_ket_pengantar.store',
    //     'index' => 'admin.surat_ket_pengantar.index',
    //     'create' => 'admin.surat_ket_pengantar.create',
    //     'destroy' => 'admin.surat_ket_pengantar.destroy',
    //     'show' => 'admin.surat_ket_pengantar.show'
    // ]]);
    // Route::resource('surat_ket_penduduk', 'Admin\Layanan\SuratUmumController', ['names' => [
    //     'store' => 'admin.surat_ket_penduduk.store',
    //     'index' => 'admin.surat_ket_penduduk.index',
    //     'create' => 'admin.surat_ket_penduduk.create',
    //     'destroy' => 'admin.surat_ket_penduduk.destroy',
    //     'show' => 'admin.surat_ket_penduduk.show'
    // ]]);
    // Route::resource('surat_ket_catatan_kepolisian', 'Admin\Layanan\SuratUmumController', ['names' => [
    //     'store' => 'admin.surat_ket_catatan_kepolisian.store',
    //     'index' => 'admin.surat_ket_catatan_kepolisian.index',
    //     'create' => 'admin.surat_ket_catatan_kepolisian.create',
    //     'destroy' => 'admin.surat_ket_catatan_kepolisian.destroy',
    //     'show' => 'admin.surat_ket_catatan_kepolisian.show'
    // ]]);

    //Adminstrasi Umum
    Route::resource('peraturandesa', 'Admin\A\PeraturanDesaController', ['names' => [
        'store' => 'admin.peraturandesa.store',
        'update' => 'admin.peraturandesa.update',
        'index' => 'admin.peraturandesa.index',
        'create' => 'admin.peraturandesa.create',
        'edit' => 'admin.peraturandesa.edit',
        'destroy' => 'admin.peraturandesa.destroy',
        'show' => 'admin.peraturandesa.show'
    ]]);
    Route::resource('keputusankadesa', 'Admin\A\KeputusanKadesController', ['names' => [
        'store' => 'admin.keputusankadesa.store',
        'update' => 'admin.keputusankadesa.update',
        'index' => 'admin.keputusankadesa.index',
        'create' => 'admin.keputusankadesa.create',
        'edit' => 'admin.keputusankadesa.edit',
        'destroy' => 'admin.keputusankadesa.destroy',
        'show' => 'admin.keputusankadesa.show'
    ]]); 
    Route::resource('inventariskekayaan', 'Admin\A\InventarisKekayaanController', ['names' => [
        'store' => 'admin.inventariskekayaan.store',
        'update' => 'admin.inventariskekayaan.update',
        'index' => 'admin.inventariskekayaan.index',
        'create' => 'admin.inventariskekayaan.create',
        'edit' => 'admin.inventariskekayaan.edit',
        'destroy' => 'admin.inventariskekayaan.destroy',
        'show' => 'admin.inventariskekayaan.show'
    ]]);
    Route::resource('aparatdesa', 'Admin\A\AparatDesaController', ['names' => [
        'store' => 'admin.aparatdesa.store',
        'update' => 'admin.aparatdesa.update',
        'index' => 'admin.aparatdesa.index',
        'create' => 'admin.aparatdesa.create',
        'edit' => 'admin.aparatdesa.edit',
        'destroy' => 'admin.aparatdesa.destroy',
        'show' => 'admin.aparatdesa.show'
    ]]);
    Route::resource('tanahkasdesa', 'Admin\A\TanahKasDesaController', ['names' => [
        'store' => 'admin.tanahkasdesa.store',
        'update' => 'admin.tanahkasdesa.update',
        'index' => 'admin.tanahkasdesa.index',
        'create' => 'admin.tanahkasdesa.create',
        'edit' => 'admin.tanahkasdesa.edit',
        'destroy' => 'admin.tanahkasdesa.destroy',
        'show' => 'admin.tanahkasdesa.show'
    ]]);
    Route::resource('tanahdesa', 'Admin\A\TanahDesaController', ['names' => [
        'store' => 'admin.tanahdesa.store',
        'update' => 'admin.tanahdesa.update',
        'index' => 'admin.tanahdesa.index',
        'create' => 'admin.tanahdesa.create',
        'edit' => 'admin.tanahdesa.edit',
        'destroy' => 'admin.tanahdesa.destroy',
        'show' => 'admin.tanahdesa.show'
    ]]);
    Route::resource('agenda', 'Admin\A\AgendaController', ['names' => [
        'store' => 'admin.agenda.store',
        'update' => 'admin.agenda.update',
        'index' => 'admin.agenda.index',
        'create' => 'admin.agenda.create',
        'edit' => 'admin.agenda.edit',
        'destroy' => 'admin.agenda.destroy',
        'massDestroy' => 'admin.agenda.massDestroy',
        'show' => 'admin.agenda.show'
    ]]);
    Route::resource('ekspedisi', 'Admin\A\EkspedisiController', ['names' => [
        'store' => 'admin.ekspedisi.store',
        'update' => 'admin.ekspedisi.update',
        'index' => 'admin.ekspedisi.index',
        'create' => 'admin.ekspedisi.create',
        'edit' => 'admin.ekspedisi.edit',
        'destroy' => 'admin.ekspedisi.destroy',
        'show' => 'admin.ekspedisi.show'
    ]]);
    Route::resource('lembarberita', 'Admin\A\LembarBeritaDesaController', ['names' => [
        'store' => 'admin.lembarberita.store',
        'update' => 'admin.lembarberita.update',
        'index' => 'admin.lembarberita.index',
        'create' => 'admin.lembarberita.create',
        'edit' => 'admin.lembarberita.edit',
        'destroy' => 'admin.lembarberita.destroy',
        'show' => 'admin.lembarberita.show'
    ]]);

    //Adminstrasi Penduduk
    
    Route::resource('buku_induk', 'Admin\B\BukuIndukController', ['names' => [
        'store' => 'admin.buku_induk.store',
        'update' => 'admin.buku_induk.update',
        'index' => 'admin.buku_induk.index',
        'create' => 'admin.buku_induk.create',
        'edit' => 'admin.buku_induk.edit',
        'destroy' => 'admin.buku_induk.destroy',
        'show' => 'admin.buku_induk.show'
    ]]);
    Route::resource('buku_mutasi', 'Admin\B\BukuMutasiController', ['names' => [
        'store' => 'admin.buku_mutasi.store',
        'update' => 'admin.buku_mutasi.update',
        'index' => 'admin.buku_mutasi.index',
        'create' => 'admin.buku_mutasi.create',
        'edit' => 'admin.buku_mutasi.edit',
        'destroy' => 'admin.buku_mutasi.destroy',
        'show' => 'admin.buku_mutasi.show'
    ]]);
    Route::resource('buku_ktp', 'Admin\B\BukuKtpKKController', ['names' => [
        'store' => 'admin.buku_ktp.store',
        'update' => 'admin.buku_ktp.update',
        'index' => 'admin.buku_ktp.index',
        'create' => 'admin.buku_ktp.create',
        'edit' => 'admin.buku_ktp.edit',
        'destroy' => 'admin.buku_ktp.destroy',
        'show' => 'admin.buku_ktp.show'
    ]]);
    Route::resource('buku_sementara', 'Admin\B\BukuPendudukSementaraController', ['names' => [
        'store' => 'admin.buku_sementara.store',
        'update' => 'admin.buku_sementara.update',
        'index' => 'admin.buku_sementara.index',
        'create' => 'admin.buku_sementara.create',
        'edit' => 'admin.buku_sementara.edit',
        'destroy' => 'admin.buku_sementara.destroy',
        'show' => 'admin.buku_sementara.show'
    ]]);
    Route::resource('buku_rekapitulasi', 'Admin\B\BukuRekapitulasiController', ['names' => [
        'store' => 'admin.buku_rekapitulasi.store',
        'update' => 'admin.buku_rekapitulasi.update',
        'index' => 'admin.buku_rekapitulasi.index',
        'create' => 'admin.buku_rekapitulasi.create',
        'edit' => 'admin.buku_rekapitulasi.edit',
        'destroy' => 'admin.buku_rekapitulasi.destroy',
        'show' => 'admin.buku_rekapitulasi.show'
    ]]);

    //Adminstrasi Keuangan
    Route::resource('buku_apbd', 'Admin\C\BukuAPBDController', ['names' => [
        'store' => 'admin.buku_apbd.store',
        'update' => 'admin.buku_apbd.update',
        'index' => 'admin.buku_apbd.index',
        'create' => 'admin.buku_apbd.create',
        'edit' => 'admin.buku_apbd.edit',
        'destroy' => 'admin.buku_apbd.destroy',
        'show' => 'admin.buku_apbd.show'
    ]]);
    Route::resource('buku_rencanaA', 'Admin\C\BukuRencanaAnggaranController', ['names' => [
        'store' => 'admin.buku_rencanaA.store',
        'update' => 'admin.buku_rencanaA.update',
        'index' => 'admin.buku_rencanaA.index',
        'create' => 'admin.buku_rencanaA.create',
        'edit' => 'admin.buku_rencanaA.edit',
        'destroy' => 'admin.buku_rencanaA.destroy',
        'show' => 'admin.buku_rencanaA.show'
    ]]);
    Route::resource('buku_kasP', 'Admin\C\BukuKasPembantuController', ['names' => [
        'store' => 'admin.buku_kasP.store',
        'update' => 'admin.buku_kasP.update',
        'index' => 'admin.buku_kasP.index',
        'create' => 'admin.buku_kasP.create',
        'edit' => 'admin.buku_kasP.edit',
        'destroy' => 'admin.buku_kasP.destroy',
        'show' => 'admin.buku_kasP.show'
    ]]);
    Route::resource('buku_kas_umum', 'Admin\C\BukuKasUmumController', ['names' => [
        'store' => 'admin.buku_kas_umum.store',
        'update' => 'admin.buku_kas_umum.update',
        'index' => 'admin.buku_kas_umum.index',
        'create' => 'admin.buku_kas_umum.create',
        'edit' => 'admin.buku_kas_umum.edit',
        'destroy' => 'admin.buku_kas_umum.destroy',
        'show' => 'admin.buku_kas_umum.show'
    ]]);
    Route::resource('buku_kas_prpl', 'Admin\C\BukuKasPRPLController', ['names' => [
        'store' => 'admin.buku_kas_prpl.store',
        'update' => 'admin.buku_kas_prpl.update',
        'index' => 'admin.buku_kas_prpl.index',
        'create' => 'admin.buku_kas_prpl.create',
        'edit' => 'admin.buku_kas_prpl.edit',
        'destroy' => 'admin.buku_kas_prpl.destroy',
        'show' => 'admin.buku_kas_prpl.show'
    ]]);
    Route::resource('buku_bank', 'Admin\C\BukuBankDesaController', ['names' => [
        'store' => 'admin.buku_bank.store',
        'update' => 'admin.buku_bank.update',
        'index' => 'admin.buku_bank.index',
        'create' => 'admin.buku_bank.create',
        'edit' => 'admin.buku_bank.edit',
        'destroy' => 'admin.buku_bank.destroy',
        'show' => 'admin.buku_bank.show'
    ]]);

    //Adminstrasi Pembangunan
    Route::resource('rencanakerja', 'Admin\D\RencanaKerjaPembangunanController', ['names' => [
        'store' => 'admin.rencanakerja.store',
        'update' => 'admin.rencanakerja.update',
        'index' => 'admin.rencanakerja.index',
        'create' => 'admin.rencanakerja.create',
        'edit' => 'admin.rencanakerja.edit',
        'destroy' => 'admin.rencanakerja.destroy',
        'show' => 'admin.rencanakerja.show'
    ]]); 
    Route::resource('kegiatanpembangunan', 'Admin\D\KegiatanPembangunanController', ['names' => [
        'store' => 'admin.kegiatanpembangunan.store',
        'update' => 'admin.kegiatanpembangunan.update',
        'index' => 'admin.kegiatanpembangunan.index',
        'create' => 'admin.kegiatanpembangunan.create',
        'edit' => 'admin.kegiatanpembangunan.edit',
        'destroy' => 'admin.kegiatanpembangunan.destroy',
        'show' => 'admin.kegiatanpembangunan.show'
    ]]); 
    Route::resource('inventarishasil', 'Admin\D\InventarisHasilController', ['names' => [
        'store' => 'admin.inventarishasil.store',
        'update' => 'admin.inventarishasil.update',
        'index' => 'admin.inventarishasil.index',
        'create' => 'admin.inventarishasil.create',
        'edit' => 'admin.inventarishasil.edit',
        'destroy' => 'admin.inventarishasil.destroy',
        'show' => 'admin.inventarishasil.show'
    ]]); 
    Route::resource('kaderpemberdayaan', 'Admin\D\KaderPemberdayaanController', ['names' => [
        'store' => 'admin.kaderpemberdayaan.store',
        'update' => 'admin.kaderpemberdayaan.update',
        'index' => 'admin.kaderpemberdayaan.index',
        'create' => 'admin.kaderpemberdayaan.create',
        'edit' => 'admin.kaderpemberdayaan.edit',
        'destroy' => 'admin.kaderpemberdayaan.destroy',
        'show' => 'admin.kaderpemberdayaan.show'
    ]]); 

    // Route::post('/', "Admin\HomeController@get_tot")->name('get_total');
    Route::post('/', "Admin\HomeController@result")->name('get_result');
    // Route::post('/result', "Admin\HomeController@get_tot")->name('result');

    Route::get('/', 'Admin\HomeController@index');
    Route::resource('slider', 'Admin\SliderController');
    Route::post('/slider/hapus/{id}', 'Admin\SliderController@destroy');
    // Route::resource('facility', 'Admin\FacilityController');
    // Route::post('/facility/hapus/{id}', 'Admin\FacilityController@destroy');
    Route::resource('event', 'Admin\EventController');
    Route::post('/event/hapus/{id}', 'Admin\EventController@destroy');
    Route::resource('food', 'Admin\FoodController');
    Route::post('/food/hapus/{id}', 'Admin\FoodController@destroy');
    Route::post('/user/hapus/{id}', 'Admin\UserController@destroy');
    // Route::get('page', 'Admin\PageController@index');
    // Route::get('page/{id}/edit', 'Admin\PageController@edit');
    // Route::put('page/{id}', 'Admin\PageController@update');


    // User Routes
    Route::resource('user', 'Admin\UserController');
    Route::get('user/{id}/profile', 'Admin\UserController@profile');
    Route::put('user/{id}/profile', 'Admin\UserController@update_profile');
    Route::get('user/{id}/setting', 'Admin\UserController@setting');
    Route::put('user/{id}/setting', 'Admin\UserController@update_setting');
    Route::post('/user/hapus/{id}', 'Admin\UserController@destroy');


    //Routes for RoomBookings
    Route::delete('room_booking/destroy', 'Admin\RoomBookingController@massDestroy')->name('admin.room_booking.massDestroy');

    Route::get('/room_booking', 'Admin\RoomBookingController@index');
    Route::get('/room_booking/{id}/invoice', 'Admin\RoomBookingController@invoice');
    Route::get('/room_booking/{id}/edit', 'Admin\RoomBookingController@edit')->name('admin.room_booking.edit');
    Route::put('/room_booking/{id}/edit', 'Admin\RoomBookingController@update');
    Route::post('/room_booking/hapus/{id}', 'Admin\RoomBookingController@destroy');

    Route::get('/system-calendar', 'admin\SystemCalendarController@index')->name('systemCalendar');
    Route::get('/search-room', 'front\RoomTypeController@view_searchRoom')->name('admin.searchRoom');


    //Routes for EventBookings
    Route::get('/event_booking', 'Admin\EventBookingController@index');
    Route::get('/event_booking/{id}/edit', 'Admin\EventBookingController@edit');
    Route::put('/event_booking/{id}/edit', 'Admin\EventBookingController@update');


    // Route::get('/review', 'Admin\ReviewController@index');
    // Route::get('/review/{id}/approve', 'Admin\ReviewController@approve');
    // Route::get('/review/{id}/reject', 'Admin\ReviewController@reject');

    Route::resource('room_type', 'Admin\RoomTypeController');
    // Route for room types
    Route::group(['prefix' => 'room_type', 'middleware' => 'auth'], function(){
        // Rutes for Room Type Images
        Route::post('/hapus/{id}', 'Admin\RoomTypeController@destroy');
        Route::get('/{id}/image', 'Admin\ImageController@index');
        Route::get('/{id}/image/create', 'Admin\ImageController@create');
        Route::post('/{id}/image', 'Admin\ImageController@store');
        Route::get('/{id}/image/{image_id}/edit', 'Admin\ImageController@edit');
        Route::put('/{id}/image/{image_id}/edit', 'Admin\ImageController@update');
        Route::get('/{id}/image/create_multiple', 'Admin\ImageController@create_multiple');
        Route::post('/{id}/image/create_multiple', 'Admin\ImageController@store_multiple');
        Route::post('/{id}/image/hapus/{image_id}', 'Admin\ImageController@destroy');

        // Routes for Rooms
        Route::post('/{id}/room/{room_id}/hapus', 'Admin\RoomController@destroy');
        Route::get('/{id}/room', 'Admin\RoomController@index');
        Route::get('/{id}/room/create', 'Admin\RoomController@create');
        Route::post('/{id}/room', 'Admin\RoomController@store');
        Route::get('/{id}/room/{room_id}/edit', 'Admin\RoomController@edit');
        Route::put('/{id}/room/{room_id}/edit', 'Admin\RoomController@update');
        Route::delete('/{id}/room/{image_id}', 'Admin\RoomController@destroy');

    });
});



