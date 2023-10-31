<?php

use App\Http\Controllers\Cashbook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DPSController;
use App\Http\Controllers\FDRController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransectionController;

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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/dashboard', function () {
    return view('backend.master');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/login/data', [ProfileController::class, 'log']);

Route::middleware('auth')->group(function () {
    
    Route::get('/change/password', [ProfileController::class, 'password'])->name('change.password');
    Route::post('/update/password', [OfficeController::class, 'passwordUpdate'])->name('password');

    Route::get('/nava/ratno/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
    
    Route::get('/nava/ratno/cashbook', [Cashbook::class, 'cashbook'])->name('cashbook');

   
    Route::get('/profile/account/holder/{id}', [ProfileController::class, 'profile'])->name('profile');

    // Personal Account
    Route::get('/perosonal/account/list', [MemberController::class, 'list'])->name('personal.list');
    Route::post('/perosonal/account/create/post', [MemberController::class, 'create'])->name('personal.create.post');
    Route::get('/perosonal/account/create', [MemberController::class, 'createShow'])->name('personal.create');
    Route::get('/perosonal/account/edit/{id}', [MemberController::class, 'edit'])->name('edit.account.personal');
    Route::post('/perosonal/account/udate/{id}', [MemberController::class, 'update'])->name('personal.update');
    Route::get('/perosonal/account/delete', [MemberController::class, 'delete'])->name('personal.delete');

    Route::post('/official/account/create/post', [MemberController::class, 'office_create'])->name('official.create.post');
    Route::post('/official/account/edit/post/{id}', [MemberController::class, 'office_edit_post'])->name('official.edit.post');
    Route::get('/official/account/edit/{id}', [MemberController::class, 'office_edit'])->name('official.edit');
    Route::get('/official/account/create', [MemberController::class, 'office_createShow'])->name('official.create');
    Route::get('/official/account/list', [MemberController::class, 'office_list'])->name('official.list');


  
    // Route::resource('staff', 'StaffController');
    Route::get('/staff/list', [StaffController::class, 'index'])->name('staff.list');
    Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('/staff/create/post', [StaffController::class, 'store'])->name('staff.store');
    Route::get('/staff/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::post('/staff/udate', [StaffController::class, 'update'])->name('personal.edit.post');
    Route::get('/staff/delete', [StaffController::class, 'destroy'])->name('staff.delete');



    //fdr
    Route::get('/fdr/closed/list', [FDRController::class, 'fdr_list'])->name('fdr.list');
    Route::get('/fdr/list/all', [FDRController::class, 'fdr_list_all'])->name('fdr.list.all');

    Route::get('/fdr/create', [FDRController::class, 'fdr_create'])->name('fdr.create');
    Route::get('/fdr/edit/{id}', [FDRController::class, 'fdr_edit'])->name('fdr.edit');
    Route::post('/fdr/edit/post/{id}', [FDRController::class, 'fdr_edit_post'])->name('fdr.edit.post');
    Route::post('/fdr/create/post', [FDRController::class, 'fdr_create_post'])->name('fdr.create.post');
    Route::get('/fdr/status/post/{id}', [FDRController::class, 'fdr_status_post'])->name('fdr.status.change');

   //dps
   Route::get('/dps/matured/list', [DPSController::class, 'dps_list'])->name('dps.list');
   Route::get('/dps/list/all', [DPSController::class, 'dps_list_all'])->name('dps.list.all');

   Route::get('/dps/create', [DPSController::class, 'dps_create'])->name('dps.create');
   Route::get('/dps/edit/{id}', [DPSController::class, 'dps_edit'])->name('dps.edit');
   Route::post('/dps/edit/post/{id}', [DPSController::class, 'dps_edit_post'])->name('dps.edit.post');
   Route::post('/dps/create/post', [DPSController::class, 'dps_create_post'])->name('dps.create.post');
    Route::get('/dps/status/post/{id}', [DPSController::class, 'dps_status_post'])->name('dps.status.change');

    
 //
 Route::get('/loan/list', [LoanController::class, 'loan_list'])->name('loan.list');
 Route::get('/loan/list/close', [LoanController::class, 'loan_list_close'])->name('closed.loan.list');

 Route::get('/loan/create', [LoanController::class, 'loan_create'])->name('loan.create');
 Route::post('/loan/create/post', [LoanController::class, 'loan_create_post'])->name('loan.create.post');
 Route::get('/loan/edit/{id}', [LoanController::class, 'loan_edit'])->name('loan.edit');
 Route::post('/loan/edit/post/{id}', [LoanController::class, 'loan_edit_post'])->name('loan.edit.post');
 Route::get('/loan/status/{id}', [LoanController::class, 'loan_status'])->name('loan.status.change');


    //All 
    // Route::post('/transection/list/', [TransectionController::class, 'transection_add_withdraw'])->name('transection.amount');
    Route::post('/transection/{id}', [TransectionController::class, 'transection'])->name('transection');
   
    Route::get('/transection/history', [TransectionController::class, 'transection_history'])->name('transection.history');
//
// official
Route::get('/fees/create', [OfficeController::class, 'fees_create'])->name('fees.create');
Route::post('/fees/create/post', [OfficeController::class, 'fees_create_post'])->name('fees.store');



//

Route::get('/incoming/transection', [OfficeController::class, 'incomingTransection'])->name('incoming.transection');
Route::post('/income/store', [OfficeController::class, 'incomeStore'])->name('income.store');
Route::get('/income/edit/{id}', [OfficeController::class, 'income_edit'])->name('income.edit');
Route::post('/income/update', [OfficeController::class, 'income_update'])->name('income.update');

Route::get('/outgoing/transection', [OfficeController::class, 'outgoingTransection'])->name('outgoing.transection');
Route::post('/expense/store', [OfficeController::class, 'expense_store'])->name('expense.store');
Route::get('/expense/edit/{id}', [OfficeController::class, 'expense_edit'])->name('expense.edit');
Route::post('/expense/update', [OfficeController::class, 'expense_update'])->name('expense.update');

});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
