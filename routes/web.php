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

Route::get('/',function(){
	 $electronics = App\Products::where('main_id',1)->latest()->paginate(4);
	 $electronics_phone = App\Products::where('main_id',1)->latest()->paginate(3);
     $fashion = App\Products::where('main_id',2)->latest()->paginate(4);
     $fashion_phone = App\Products::where('main_id',2)->latest()->paginate(3);
	return view('dashboard.customer.categories',compact('electronics','fashion','electronics_phone','fashion_phone'));
});

Route::get('/search','ShowProductsController@search');

Route::get('/link/{id}','ShowProductsController@selectedlink');

Route::get('/others/{id}','ShowProductsController@othercategories');

Route::get('/searchajax','ShowProductsController@autoComplete');

Route::resource('/item','ShowProductsController');


Route::get('seller',function(){
		return view('dashboard.seller.index');
	});

Auth::routes();

Route::group(['middleware' => 'auth'],function(){

	Route::get('/post', function () {
		$category = App\Main_product::all();
		return view('dashboard.seller.pages.post',compact('category'));
	});
	
	Route::resource('/product','ProductiesController');

	Route::get('/product_sub_category',function(){
		$product_sub = Illuminate\Support\Facades\Input::get('sub_id');
		$sub_categories = App\Product_categories::where('main_id','=',$product_sub)->get();
		return \Response::json($sub_categories);

	});

	Route::resource('/profile', 'UsersProfileController');
	Route::resource('/address','UsersDetailController');

	Route::get('login-register',function(){
		return view('dashboard.seller.login-register');
	});

	//Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/home','SummaryController');
});




