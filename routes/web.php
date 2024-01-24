<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectOwnerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::controller(UserController::class)->group((function() {
       Route::get('/', 'index');
       Route::get('/redirect', 'redirect')->name('redirect');
       Route::get('/about', 'about')->name('about');
       Route::get('/contractors', 'contractors')->name('contractors');
       Route::get('/projects', 'projects')->name('projects');
       Route::get('/project_owners', 'project_owners')->name('project_owners');
       Route::get('/suppliers', 'supplier')->name('supplier');
       Route::get('/signup', 'signup')->name('signup');
       Route::get('/login', 'signup')->name('signup');
}));

Route::controller(AuthController::class)->group(function() {
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::post('/register', 'register')->name('register');
});
Route::controller(AdminController::class)->group(function() {
   Route::get('/dashboard', 'dashboard')->name('dashboard');

   Route::get('/owner', 'owner')->name('owner');
   Route::get('/add_owner', 'add_owner')->name('add_owner');
   Route::get('/edit_owner', 'edit_owner')->name('edit_owner');

   Route::get('/contractor', 'contractor')->name('contractor');
   Route::get('/add_contractor', 'add_contractor')->name('add_contractor');
   Route::get('/edit_contractor', 'edit_contractor')->name('edit_contractor');

   Route::get('/project', 'project')->name('project');
   Route::get('add_project', 'add_project')->name('add_project');
   Route::get('/edit_project', 'edit_project')->name('edit_project');

   Route::get('/supplier', 'supplier')->name('supplier');
   Route::get('/add_supplier', 'add_supplier')->name('add_supplier');
   Route::get('/edit_supplier', 'edit_supplier')->name('edit_supplier');

   Route::get('bid', 'bid')->name('bid');
   Route::get('add_bid', 'add_bid')->name('add_bid');
   Route::get('edit_bid', 'edit_bid')->name('edit_bid');

   Route::get('/user', 'user')->name('user');
   Route::get('/add_user', 'add_user')->name('add_user');
   Route::get('/edit_user', 'edit_user')->name('edit_user');
});

Route::controller(BidController::class)->group(function () {
    Route::get('/view_bids', 'bids');
    Route::post('/storebid', 'storeBid')->name('storebid');
});
Route::resource('/contractor', ContractorController::class);
Route::resource('/owner', ProjectOwnerController::class);
Route::resource('/project', ProjectController::class);
Route::resource('/bid', BidController::class)->only(['index', 'show'])->middleware('auth');