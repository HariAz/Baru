<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_Conduct_Audit;

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

Route::get('/', [controller_Conduct_Audit::class, 'index'])->name('audit.index');


// Rute untuk proses audit (simpan checklist audit)
Route::post('/proses_audit', [controller_Conduct_Audit::class, 'store'])->name('proses_audit');

// Rute untuk menampilkan tabel audit
Route::get('/table', [controller_Conduct_Audit::class, 'showAuditTable'])->name('audit.table');

// Rute untuk menampilkan halaman create audit checklist
Route::get('/create', [controller_Conduct_Audit::class, 'createAuditChecklist'])->name('audit.create');

// Rute untuk memperbarui audit checklist
Route::post('/update', [controller_Conduct_Audit::class, 'updateAuditChecklist'])->name('audit.update');
