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
    public function edit($id)
    {
		$todo=Todo::find($id);
		
        return view('edit')->with('todo',$todo);
    }
    public function update(Request $request, $id)
    {
        
		$this->validate($request, [
		
            'name' => 'required',
           
        ]);
		
	     $todo = Todo::find($id);

        $todo->name = $request->name;

        $todo->save();

        return redirect()->route('todo.index');
		
		
    }

    public function destroy($id)
    {
        
		$todo = Todo::find($id);
		
		$todo->delete();
		

        return redirect()->back();
    }

}
