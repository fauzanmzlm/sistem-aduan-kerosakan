<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

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
})->name('main');

Route::get('/borang1', function () {
    $pdf = Pdf::loadView('borang1');
    return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
    // return $pdf->download('borang1.pdf');
})->name('borang1');

Route::get('/borang2', function () {
    $pdf = Pdf::loadView('borang2');
    return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
    // return $pdf->download('borang2.pdf');
})->name('borang2');

Auth::routes();

Route::get('profile', fn() => view('pages.user-profile'))->name('profile');

Route::get('dashboard', fn() => view('pages.dashboard'))->name('dashboard');

// Route::get('user-management', fn() => view('pages.user-management'))->name('user-management');

Route::prefix('administrator')->name('administrator.')->group(function () {
    Route::resource('complaints', App\Http\Controllers\Administrator\ComplaintController::class);
});

Route::prefix('complainant')->group(function () {

    
    
});

Route::prefix('complaint')->group(function () {
    
    // Route::get('/', [App\Http\Controllers\Complainant\ComplaintController::class, 'index'])->name('index');
    
    Route::resource('gov-mov-assets-damage-rpt', App\Http\Controllers\GovernmentMovableAssetDamageReportController::class);
    
    Route::resource('infra-damage-rpt', App\Http\Controllers\InfrastructureDamageReportController::class);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('users', UserController::class);

//permissions
Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);

Route::get('account', function() {
    $title = "My Account";
    return view('account.index', ['title' => $title]);
})->name('account');

Route::resource('departments', App\Http\Controllers\DepartmentController::class);
