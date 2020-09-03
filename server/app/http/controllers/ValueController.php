<?php

namespace App\Http\Controllers;
use App\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
     public function store(Request $request)
	{
		$input = new Value;
		$input->value=$request->value;
		$input->save();
		echo "success";
	}
	
	public function show()
	{
		$input =Value::orderBy('Sno','DESC')->get();
		echo json_encode($input);
	}
}
