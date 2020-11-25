<?php


# Shop
Route::prefix('shop')->group(function () {
  Route::name('shop')->get('/', 'ShopController@categories');
  Route::get('order-now', 'ShopController@orderNow');
  Route::get('clear-cart', 'ShopController@clearCart');
  Route::get('add-to-cart', 'ShopController@addToCart');
  Route::get('update-cart', 'ShopController@updateCart');
  Route::name('checkout')->get('checkout', 'ShopController@checkout');
  Route::get('remove-from-cart', 'ShopController@removeFromCart');
  Route::get('checkout-remove-item', 'ShopController@checkoutRemoveItem');
  Route::name('products')->get('{category_url}', 'ShopController@product');
  Route::name('item')->get('{category_url}/{product_url}', 'ShopController@item');
});

# User
Route::prefix('user')->group(function () {
  Route::name('login')->get('login', 'UserController@getSignin');
  Route::post('login', 'UserController@postSignin');
  Route::name('register')->get('register', 'UserController@getRegister');
  Route::post('register', 'UserController@postRegister');
  Route::resource('profile', 'UserController');
  Route::get('logout', 'UserController@logout');
});

# CMS
Route::middleware(['adminguard'])->group(function () {
    Route::prefix('cms')->group(function () {
      Route::name('dashboard')->get('dashboard', 'CmsController@dashboard');
      Route::resource('menu', 'MenuController');
      Route::resource('content', 'ContentController');
      Route::resource('categories', 'CategoriesController');
      Route::resource('products', 'ProductsController');
      Route::resource('users', 'UsersController');
      Route::get('orders', 'CmsController@orders');
    });  
  });

# Pages
Route::name('home')->get('/', 'PageController@home');
Route::get('search', 'PageController@search');
Route::name('content')->get('{url}', 'PageController@content');