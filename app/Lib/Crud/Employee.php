<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Emploee as Model;
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
    public static function getData():array{
        try{
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function getById($id){
        try{
            
        }catch(Exception $e){

        }
    }
    public static function delete(int $id):bool{
        try{
            $data = Model::find($id)->delete();
            if($data){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            throw new \Exception('Sumthing went Wrong');
        }
    }
}