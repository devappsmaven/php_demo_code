<?php

use Illuminate\Http\Request;
use App\Mail\ForgetPassword;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('shipstationxml','ShipStationController@export')->name('shipstation.export');
Route::post('shipstationxml','ShipStationController@shipnotify')->name('shipstation.shipnotify');
Route::get('sessionInfo','DesignstudioController@sessionInfo')->name('sessionInfo');

Route::get('api/log', function () {
    return DB::table('audits')
    ->join('users', 'users.id', '=', 'audits.user_id')
    ->select('users.firstname', 'users.lastname' , 'users.image', 'audits.id', 'audits.event', 'audits.created_at', 'audits.auditable_type')
    ->latest()
    ->get()->take(5);
})->name('api.log')->middleware('permission:comments.edit');


/* Mobile API's */
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');
Route::post('forget-password', 'UserController@forgetPassword');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', 'UserController@logout');
    Route::get('get_user', 'UserController@get_user');

    Route::get('show-all-categories', 'CategoryController@showAllCategories');

    Route::get('show-all-products', 'ProductController@showAllProducts');
    Route::post('show-product', 'ProductController@getSingleProduct');
    Route::post('show-products-of-sub-categories', 'ProductController@showProductsOfSubCategories');
    Route::post('show-single-product', 'ProductController@fetchSingleProduct');
    Route::get('show-default-product', 'ProductController@fetchDefaultProduct');

    Route::post('search', 'SearchController@search');
    Route::post('show-sub-category', 'SubCategoryController@showAllSubCategories');

    Route::get('show-all-cliparts', 'ClipartController@getAllCliparts');
    Route::get('show-clipart-categories', 'ClipartController@allClipartCategories');
    Route::post('show-clipart-sub-categories', 'ClipartController@allSubCategories');
    Route::post('show-clipart-listing', 'ClipartController@singleCatCliparts');

    Route::get('show-all-colors', 'ColorController@allColors');

    Route::post('match-password', 'UserProfileController@matchPassword');
    Route::post('update-password', 'UserProfileController@changePassword');
    Route::get('deactivate-user', 'UserProfileController@deactivateUserAccount');
    Route::post('update-profile', 'UserProfileController@updateProfile');
    Route::get('get-profile', 'UserProfileController@getprofile');

    Route::post('save-design','DesignStudioController@saveDesign');
    Route::post('all-designs','DesignStudioController@showAllDesigns');
    Route::post('show-single-design','DesignStudioController@showSingleDesign');

    Route::post('add-to-cart','OrderController@addItemsToCart');
    Route::post('add-delivery-details','OrderController@addDeliveryInfo');
    Route::post('add-order','OrderController@addOrders');
    Route::post('stripe-payment','OrderController@stripePost');
    Route::post('show-cart','OrderController@showCart');
    Route::post('update-cart-item','OrderController@updateCartQuantity');
    Route::post('delete-cart-item','OrderController@deleteCartItems');
    Route::post('show-user-saved-cards','OrderController@showUserSavedCards');
    Route::post('show-all-orders','OrderController@showAllOrders');
    Route::post('delete-user-saved-cards','OrderController@deleteUserSavedCards');
    Route::post('total-charges','OrderController@showTotalCharges');
    Route::post('apply-coupons','OrderController@applyCoupon');
    Route::post('check-service','OrderController@checkServiceForTax');

    Route::get('home-data','HomeController@index');
    Route::get('view-all','HomeController@viewAll');
    Route::get('show-banner','HomeController@showBanner');

    Route::post('seller-account','SellerController@makeSeller');
    Route::put('update-store','SellerController@updateStore');
    Route::put('update-store-status','SellerController@updateStoreStatus');

    Route::get('show-filters', 'SearchController@filterList');

    Route::post('upload','UploadController@index');

    Route::get('all-stores', 'StoreController@showAllStores');
    Route::post('store-designs', 'StoreController@storesDesigns');
    Route::post('single-store-design', 'StoreController@showSingleDesign');
    Route::get('store-orders', 'StoreController@storesOrders');
    Route::post('store-single-order', 'StoreController@storesSingleOrder');

    Route::post('add-account-info', 'UserAccountController@addAccountInfo');
    Route::get('show-account-info', 'UserAccountController@getAccountInfo');

    Route::put('update-notification-status', 'UserProfileController@update_notification_status');
    Route::get('show-counts', 'UserProfileController@showCounts');

    Route::get('show-notifications', 'NotificationController@showNotifications');
    Route::post('send-notification', 'NotificationController@sendPushNotification');
    Route::post('order-notification', 'NotificationController@orderReceived');

    Route::put('update-order-status/{order}', 'OrderController@updateOrderStatus');

    Route::get('dashboard', 'UserProfileController@dashboard');
    Route::get('seller-commission', 'CommissionController@index');

    Route::post('create-chat-relation', 'ChatController@index');
    Route::get('user-chats', 'ChatController@getChatList');
});

Route::post('info','UserController@info');

Route::get('firebase','FirebaseController@index');
Route::get('store-payment','PaymentController@index');