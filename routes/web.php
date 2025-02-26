<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductController::class, 'babyKid']);
    });
Route::get('/user/{id}/name/{name}', [UserController::class,'profile']);
Route::get('/sales', [SalesController::class, 'transaksi']);




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ArticleController::class,'articles']);



// Route::get('/world', function () {
//     return 'World';
//    });
// Route::get('/', function () {
//     return 'Selamat Datang';
//    });
// Route::get('/about', function () {
//     return 'Roy Wijaya;2341720120';
//    });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });

// Route::get('/posts/{post}/comments/{comment}', function
//     ($postId, $commentId) {
//      return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
//     });

// Route::get('/articles/{id}', function
//     ($id) {
//      return 'Halaman Artikel dengan ID-'.$id;
//     });

// Route::get('/user/{name?}', function ($name=null) {
//         return 'Nama saya '.$name;
// });
// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
//     });

    // Route::get('/user/profile', function() {
    //     //
    //    })->name('profile');

    //    Route::get('/greeting', function () {
    //     return view('blog.hello', ['name' => 'Roy']);
    //     });
        // Route::get('/greeting', [WelcomeController::class,
        // 'greeting']);

        
            
