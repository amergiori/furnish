<?php

use App\Categorie;
use App\Product;
use App\Menu;

Breadcrumbs::for('home', function ($trail) {
  $trail->push('Home', route('home'));
});

Breadcrumbs::for('content', function ($trail, $url) {
  $menu = Menu::where('url', '=', $url)->first();
  $trail->parent('home');
  $trail->push($menu->link, route('content', [$url]));
});

Breadcrumbs::for('login', function ($trail) {
  $trail->parent('home');
  $trail->push('Login', route('login'));
});

Breadcrumbs::for('register', function ($trail) {
  $trail->parent('home');
  $trail->push('Register', route('register'));
});

Breadcrumbs::for('checkout', function ($trail) {
  $trail->parent('shop');
  $trail->push('Checkout', route('checkout'));
});

Breadcrumbs::for('shop', function ($trail) {
  $trail->parent('home');
  $trail->push('Shop', route('shop'));
});

Breadcrumbs::for('products', function ($trail, $curl) {
  $category = Categorie::where('url', '=', $curl)->first();
  $trail->parent('shop');
  $trail->push($category->title, route('products', [$curl]));
});

Breadcrumbs::for('item', function ($trail, $curl, $purl) {
  $products = Product::where('purl', '=', $purl)->first();
  $trail->parent('products', $curl);
  $trail->push($products->ptitle, route('item', [$curl, $purl]));
});