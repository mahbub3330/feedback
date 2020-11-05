<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\QuestionAutoUpdateDeleteController;
use App\Http\Controllers\TopFeedbackController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\EmployeeController;
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
    return view('auth.login');
});

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],function (){

    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    //questions section
    Route::get('questions',[QuestionController::class,'index'])->name('questions');
    Route::get('questions/create',[QuestionController::class,'createQuestion'])->name('create.questions');
    Route::DELETE('questions/{question}',[QuestionController::class,'delete'])->name('delete.questions');

    //show review per question
    Route::post('questions',[QuestionController::class,'storeQuestion'])->name('store.questions');
    Route::get('questions/{question}',[QuestionController::class,'showReview'])->name('show.review');


    //feedback section
    Route::get('show/feedback',[FeedbackController::class,'index'])->name('index.feedback');

    //top feedback section
    Route::get('topfeedback',[TopFeedbackController::class,'show'])->name('show.topfeedback');
    Route::post('/savetopfeedback',[TopFeedbackController::class,'store'])->name('store.topfeedback');




    //employee section
    Route::get('employee',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('employee/{employee}',[EmployeeController::class,'show'])->name('employee.show');
    Route::get('employee/{employee}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
    Route::patch('employee/{employee}',[EmployeeController::class,'update'])->name('employee.update');

    Route::DELETE('employee/{employee}',[EmployeeController::class,'delete'])->name('employee.delete');



});


Route::group(['as'=>'employee.','prefix'=>'employee','namespace'=>'Employee','middleware'=>['auth','employee']],function (){
    //route group for employee who can just give a feedback
    Route::get('dashboard',[FeedbackFormController::class,'index'])->name('dashboard');
    Route::post('dashboard',[FeedbackFormController::class,'storeFeedback'])->name('store.feedback');

});

//feedback front end route

Route::get('/feedback',[TopFeedbackController::class,'index'])->name('feedback.home');
//end of feedback front-end dashboard

//feedback automation practice
Route::get('/review',[QuestionAutoUpdateDeleteController::class,'index']);






Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
