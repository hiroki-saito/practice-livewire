<?php

use App\Http\Controllers\Ping;
use App\Http\Controllers\Random\Generate;
use App\Http\Controllers\SetLanguage;
use App\Http\Controllers\ShowRandom;
use App\Http\Controllers\ShowUrl;
use App\Http\Controllers\String\LengthCalculator;
use App\Http\Controllers\String\ShowLengthCalculator;
use App\Http\Controllers\Url\Decoder;
use App\Http\Controllers\Url\Encoder;
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

Route::get('/ping', Ping::class);
