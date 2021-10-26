<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\SuperAdminController;
use App\Models\SuperAdmin as Model;
use Illuminate\Support\Facades\Log;

class SuperAdmin{
    public static function store(){
        try{
            $result = Model::create($data);
            if($result){
                return $result;
            }else{
                return '';
            }
        }catch(\Exception $e){
            throw new \Exception('Unable to save data!');
        }
    }
}