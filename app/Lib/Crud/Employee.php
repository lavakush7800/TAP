<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;

class Employee{
    public static function store(){
        try{
            $data = Model::create();
            return $data;
        
        }catch(Exeption $e){
    
        }
    }
}