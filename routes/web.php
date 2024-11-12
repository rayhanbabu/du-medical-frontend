<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return redirect('/DUM');
 });

Route::get('{office}/',[HomeController::class,'home_page']); 
Route::get('officePage/{office}/{page_id}',[HomeController::class,'office_page']); 
Route::get('schedule/{office}',[HomeController::class,'schedule']); 
Route::get('scheduleDetail/{office}/{service_name}',[HomeController::class,'schedule_detail']); 
Route::get('people/{office}/{member}',[HomeController::class,'people']); 
