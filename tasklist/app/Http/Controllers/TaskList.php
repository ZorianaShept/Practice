<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;


class TaskList extends Controller
{
  
    public function List(Request $request) {
      //dd(Auth::user()->toArray());
    	//$a = Auth::user()->tasks()->get();
    	$TaskList = Task::where('user_id', Auth::user()->id)->get();//витягування даних з БД
    	if ($request->id == null)//перевірка на приходження значення
    	{
 			return view("HomeWork.WorkList")->with(['TaskList' => $TaskList, 'taskToEditName' => null]);
    	}
    	else{
    		
		$change = $request->id;

		$taskToEdit = Task::find($change);

		if( $taskToEdit == null){
    			return redirect('WorkList');
    		}

		$taskToEditName = $taskToEdit->name;


    	return view("HomeWork.WorkList")->with(['TaskList' => $TaskList, 'taskToEditName' => $taskToEditName]);
    }
    }

  public function CreateTask(Request $request){
    $user_id = Auth::user()->id;
  	$newtask = new Task;
  	$newtask->name = $request->task;
    $newtask->user_id=$user_id;
  	$newtask->save();

  	return redirect()->back();
  }

  public function Done(Request $request){

  	$New = Task::find($request->id);
  	$New->done=True;
  	$New->save();

	return redirect()->back();
  }
  public function Delete(Request $request){

  	Task::find($request->id)->delete();

	return redirect()->back();
  }

  public function Сhange(Request $request){

  	$change=Task::find($request->id);
  	$change->name = $request->task;
  	$change->save();

	return redirect('WorkList');

}

	}