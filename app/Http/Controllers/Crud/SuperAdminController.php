<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index(){
        return view('superAdmin');
    }
    public function store(){
        try{

        }catch(\Exception $e){
            
        }
    }
}
