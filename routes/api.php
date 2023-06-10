<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ReportController;
use App\Models\Expense;
use App\Models\Income;

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'store']);
    Route::put('/profile/{id}', [ProfileController::class, 'update']);
    Route::get('/profile/{id}', [ProfileController::class, 'show']);
    Route::delete('/profile/{id}', [ProfileController::class, 'destroy']);

    Route::get('/incomes', [IncomeController::class, 'index']);
    Route::post('/incomes', [IncomeController::class, 'store']);
    Route::put('/incomes/{id}', [IncomeController::class, 'update']);
    Route::get('/incomes/{id}', [IncomeController::class, 'show']);
    Route::delete('/incomes/{id}', [IncomeController::class, 'destroy']);

    Route::get('/expenses', [ExpenseController::class, 'index']);
    Route::post('/expenses', [ExpenseController::class, 'store']);
    Route::put('/expenses/{id}', [ExpenseControlle::class, 'update']);
    Route::get('/expensesn/{id}', [ExpenseControlle::class, 'show']);
    Route::delete('/expenses/{id}', [ExpenseControlle::class, 'destroy']);

    Route::get('/reports', [ReportsController::class, 'index']);
    Route::post('/reports', [ReportsControllerr::class, 'store']);
    Route::put('/reports/{id}', [ReportsController::class, 'update']);
    Route::get('/reports/{id}', [ReportsController::class, 'show']);
    Route::delete('/reports/{id}', [ReportsController::class, 'destroy']);

});





/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//API route for register new user
//Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
//Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
//Route::group(['middleware' => ['auth:sanctum']], function () {

    // API route for logout user
 //   Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

    //API Profile
    // Route::get('/profile', function(Request $request) {
    //     return auth()->user();
    // });
//     Route::get('/profile', [ProfileController::class, 'index']);
//     Route::post('/profile', [ProfileController::class, 'store']);
//     Route::put('/profile/{id}', [ProfileController::class, 'update']);
//     Route::get('/profile/{id}', [ProfileController::class, 'show']);
//     Route::delete('/profile/{id}', [ProfileController::class, 'destroy']);
//     // Route::resource('/profile', ProfileController::class);
//     // Route::post('/profile', [ProfileController::class, 'store']);

//     Route::get('/pemasukan', [PemasukanController::class, 'index']);
//     Route::post('/pemasukan', [PemasukanController::class, 'store']);
//     Route::put('/pemasukan/{id}', [PemasukanController::class, 'update']);
//     Route::get('/pemasukan/{id}', [PemasukanController::class, 'show']);
//     Route::delete('/pemasukan/{id}', [PemasukanController::class, 'destroy']);

//     Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
//     Route::post('/pengeluaran', [PengeluaranController::class, 'store']);
//     Route::put('/pengeluaran/{id}', [PengeluaranController::class, 'update']);
//     Route::get('/pengeluaran/{id}', [PengeluaranController::class, 'show']);
//     Route::delete('/pengeluaran/{id}', [PengeluaranController::class, 'destroy']);

//     Route::get('/laporan', [LaporanController::class, 'index']);
//     Route::post('/laporan', [LaporanController::class, 'store']);
//     Route::put('/laporan/{id}', [LaporanController::class, 'update']);
//     Route::get('/laporan/{id}', [LaporanController::class, 'show']);
//     Route::delete('/laporan/{id}', [LaporanController::class, 'destroy']);

// });
