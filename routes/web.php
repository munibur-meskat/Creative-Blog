<?php

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryControler;
use App\Http\Controllers\Frontend\frontendController;
use App\Models\SubCategory;

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

// frontend routes

// Route::name('frontend.')->group(function () {

// Route::get('/', [frontendController::class, 'index'])->name('index');
// Route::get('/category/{slug}', [frontendController::class, 'singleCategoryPost'])->name('single.category.post');
// Route::get('/category/{catslug?}/{slug}', [frontendController::class, 'singlePost'])->name('single.post');
// // Route::get('/search/{string}', [frontendController::class, 'searchPost'])->name('search.post');
// Route::get('/search', [frontendController::class, 'searchPost'])->name('search.post.submit');
// });

Route::controller(frontendController::class)->name('frontend.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/category/{slug}', 'singleCategoryPost')->name('single.category.post');
    Route::get('/category/{catslug?}/{slug}', 'singlePost')->name('single.post');
    // Route::get('/search/{string}', [frontendController::class, 'searchPost'])->name('search.post');
    Route::get('/search', 'searchPost')->name('search.post.submit');
});

// auth routes
Auth::routes(); 

// backend routes 
Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('home');

//Category

// Route::group(['middleware' => ['role:super-admin|admin|editor']], function () {

// });

Route::resource('category', CategoryController::class);

//Post route
Route::resource('post', PostController::class);
     
// Route::group(['middleware' => ['role:super-admin|admin']], function () {
// Route::get('category/restore/{id}', [CategoryController::class, 'restoreCategory'])->name('category.restore');
// Route::get('category/hard/delete/{id}', [CategoryController::class, 'hardDelete'])->name('category.hard.delete');
// });

Route::controller(CategoryController::class)->prefix('category')->name('category.')->group(function(){
// Route::get('/restore/{id}', 'restoreCategory')->middleware(['role:super-admin|admin'])->name('restore');
Route::get('/restore/{id}', 'restoreCategory')->name('restore');
Route::get('/hard/delete/{id}', 'hardDelete')->middleware(['role:super-admin|admin'])->name('hard.delete');
});

Route::get('/sub-category', [SubCategoryControler::class, 'index'])->name('sub_category_create');
Route::post('/sub-category/store', [SubCategoryControler::class, 'store'])->name('sub_category_store');

});

//google log in
 
Route::get('/google/redirect', [LoginController::class, 'googleRedirect'])->name('google.redirect');
 
Route::get('/google/callback',[LoginController::class, 'googleCallback']);


// test route
Route::get('/test', function(){
    // $user = User::find(4);
    $role = Role::find(3);

    // $user->assignRole($role->id);

    // Permission::create(['name' => 'view']);
    $permission = Permission::find(3);

    $role->givePermissionTo($permission);
}); 