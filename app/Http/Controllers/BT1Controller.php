<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bt1_User;

class BT1Controller extends Controller
{
    public function index()
    {
        return view('bt1_index');
    }

    public function search(Request $request)
    {
        $user_id = $request->input('user_id');
        $name = $request->input('name');
        $class = $request->input('class');

        $data = Bt1_User::where('id', $user_id)
                          ->orWhere('name', $name)
                          ->orWhere('class', $class)
                          ->orderBy('id', 'desc')
                          ->get();
        return redirect()->route('bt1.show')->with('data', $data);
    }

}
