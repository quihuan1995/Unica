<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cms\{CategoryController,TagController,DashboardController,UserController,MenusController,MenuItemController, OrderController,VoucherController,CustomerController};
use App\Http\Controllers\Auth\{LoginController,ForgotPasswordController,ResetPasswordController,LoginClientController,RegisterClientController};
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Cms\RoleController;
use App\Http\Controllers\Client\{HomeController,ProfileControlle,UserClientController,CourseClientController};
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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

//ForgotPassword
Route::get('forgot', [ForgotPasswordController::class,'forgot'])-> name('cms.forgot');
Route::post('forgot', [ForgotPasswordController::class,'password'])-> name('cms.password');
//ResetPassword
Route::get('ResetPassword', [ResetPasswordController::class,'ResetPassword'])-> name('cms.ResetPassword');
Route::post('ResetPassword', [ResetPasswordController::class,'SaveResetPassword']);

Route::group(['prefix' => 'cms'], function () {
    Route::get('login', [LoginController::class,'login'])-> name('cms.login')->middleware('CheckLogout');
    Route::post('login', [LoginController::class,'postlogin'])-> name('cms.postlogin');
});

Route::group(['prefix' => 'cms','middleware'=>'CheckLogin'], function () {

    Route::get('logout',[LogoutController::class,'logout'])->name('cms.logout');
    Route::get('dashboard', [DashboardController::class,'index'])->name('cms.dashboard');
    Route::group(['prefix' => 'menus'], function() {
        Route::get('', [MenusController::class,'index'])->name('menus');
        Route::get('edit', [MenusController::class,'edit'])->name('editmenus');
    });
    //Category
    Route::group(['prefix' => 'categories'], function () {
        Route::get('', [CategoryController::class,'index'])->name('category.index');
        Route::get('create', [CategoryController::class,'create'])->name('category.create')->middleware(['can:create']);
        Route::post('/', [CategoryController::class,'store'])->name('category.store');
        Route::get('{id}/edit', [CategoryController::class,'edit'])->name('category.edit')->middleware(['can:edit']);
        Route::put('{id}', [CategoryController::class,'update'])->name('category.update');
        Route::get('{id}',[CategoryController::class,'delete'])->name('category.delete')->middleware(['can:delete']);
    });
     Route::get('menus',function(){
        return view('cms.modules.menus.menus');
    });
    Route::group(['prefix' => 'users'], function ( ) {

/////////// CMS
            Route::get('/', [UserController::class,'index'])
            ->name('users.index')
            ->middleware(['can:manage-users']);


            // Route::get('/give-admin/{id}', [UserController::class,'giveAdmin'])->name('user.give-admin');
            // Route::get('/remove-admin/{id}', [UserController::class,'removeAdmin'])->name('user.remove-admin');

            Route::get('create', [UserController::class,'create'])
            ->name('users.create')
            ->middleware(['can:manage-users','can:create-users']);

            Route::post('store', [UserController::class,'store'])
            ->name('users.store')
            ->middleware('can:manage-users');

            Route::get('{id}/edit', [UserController::class,'edit'])
            ->name('users.edit')
            ->middleware('can:manage-users');

            Route::post('{id}/update', [UserController::class,'update'])
            ->name('users.update')
            ->middleware('can:manage-users');

            Route::get('{id}/delete', [UserController::class,'delete'])
            ->name('users.delete')
            ->middleware('can:delete-users');
    });


    Route::group(['prefix' => 'menus', "as" => "menus."], function() {
        //menu
        Route::get('', [MenusController::class,'index'])->name('index');
        Route::get('{id}/edit', [MenusController::class,'edit'])->name('edit');
        Route::put('{id}', [MenusController::class,'update'])->name('update');
        Route::get('create', [MenusController::class,'create'])->name('create');
        Route::post('/', [MenusController::class,'store'])->name('store');
        Route::get('{id}', [MenusController::class,'delete'])->name('delete');
        //menu_item
        Route::post('/item', [MenuItemController::class,'store'])->name('item_store');
        Route::get('/items/{id}', [MenuItemController::class,'delete'])->name('item_delete');
    });

    //Tag
    Route::group(['prefix' => 'tag'], function () {
        Route::get('/', [TagController::class,'index'])->name('tag.index');

        Route::get('/create', [TagController::class,'create'])->name('tag.create')->middleware(['can:create']);
        Route::post('/', [TagController::class,'store'])->name('tag.store');

        Route::get('/{id}/edit', [TagController::class,'edit'])->name('tag.edit')->middleware(['can:edit']);
        Route::put('/{id}', [TagController::class,'update'])->name('tag.update');

        Route::get('{id}',[TagController::class,'delete'])->name('tag.delete')->middleware(['can:delete']);

    });

    //Order
    Route::group(['prefix' => 'order'], function () {
        Route::get('/', [OrderController::class,'index'])->name('order.index');
        Route::get('/create', [OrderController::class,'create'])->name('order.create');

        Route::post('/', [OrderController::class,'store'])->name('order.store');

        Route::get('{id}/detail', [OrderController::class,'detail'])->name('order.detail');
        Route::get('{id}/edit', [OrderController::class,'edit'])->name('order.edit');
        Route::put('{id}', [OrderController::class,'update'])->name('order.update');
        Route::get('{id}/success', [OrderController::class,'success'])->name('order.success');
        Route::get('{id}/disband', [OrderController::class,'disband'])->name('order.disband');
        Route::get('{id}/chancesuccess', [OrderController::class,'chancesuccess'])->name('order.chancesuccess');
        Route::get('{id}/chancedisband', [OrderController::class,'chancedisband'])->name('order.chancedisband');

    });

    //Voucher
    Route::group(['prefix' => 'voucher'], function () {
        Route::get('/', [VoucherController::class,'index'])->name('voucher.index');
        Route::get('/create', [VoucherController::class,'create'])->name('voucher.create');
        Route::post('/', [VoucherController::class,'store'])->name('voucher.store');
        Route::get('/{id}/edit', [VoucherController::class,'edit'])->name('voucher.edit');
        Route::put('/{id}', [VoucherController::class,'update'])->name('voucher.update');

        Route::get('{id}',[VoucherController::class,'delete'])->name('voucher.delete');
    });

     //Customer
    Route::group(['prefix' => 'customer'], function () {
        Route::get('/', [CustomerController::class,'index'])->name('customer.index');
    });
});


//Client

Auth::routes();
Route::group(['prefix' => '/','namespace'=>'Client'], function() {

    Route::get('login', [LoginClientController::class,'showLoginForm'])->middleware("CheckLogout:customers")->name('client.login');
    Route::post('login', [LoginClientController::class,'customerlogin'])-> name('client.customerlogin');
    Route::get('logout', [LoginClientController::class,'logout'])-> name('client.logout');

    Route::get('register', [RegisterClientController::class,'registerForm'])-> name('client.register');
    Route::post('register', [RegisterClientController::class,'create'])-> name('client.create');

    Route::group(['middleware' => 'auth:customers'], function () {
        Route::view('/', 'home');
    });

    Route::get('/', [HomeController::class,'Home'])-> name('home');



    Route::group(['prefix' => 'course'], function () {
        Route::get('/{id}', [CourseClientController::class,'course'])-> name('course.course');
    });


    Route::get('detail',[CourseClientController::class,'detail'])->name('detail');


    Route::group(['prefix' => 'user'], function () {
        Route::get('course', [UserClientController::class,'course'])->name('user.course');
        Route::post('course/seach', [UserClientController::class,'seach'])->name('user.seach');
        Route::get('profile', [UserClientController::class,'profile'])->name('user.profile');
        Route::post('update', [UserClientController::class,'update'])->name('user.update');
        Route::get('wishlist', [UserClientController::class,'wishlist'])->name('user.wishlist');
        Route::get('discover', [UserClientController::class,'discover'])->name('user.discover');
        Route::get('wallet', [UserClientController::class,'wallet'])->name('user.wallet');
        Route::get('order',[UserClientController::class,'order'])->name('user.order');
        Route::get('inbox',[UserClientController::class,'inbox'])->name('user.inbox');
        Route::get('login-history',[UserClientController::class,'loginhistory'])->name('user.loginhistory');
    });

});