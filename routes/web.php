<?php

use App\Http\Controllers\BasicCrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicCrudController::class, 'onSelect']);

Route::get('/insert', function () {
    return view('insert');
});
Route::post('/insertData', [BasicCrudController::class, 'onInsert']);

Route::get('/delete', function () {
    return view('delete');

});
Route::post('/deleteData', [BasicCrudController::class, 'onDelete']);

Route::get('/update', function () {
    return view('update');

});
Route::post('/updateData', [BasicCrudController::class, 'onUpdate']);
