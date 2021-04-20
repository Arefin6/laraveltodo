<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{

    public function index()
    {
         return view('welcome')->with('todos', Todo::all());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
		
            'name' => 'required',
           
        ]);
		
		$todo = new Todo;

        $todo->name = $request->name;

        $todo->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        
		$todo = Todo::find($id);
		
		$todo->delete();
		

        return redirect()->back();
    }

}
