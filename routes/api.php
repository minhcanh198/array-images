<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/upload', 'Halimtuhu\ArrayImages\FieldController@upload');
Route::delete('/delete', 'Halimtuhu\ArrayImages\FieldController@delete');
