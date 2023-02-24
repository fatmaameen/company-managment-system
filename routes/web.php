<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
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

Route::resource("company" , CompanyController::class,[
'names'=>[
   'create'=>'company.create',
   'store'=>'company.store',
   'index'=>'company.index',
  'edit'=>'company.edit',
  'update'=>'company.update',
  'destroy'=>'company.delete'
]

]);

Route::resource("employee" , EmployeeController::class,[
    'names'=>[
       'create'=>'employee.create',
       'store'=>'employee.store',
       'index'=>'employee.index',
      'edit'=>'employee.edit',
      'update'=>'employee.update',
      'destroy'=>'employee.delete'
    ]

    ]);
