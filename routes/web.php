<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\mainCategoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\sliderController;
use Facade\FlareClient\Http\Client;
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

Route::get('/', [clientController::class,'home']);
Route::get('/shop',[clientController::class,'shop']);
Route::get('/cart',[clientController::class,'cart']);
Route::get('/checkout',[clientController::class,'checkout']);
Route::get('/contact',[clientController::class,'contact']);
Route::get('/login',[clientController::class,'login']);
Route::get('/dashboard',[adminController::class,'admin']);
Route::get('/addcategory',[categoryController::class,'addCategory']);
Route::get('/category',[categoryController::class,'Category']);
Route::get('/addSlider',[sliderController::class,'addSlider']);
Route::get('/slider',[sliderController::class,'slider']);
Route::get('/addProduct',[productController::class,'addProduct']);
Route::get('/viewProduct',[productController::class,'viewProduct']);
Route::post('/saveProduct',[productController::class,'saveProduct']);
Route::post('/addCategory',[mainCategoryController::class,'store']);
Route::get('/editCategory/{id}',[mainCategoryController::class,'edit']);
Route::get('/deleteCategory/{id}',[mainCategoryController::class,'destroy']);
Route::post('/editCategory',[mainCategoryController::class,'update']);
Route::get('/editProduct/{id}',[productController::class,'editProduct']);
Route::get('/deleteProduct/{id}',[productController::class,'delete']);
Route::post('/editProduct',[productController::class,'update']);
// Route::resource('/products','App\Http\Controllers\productController');   

// Route::post('/category',[mainCategoryController::class,'index']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
