<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class StudentController extends Controller
{
    public function getAllStudents(){
        try{

            



        }catch(\Exception $e){

        }
    }

    public function storeStudent(Request $request){

        try{
            dd($request->all());
            

        }catch(\Exception $e){

        }
    }
}
