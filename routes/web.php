<?php

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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
Route::view('/materi','tests/aa/materi');
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/ongkir', 'OngkirController@getOngkir');
Route::prefix('dashboard')->name('dashboard.')->group(function () {
	Route::get('/', 'HomeController@dashboard')->name('index')->middleware('auth');
});
//============BACK END TESTING ONLY==========================//
Route::group(['middleware' => ['auth', 'checkRole:member,admin', 'checkStatus:active']], function () {
	// all
	Route::prefix('cart')->name('cart.')->group(function () {
		Route::get('/', 'CartController@index')->name('index');
		Route::post('/create/{product}', 'CartController@create')->name('create');
		Route::get('/add/quantity/{product}', 'CartController@addQuantity')->name('add');
		Route::get('/min/quantity/{product}', 'CartController@minQuantity')->name('min');
		Route::post('/delete/{product}', 'CartController@delete')->name('delete');
	});
	Route::prefix('omset')->name('omset.')->group(function () {
		Route::get('/', 'OmsetMemberController@index')->name('index');
	});
	Route::prefix('notif')->name('notif.')->group(function () {
		Route::get('/{id}', 'NotifController@baca')->name('baca');
	});
	Route::prefix('pesan')->name('chat.')->group(function () {
		Route::get('/', 'ChatController@index')->name('index');
		Route::get('/send/{id}', 'ChatController@send')->name('pesan');
		Route::post('/kirim/{id}', 'ChatController@create')->name('create');
	});
	Route::prefix('reward')->name('reward.')->group(function () {
		Route::get('/member', 'RewardController@member')->name('member');
		Route::get('/member/history', 'RewardController@riwayatMember')->name('riwayatMember');
		Route::post('/member/tukar/{reward}', 'RewardController@tukar')->name('tukar');
		Route::get('/admin', 'RewardController@admin')->name('admin');
		Route::post('/admin/add', 'RewardController@create')->name('add');
		Route::put('/admin/edit/{reward}', 'RewardController@edit')->name('edit');

		Route::delete('/admin/delete/{reward}', 'RewardController@destroy')->name('delete');
	});
	Route::prefix('user')->name('user.')->group(function () {
		Route::get('/leaderboard', 'UserController@leaderboard')->name('leaderboard');
		Route::get('/leaderboard/filter', 'UserController@filterLeaderboard')->name('filterLeaderboard');
		Route::get('/edit/{id?}/{lihat?}', 'UserController@edit')->name('edit');
		Route::put('/edit/{id}', 'UserController@update')->name('update');
	});
	Route::prefix('afiliasi')->name('afiliasi.')->group(function () {
		Route::get('/', 'AfiliasiController@index')->name('index');
		Route::post('/link-generate', 'AfiliasiController@generate')->name('generate');
		Route::get('/list-stats', 'AfiliasiController@status')->name('list-stats');
	});

	Route::prefix('facebook-pixel')->name('facebookPixel.')->group(function () {
		Route::get('/', 'PixelController@index')->name('index');
		Route::post('/', 'PixelController@create')->name('pixel');
	});
	Route::prefix('checkout')->name('ch.')->group(function () {
		Route::get('/course/{course}', 'CheckoutController@course')->name('course');
		Route::post('/produk/{product}', 'CheckoutController@product')->name('product');
		Route::post('/invoice', 'CheckoutController@invoice')->name('invoice');
		Route::post('/invoice-course/{course}', 'CheckoutController@invoiceCourse')->name('invoice-course');
		Route::post('/invoice-paket-course/{paket}', 'CheckoutController@invoicePaketCourse')->name('invoice-paketcourse');
		Route::get('/{pixel?}/{course?}', 'CheckoutController@index')->name('index');
	});
	Route::prefix('komisi')->name('komisi.')->group(function () {
		Route::get('/', 'KomisiController@index')->name('index');
	});
	Route::prefix('komisi-fisik')->name('komisiFisik.')->group(function () {
		Route::get('/', 'KomisiFisikController@index')->name('index');
	});
});


Route::group(['middleware' => ['auth', 'checkRole:member', 'checkStatus:active,pembeli']], function () {
	Route::group(['middleware' => ['auth', 'checkStatus:active']], function () {
		Route::prefix('etalase')->name('etalase.')->group(function () {
			Route::get('/course', 'EtalaseController@course')->name('course');
			// Route::get('/course/paket', 'EtalaseController@paketCourse')->name('paketCourse');
			Route::get('/product', 'EtalaseController@produk')->name('product');
			Route::get('/detail-paket/{course}', 'EtalaseController@detailCourse')->name('detail-course');
			Route::get('/detail-course/{course}', 'EtalaseController@detailCoursePaket')->name('detail-course-paket');
			// Route::get('/detail-paket-course/{paket}', 'EtalaseController@detailPaketCourse')->name('detailPaketCourse');
			Route::get('/detail-produk/{product}', 'EtalaseController@detailProduk')->name('detail-produk');
			// V2
			Route::get('/keranjang', 'EtalaseController@keranjang')->name('keranjang');
		});
		Route::prefix('komisi')->name('komisi.')->group(function () {
			Route::post('/member-konfrim', 'KomisiController@konfrim')->name('konfrim');
		});
		Route::prefix('komisi-fisik')->name('komisiFisik.')->group(function () {
			Route::post('/member-konfrim', 'KomisiFisikController@konfrim')->name('konfrim');
		});
	});

	Route::prefix('order')->name('order.')->group(function () {
		Route::get('/status/course', 'OrderController@course')->name('order-status-course');
		Route::get('/status/product', 'OrderController@fisik')->name('order-status-fisik');
		Route::post('/bukti/{transaction}', 'OrderController@bukti')->name('bukti');
		Route::post('/bukti/course/{transaction}', 'OrderController@buktiCourse')->name('buktiCourse');
		Route::get('/status/filter/{fil}', 'OrderController@filter')->name('filter');
		Route::get('/status/filter/course/{fil}', 'OrderController@filterCourse')->name('filterCourse');
		Route::get('/invoice/{transaction}', 'OrderController@invoice')->name('invoice');
		Route::post('/invoice-course/{transaction}', 'OrderController@invoiceCourse')->name('invoiceCourse');
	});
	Route::prefix('my-file')->name('file.')->group(function () {
		Route::get('/', 'FileController@index')->name('index');
		Route::get('/filter/{type}', 'FileController@filter')->name('search');
	});
	Route::prefix('my-course')->name('myCourse.')->group(function () {
		Route::get('/', 'MycourseController@index')->name('index');
		Route::get('/see/{paketId}/{course}/{trans}', 'MycourseController@see')->name('see');
		Route::post('/suda-dibaca/{trans}/{course}', 'MycourseController@sudaDibaca')->name('sudaDibaca');
		Route::post('/{course}', 'MycourseController@progress')->name('progress');
	});
});


Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
	Route::prefix('kupon')->name('kupon.')->group(function () {
		Route::get('/', 'KuponController@index')->name('index');
		Route::get('/create', 'KuponController@create')->name('create');
		Route::post('/create', 'KuponController@store')->name('create');
		Route::get('/edit/{kupon}', 'KuponController@edit')->name('edit');
		Route::put('/edit/{kupon}', 'KuponController@update')->name('edit');
		Route::delete('/delete/{kupon}', 'KuponController@delete')->name('delete');
	});
	Route::prefix('file')->name('file.')->group(function () {
		Route::get('/kelola/{course}', 'FileController@kelola')->name('kelola');
		Route::get('/create/{course}', 'FileController@create')->name('create');
		Route::post('/create/{id}', 'FileController@store')->name('create');
		Route::get('/edit/{file}', 'FileController@edit')->name('edit');
		Route::put('/edit/{file}', 'FileController@update')->name('edit');
		Route::delete('/delete/{file}', 'FileController@delete')->name('delete');
	});
	Route::prefix('berita')->name('berita.')->group(function () {
		Route::get('/', 'BeritaController@index')->name('index');
		Route::get('/create', 'BeritaController@create')->name('create');
		Route::post('/create', 'BeritaController@store')->name('create');
		Route::get('/edit/{berita}', 'BeritaController@edit')->name('edit');
		Route::put('/edit/{berita}', 'BeritaController@update')->name('edit');
		Route::delete('/delete/{berita}', 'BeritaController@delete')->name('delete');
	});
	Route::prefix('pencairan-dana')->name('pencairan.')->group(function () {
		Route::get('/', 'PayoutController@index')->name('index');
		Route::post('/', 'PayoutController@create');
		Route::get('/riwayat', 'PayoutController@riwayat')->name('riwayat');
	});
	Route::prefix('transaksi')->name('transaksi.')->group(function () {
		//transaksi order fisik
		Route::get('/order-produk', 'ManualTransactionController@index')->name('order-fisik');
		Route::get('/order-produk/filter/{fil}', 'ManualTransactionController@filterFisik')->name('order-fisik-filter');
		Route::get('/order-produk/search', 'ManualTransactionController@searchFisik')->name('order-fisik-search');
		Route::post('/order-produk/bukti/{transaction}', 'ManualTransactionController@bukti')->name('bukti');
		Route::post('/order-course/bukti/{transaction}', 'ManualTransactionController@buktiCourse')->name('buktiCourse');
		Route::post('/order/selesai/{transaction}', 'ManualTransactionController@selesai')->name('selesai');
		Route::post('/order-produk/resi/{transaction}', 'ManualTransactionController@resi')->name('resi');
		Route::put('/order/cancle/{transaction}', 'ManualTransactionController@cancle')->name('cancle');
		Route::put('/order/refund/{transaction}', 'ManualTransactionController@refund')->name('refund');


		//transaksi order ecourse
		Route::get('/order-course', 'TransactionCourseController@index')->name('order-ecourse');
		Route::get('/order-course/filter/{fil}', 'TransactionCourseController@filterCourse')->name('order-course-filter');
		Route::get('/order-course/search', 'TransactionCourseController@searchCourse')->name('order-course-search');
	});


	Route::prefix('bank')->name('bank.')->group(function () {
		Route::get('/', 'BankController@index')->name('index');
		Route::post('/create-payment', 'BankController@createPayment')->name('create');
		Route::put('/update-payment/{id}', 'BankController@updatePayment')->name('updatePayment');
		Route::post('/create-personal-payment', 'BankController@createPersonal')->name('createPersonal');
		Route::put('/update-personal-payment/{id}', 'BankController@updatePersonal')->name('updatePersonal');
		Route::delete('/delete-bank/{id}', 'BankController@delete')->name("delete");
	});

	// exspedisi
	Route::prefix('exspedisi')->name('exspedisi.')->group(function () {
		Route::get('/', 'CourierController@index')->name('index');
		Route::post('/create-kurir', 'CourierController@store')->name('store');
		Route::put('/edit/{id}', 'CourierController@edit')->name('edit');
		Route::delete('/delete-exspedisi/{id}', 'CourierController@delete')->name("delete");
	});
	Route::prefix('dummy')->name('dummy.')->group(function () {
		Route::post('/create/{id}', 'DummyController@store')->name('store');
	});
	Route::prefix('komisi')->name('komisi.')->group(function () {
		Route::post('/bayar', 'KomisiController@bayar')->name('bayar');
		Route::post('/batal', 'KomisiController@batal')->name('batal');
	});
	Route::prefix('komisi-fisik')->name('komisiFisik.')->group(function () {
		// fisik
		Route::post('/bayar', 'KomisiFisikController@bayar')->name('bayar');
		Route::post('/batal', 'KomisiFisikController@batal')->name('batal');

	});

	Route::prefix('produk')->name('produk.')->group(function () {
		Route::get('/', 'ProductController@index')->name('index');
		Route::get('/search', 'ProductController@search')->name('produkSearch');
		Route::get('/create', 'ProductController@create')->name('create');
		Route::get('/{slug}', 'ProductController@show')->name('show');
		Route::get('/edit/{id}', 'ProductController@edit')->name('edit');
		Route::put('/edit/{id}', 'ProductController@update')->name('update');
		Route::post('/create', 'ProductController@store')->name('store');
		Route::delete('/delete/{product}', 'ProductController@delete')->name('delete');
	});

	Route::prefix('v')->name('v.')->group(function () {
		Route::put('/store/{id}', 'ProductController@storeVarian')->name('store');
		Route::put('/edit/{id}', 'ProductController@updateVarian')->name('update');
		Route::delete('/delete/{id}', 'ProductController@deleteVarian')->name('delete');
	});
	Route::prefix('sales-page')->name('sales.')->group(function () {
		Route::post('/store/{paket_id}', 'SalesPageController@create')->name('create');
		Route::get('/delete/{id}', 'SalesPageController@delete')->name('delete');
	});
	Route::prefix('course')->name('course.')->group(function () {
		Route::get('/', 'CourseController@index')->name('index');
		Route::get('/search', 'CourseController@search')->name('courseSearch');
		Route::get('/create', 'CourseController@create')->name('create');
		Route::post('/create', 'CourseController@store')->name('store');
		Route::delete('/delete/{course}', 'CourseController@delete')->name('delete');
		Route::get('/paket', 'CourseController@paket')->name('paket');
		Route::delete('/paket/delete/{paket}', 'CourseController@paketDelete')->name('paketDelete');
		Route::delete('/paket/course/delete/{paket}', 'CourseController@addCourseDelete')->name('addCourseDelete');
		Route::get('/paket/edit/{paket}', 'CourseController@paketEdit')->name('paketEdit');
		Route::put('/paket/edit/{paket}', 'CourseController@paketUpdate')->name('paketUpdate');
		Route::get('/paket/create', 'CourseController@paketCreate')->name('paketCreate');
		Route::post('/paket/create', 'CourseController@paketStore');
		Route::post('/paket/add-course/{paket}', 'CourseController@coursePaket')->name('coursePaket');
		Route::get('/{slug}', 'CourseController@show')->name('show');
		Route::get('/edit/{id}', 'CourseController@edit')->name('edit');
		Route::put('/edit/{id}', 'CourseController@update')->name('update');
	});
	Route::prefix('Bab-Course')->name('babCourse.')->group(function () {
		Route::get('/detail/{course}', 'BabCourseController@index')->name('index');
		Route::delete('/delete/{course}', 'BabCourseController@destroy')->name('delete');
		Route::get('/{id}/edit', 'BabCourseController@edit')->name('edit');
		Route::put('/{id}/edit', 'BabCourseController@update')->name('update');
		Route::get('/{course}/create', 'BabCourseController@create')->name('create');
		Route::put('/{course}/create', 'BabCourseController@store')->name('store');
	});
	Route::prefix('sub-Course')->name('subCourse.')->group(function () {
		Route::get('/detail/{babCourse}', 'SubCourseController@index')->name('index');
		Route::delete('/delete/{course}', 'SubCourseController@destroy')->name('delete');
		Route::get('/{id}/edit', 'SubCourseController@edit')->name('edit');
		Route::put('/{id}/edit', 'SubCourseController@update')->name('update');
		Route::get('/{babCourse}/create', 'SubCourseController@create')->name('create');
		Route::put('/{id}/create', 'SubCourseController@store')->name('store');
	});
	Route::prefix('user')->name('user.')->group(function () {
		Route::get('/', 'UserController@index')->name('index');
		Route::get('/detail/{id}', 'UserController@detail')->name('detail');
		Route::put('/point/{user}', 'UserController@updatePoint')->name('updatePoint');
		Route::post('/create', 'UserController@create')->name('create');
		Route::post('/bypass/{id}', 'UserController@bypass')->name('bypass');
	});
	Route::prefix('banner')->name('banner.')->group(function () {
		Route::get('/','BannerController@index')->name('index');
		Route::get('/create','BannerController@create')->name('create');
		Route::post('/create','BannerController@store');
		Route::get('/edit/{banner}','BannerController@edit')->name('edit');
		Route::put('/edit/{banner}','BannerController@update');
		Route::delete('/delete/{banner}','BannerController@destroy')->name('destroy');
	});
});

Route::get('/get-city', 'OngkirController@getCity')->name('getCity');
Route::get('/get-kec', 'OngkirController@getKecamatan')->name('getKecamatan');
Route::get('/get-Jenis', 'OngkirController@getJenis')->name('getJenis');
Route::prefix('order-sponsor')->name('orderSponsor.')->group(function () {
	Route::post('/checkout/{agent}', 'OrderSponsorController@invoice')->name('invoice');
	Route::get('/{user}/{kode}/{sales?}', 'OrderSponsorController@index');
});

Route::get('/aff', function(){
  return view('aff');
});

Route::get('/mocprivate', function(){
  return view('mocprivate');
});

Route::get('/mocpremium', function(){
  return view('mocpremium');
});
//============BACK END TESTING ONLY==========================//