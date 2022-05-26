<?php
use App\Http\Controllers\InstrumentosApiController;
use App\Http\Controllers\usersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
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
Route::middleware('auth:api')->get('uri:/user', function (Request $request) {
    return $request->user();
});

route::resource('instrumentos',InstrumentosApiController::class);
route::resource('users',usersController::class);
