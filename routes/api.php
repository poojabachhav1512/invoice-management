<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list_of_client', [ClientController::class, 'index']);
Route::post('/client', [ClientController::class, 'store']);
Route::put('/edit_client/{id}', [ClientController::class, 'update']);
Route::delete('/delete_client/{id}', [ClientController::class, 'destroy']);

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/create_invoice', [InvoiceController::class, 'store']);
