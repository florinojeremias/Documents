<?php

use App\Http\Controllers\FornecedorController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/performace_comercial','ClienteController@index');

Route::any('/cliente_relatorio/{id_cliente}/{data}','ClienteController@relatorio');

Route::any('/fornecedor_relatorio/{id}/{data}','FornecedorController@relatorio');


Route::get('/home', 'HomeController@index')->name('home');

