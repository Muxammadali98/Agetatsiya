<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Company;
use App\Models\Group;
use App\Models\Status;
use App\Models\Task;
use App\Models\Worker;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index(){
        $clients = Client::all();
        $tasks = Task::all();
        $companies = Company::all();
        $groups = Group::all();
        $statuses = Status::all();
        return view('admin.client.index',compact('statuses','clients','tasks', 'companies', 'groups'));
    }

    function create() {
        $statuses = Status::all();
        $workers = Worker::all();
        $tasks = Task::where('status', false)->get();
        return view('admin.client.create',compact('statuses',  'workers','tasks'));
    }

    function store(Request $request) {
        $this->validate($request,[
            'title'=>'required',
            'phone'=>'required',
            'status_id'=>'required | int | exists:statuses,id',
            'comment'=>'required',
            'worker_id'=>'required | int | exists:workers,id'
        ]);

        $user = Worker::find($request->worker_id);
        $data = $request->all();
        $data['group_id']=$user->group_id;
        $client = Client::create($data);



        return redirect()->route('client.index');
    }

    function show($id) {
        $client = Client::find($id);
        return view('admin.client.show',compact('client'));
    }
    
    function edit($id) {
        $client = Client::find($id);
        $status = Status::all();
        $workers = Worker::all();
        return view('admin.client.show',compact('status','client', 'worker'));
    }

    function update(Request $request, $id) {
        $this->validate($request,[
            'title'=>'required',
            'phone'=>'required',
            'status_id'=>'required| int | exists:satuses,id',
            'comment'=>'required',
            'worker_id'=>'required| int | exists:workers,id'
        ]);

        $client = Client::find($id);
        $data = $request->all();
        $client->update($data);

        return redirect()->route('client.index');

    }

    function destroy($id) {
        Client::destroy($id);

        return redirect()->route('client.index');
    }
}