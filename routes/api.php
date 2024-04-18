<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RenterController;
use App\Http\Controllers\RentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/getKolcsonzesek", [RentController::class, "getRents"]);
Route::post("/addKolcsonzesek", [RentController::class, "addRent"]);
Route::get("/getKolcsonzes/{id}", [RentController::class, "getRent"]);
Route::put("/modifyKolcsonzesek/{id}", [RentController::class, "modifyRent"]);
Route::delete("/deleteKolcsonzesek/{id}", [RentController::class, "delRent"]);

Route::get("/getKolcsonzok", [RenterController::class, "getRenters"]);
Route::get("/getrenterKolcsonzok/{id}", [RenterController::class, "getRenter"]);
