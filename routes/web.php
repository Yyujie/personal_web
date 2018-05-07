<?php

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
/*
Route::any('/', function () {
    return '未成年人禁止观看！';
})->name('child');

//新建中间件
Route::get('user/{age}', function ($age) {
    // 只有当 {id} 是数字时才会被调用
    return '用户年龄为'.$age;
})->middleware('age');*/

Auth::routes();
Route::get('/wuhan', 'WuhanController@index')->name('wuhan');
Route::get('/game', 'GameController@index')->name('game');
Route::get('/blog', 'BlogController@index')->name('blog');
//增加路由组
Route::group(['middleware' => 'auth', 'namespace' => 'Admin'], function() {
    Route::get('/', 'HomeController@index');
});
