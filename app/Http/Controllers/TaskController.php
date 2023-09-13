<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){}

        public function store(Request $request){

            $args = array();
        $args['error'] = false;
        $title = $request->title;
        $description = $request->description;
        $due_date = $request->due_date;

        try {

            $user = getAuth()::user();

             if($user){

                $task = Tasks::create([
                        'title' => $title,
                        'description' => $description,
                        'due_date' => $due_date,
                        'status' => 0,
                        'user_id' => $user,
                ]);  

           

           
            $args['task'] = new Task($task);
            $args['message'] = "Task store successfully!";
        } else {
            $args['error'] = true;
        }

    } catch (\Exception $e) {
        $args['error'] = true;
        $args['error_message'] = $e->getMessage();
        $args['message'] = "Error with registration ";
    }
    return response()->json($args);
}
            
        

    public function delete($idtask){

        $args = array();
        $args['error'] = false;
        try {

            $user = getAuth()::user();

             if($user){

                $task = Tasks::delete();  

           

           
            $args['task'] = new Task($task);
            $args['message'] = "Task delete successfully!";
        } else {
            $args['error'] = true;
        }

    } catch (\Exception $e) {
        $args['error'] = true;
        $args['error_message'] = $e->getMessage();
        $args['message'] = "Error with deleted ";
    }
    return response()->json($args);
    }

    
    public function edit(Request $request, $idtask){

        $args = array();
        $args['error'] = false;
        $title = $request->title;
        $description = $request->description;
        $due_date = $request->due_date;

        try {

            $user = getAuth()::user();

             if($user){

                $task = Tasks::update([
                        'title' => $request->title,
                        'description' => $request->description,
                        'due_date' => $request->due_date,
                        'status' => 0,
                        'user_id' => $user,
                ]);  

           

           
            $args['task'] = new Task($task);
            $args['message'] = "Task upfated successfully!";
        } else {
            $args['error'] = true;
        }

    } catch (\Exception $e) {
        $args['error'] = true;
        $args['error_message'] = $e->getMessage();
        $args['message'] = "Error with update ";
    }
    return response()->json($args);
  }


}
