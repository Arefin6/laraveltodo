<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
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

}
