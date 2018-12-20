<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Task;

class Users extends Controller
{
    public function users(){
    	$users = User::all();
    	return view('pagination', compact("users"));
    }

    public function Delete(Request $request){

	$tasks = Task::where('user_id', Auth::user()->id)->get();
	//dd($tasks->toArray());
	if(!$tasks->isEmpty())
	{
		foreach ($tasks as $key => $task) {
		$task->delete();}
    }
    	$dlt = $request->id;
    	$user = User::find($dlt);
		$user->delete();

	return redirect()->back();
  }
}
