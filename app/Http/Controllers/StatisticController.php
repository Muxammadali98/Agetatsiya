<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Worker;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    function index($id){

        if ($id == 1){
            $data = Group::all();
        }else{
            $data = Worker::all();
        }

        return view('admin.statistic.index',compact('data'));
    }
}
