<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListDataController;
use App\Http\Controllers\ProductController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id){
   return 'User dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
   Route::get('/dashboard', function () {
      return 'Admin Dashboard';

   });

   Route::get('/users', function () {
      return 'Admin Users';
   });
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

//Route::get('/listbarang/{id}/{nama}', function($id, $nama){
   //return view('list_barang', compact('id', 'nama'));
//});

//Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
Route::get('/ListData_view', [ListDataController::class, 'tampilkan']);

Route::get('/Dashboard_view', function () {
   return view('Dashboard_view');
   });


   Route::get('/tugaspublic', function () {
      return view('tugaspublic');
      });

      Route::get('/favorit', function () {
         return view('favorit');
         });

Route::get('/list_product', [ProductController::class, 'index']);

Route::get('/jualsawah', function () {
   return view('pages.home');
});

Route::get('/jualsawah', function () {
   return view('pages.about');
});

Route::get('/jualsawah', function () {
   return view('pages.kontak');
});

Route::get('/jualsawah', function () {
   return view('pages.produk_detail');
});

Route::get('/jualsawah', function () {
   return view('pages.komutitas');
});

         