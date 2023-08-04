<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

$this->urlAdmin = "adminborn2023";
$this->urlUser = "born8";


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// User Page
Route::prefix('/auth')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('born.auth')->middleware('onauth');
    Route::post('/', [AuthController::class, 'loginAttempt'])->name('born.auth.login')->middleware('onauth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('born.auth.logout');
});
Route::prefix('/dashboard')->middleware('auth:mahasiswa')->group(function(){
    Route::get('/',[DashboardController::class, 'index'])->name('born.dashboard');
});

require __DIR__ . '/auth.php';
