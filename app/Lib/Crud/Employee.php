<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;

class Employee{
    public static function store(array $data):string{
        try{
            // dd($data);
            $result = Model::create($data);
            if($result){
                return $result;
            }else{
                return '';
            }
        }catch(\exception $e){
            throw new \Exception('Unable to save data!');
        }
    }
}