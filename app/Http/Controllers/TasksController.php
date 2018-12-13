<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use App\Roles;
use App\Users;
use App\Status;

class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.tasks');
    }
    
    public function getListTasks()
    {
        return Tasks::all();
    }
    
    public function getListRoles()
    {
        return Roles::all();
    }
    
    public function getListPerformers()
    {
        return Users::all();
    }
    
    public function getListDirectors()
    {
        return Users::all();
    }

    public function getListStatus()
    {
        return Status::all();
    }

    public function getFilterListTasks(Request $request)
    {
        $array = [];
        
        $roles_id = request('roles_id');
        $performer_id = request('performer_id');
        $director_id = request('director_id');
        $name = request('name');
        $status_id = request('status_id');
        $deadline = request('deadline');
        
        if(strcmp($roles_id, 'empty') <> 0) {
            $array['roles_id'] = $roles_id;
        }
    
        if(strcmp($performer_id, 'empty') <> 0) {
            $array['performer_id'] = $performer_id;
        }
    
        if(strcmp($director_id, 'empty') <> 0) {
            $array['director_id'] = $director_id;
        }

        if(!empty($name)) {
            $array['name'] = $name;
        }

        if(strcmp($status_id, 'empty') <> 0) {
            $array['status_id'] = $status_id;
        }
    
        if(!empty($deadline)) {
            $array['deadline'] = $deadline;
        }

        if(count($array) == 0) {
            return Tasks::all();
        } else {
            return Tasks::where($array)->get();
        }
    }
}
