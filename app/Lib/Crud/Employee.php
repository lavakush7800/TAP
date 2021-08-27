<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;

class Employee{
    public static function store($data){
        try{
            $result = Model::create($data);
            return $result;
        
        }catch(Exeption $e){
    
        }
    }
}