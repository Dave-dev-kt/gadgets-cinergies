<?php

use App\Http\Controllers\DownloadPDF;
use App\Http\Controllers\GadgetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;
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
    return redirect()->route('login');
});

Route::get('/agent/{matricule?}', function ($matricule) {
    return view('dashboard', compact('matricule'));
})->name('dashboard');

//SELF GADGETS


Route::get('/mon-gadget', [GadgetController::class, 'index'])->name('monGadget');
Route::get('/procuration-gadget', [GadgetController::class, 'procuration'])->name('procurationGadget');
Route::get('/procuration-gadget-confirm', [GadgetController::class, 'procurationConfirm'])->name('procurationConfirm');



Route::get('/confirmer', [SendMailController::class, 'sendMail'])->name('sendMail');

Route::get('/success', [GadgetController::class, 'success'])->name('success');

Route::get('/print', [DownloadPDF::class, 'print'])->name('print');

require __DIR__ . '/auth.php';
