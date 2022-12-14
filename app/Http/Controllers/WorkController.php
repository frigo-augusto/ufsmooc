<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function workSubmitOrientations(Request $request){
        $data = $request->only('name_title_work', 'work_weight', 'name_work_path', 'module_partition_id');
        DB::table('module')->insert([
            "name_title_work" => $data['name_title_work'],
            "work_weight" => $data['work_weight'],
            "name_work_path" => $data['name_work_path'],
            "module_partition_id" => $data['module_partition_id'],
        ]);
        return ('/');
    }

    public function getWorkData(Request $request){
        
    }

}
