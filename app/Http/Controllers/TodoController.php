<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index ()
    {
        return view('todo.view');
    }
    public function create()
    {
        return view ('todo.create');

    }
    public function edit()
    {
        return view ('todo.edit');
    }
}
