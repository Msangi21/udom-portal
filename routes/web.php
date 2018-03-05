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

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


Route::get('/',function(){
	 $electronics = App\Products::where('main_id',1)->latest()->paginate(4);
	 $electronics_phone = App\Products::where('main_id',1)->latest()->paginate(3);
     $fashion = App\Products::where('main_id',2)->latest()->paginate(4);
     $fashion_phone = App\Products::where('main_id',2)->latest()->paginate(3);
	return view('dashboard.customer.categories',compact('electronics','fashion','electronics_phone','fashion_phone'));
});

Route::get('/search','ShowProductsController@search');

Route::get('/page/{id}','ShowProductsController@selectedlink');

Route::get('/others/{id}','ShowProductsController@othercategories');
Route::get('/electrical/{id}','ShowProductsController@othercategories');
Route::get('/fashion/{id}','ShowProductsController@othercategories');
Route::get('/motors/{id}','ShowProductsController@othercategories');
Route::get('/homestools/{id}','ShowProductsController@othercategories');
Route::get('/sports/{id}','ShowProductsController@othercategories');

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
	Route::resource('/accounts','UserAccountController');

	Route::get('login-register',function(){
		return view('dashboard.seller.login-register');
	});

	//Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/home','SummaryController');

	//Route::get('/home','UserAccountController');
	View::composer('dashboard.seller.partials.side_bar', function ($view) {
		$user_id = Auth::user()->id;

//register user to free account
		$result1 = DB::table('user_payments')
							->select('account_level')
							->where('user_id','=',$user_id)
							->get();
		$num1 = Count($result1);

		if($num1 == 0){
			DB::table('user_payments')
					->insert(
						[
							'user_id'=>$user_id,'account_level'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()
						]
					);
		}
//check level of user account
		$result = DB::table('user_payments')
							->select('account_level')
							->where('user_id','=',$user_id)
							->first();
		$num = Count($result);
		
		return $view->with(compact('result','num'));
	});

	//control expired account to upload ad's

	View::composer('dashboard.seller.pages.post', function ($view) {

		$user_id = Auth::user()->id;
		$status = DB::table('user_payments')
		->join('users','user_payments.user_id','=','users.id')
		->select('user_payments.account_level as level','users.total_ads as total',
		'user_payments.updated_at as time','users.first_name','users.last_name')
		->where('user_payments.user_id',$user_id)
		->first();

			$level = $status->level;
			$totalads = $status->total;
			$time_remain = $status->time;

			$enable = "enabled";
			$ads_status = false;
			$day_status = false;
			

			$days = (new Carbon($time_remain))->diffInDays();

			//ad's remain
			if($level == 1){
			$ads_reamin = 2-$totalads;
			$days_remain = 30 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					$ads_status = false;
				}
			}else if($level == 2){
			$ads_reamin = 15-$totalads;
			$days_remain = 60 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					$ads_status = false;
				}
			}else if($level == 3){
			$ads_reamin = 50-$totalads;
			$days_remain = 120 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					$ads_status = false;
				}
			}
		return $view->with(compact('ads_status','day_status'));
	});

//for alert message in horizontal menu	
	View::composer('layouts.app', function ($view) {

		$user_id = Auth::user()->id;
		$status = DB::table('user_payments')
		->join('users','user_payments.user_id','=','users.id')
		->select('user_payments.account_level ','users.total_ads as total',
		'user_payments.updated_at as time','users.first_name','users.last_name')
		->where('user_payments.user_id',$user_id)
		->first();

			$level = $status->account_level;
			$totalads = $status->total;
			$time_remain = $status->time;

			$enable = "enabled";
			$ads_status = false;
			$day_status = false;
			

			$days = (new Carbon($time_remain))->diffInDays();

			//ad's remain
			if($level == 1){
			$ads_reamin = 2-$totalads;
			$days_remain = 30 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					
				}
			}else if($level == 2){
			$ads_reamin = 15-$totalads;
			$days_remain = 60 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					
				}
			}else if($level == 3){
			$ads_reamin = 50-$totalads;
			$days_remain = 120 - $days;
				if($ads_reamin == 0){
					$ads_status = true;
				}
				if($days_remain == 0){
					$day_status = true;
					
				}
			}
		return $view->with(compact('ads_status','day_status'));
	});

});




