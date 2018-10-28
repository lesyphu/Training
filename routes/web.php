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

Route::get('/', function () {
    return view('welcome');
});
// đường dẫn đến form thêm nhân viên
//phuong thuc route::get la tra~ ve` 1 view
Route::get('nhanvien/create','NhanVienController@create')->name('nhanvien.create'); //luon dat name cho route
// đường dẫn khi submit form thêm nhân viên

//phuong thuc route::post la nhan gia tri nguoi dung` request 

Route::post('nhanvien/create','NhanVienController@store')->name('nhanvien.create');//name route giong nhau vi co 2 phuong thuc la get voi post
//ben html no se nhan cac thuoc tinh cua cai form
//<form action="{{route('nhanvien.create')}}" method="Post">
//method post -> su dung method post cho route co' name la` nhanvien.create 
//he thong xem xet' ten route va method
//Route::post('nhanvien/create','NhanVienController@store')->name('nhanvien.create'); = <form action="{{route('nhanvien.create')}}" method="Post">
//khi no nhan duoc yeu cau tu form no se vo NhanVienController@store

Route::get('nhanvien/list','NhanVienController@list')->name('nhanvien.list');