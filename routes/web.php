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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about.index',['name'=> 'Kapil ar lab']);
});

Route::get('/cafes',function(){
    $cafes=[
        ['name'=>'Cafe Coffee Day','city'=>'Bangalore','rating'=>4,'status'=>'open','price'=>100,'id'=>1],
        ['name'=>'Barista','city'=>'Delhi','rating'=>3,'status'=>'closed','price'=>150,'id'=>2],
        ['name'=>'Starbucks','city'=>'Mumbai','rating'=>5,'status'=>'open','price'=>200,'id'=>3],
        ['name'=>'Costa Coffee','city'=>'Pune','rating'=>4,'status'=>'closed','price'=>120,'id'=>4],
        ['name'=>'Blue Tokai','city'=>'Gurgaon','rating'=>4,'status'=>'open','price'=>180,'id'=>5],
    ];
    return view('cafes.index',['cafes'=>$cafes]);
});

Route::get('/cafes/{id}',function($id){
    $cafes=[
        ['name'=>'Cafe Coffee Day','city'=>'Bangalore','rating'=>4,'status'=>'open','price'=>100,'id'=>1],
        ['name'=>'Barista','city'=>'Delhi','rating'=>3,'status'=>'closed','price'=>150,'id'=>2],
        ['name'=>'Starbucks','city'=>'Mumbai','rating'=>5,'status'=>'open','price'=>200,'id'=>3],
        ['name'=>'Costa Coffee','city'=>'Pune','rating'=>4,'status'=>'closed','price'=>120,'id'=>4],
        ['name'=>'Blue Tokai','city'=>'Gurgaon','rating'=>4,'status'=>'open','price'=>180,'id'=>5],
    ];
    return view('cafes.cafesDetails',['cafe'=>$cafes[$id-1]]);
});

