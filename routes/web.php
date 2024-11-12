<?php

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
    return view('index');
});
Route::get('create', function()
{
return View::make('create_audit_checklist');
});

Route::get('update', function()
{
return View::make('update_audit_checklist');
});
Route::get('table', function()
{
return View::make('audit_table');
});
Route::get('meeting', function()
{
return View::make('audit_meeting');
});