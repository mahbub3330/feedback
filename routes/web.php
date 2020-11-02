<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Employee\FeedbackFormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function (){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

});

Route::group(['as'=>'employee.','prefix'=>'employee','namespace'=>'Employee','middleware'=>['auth','employee']],function (){
    Route::get('dashboard',[FeedbackFormController::class,'index'])->name('dashboard');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
