<?php

namespace App\Http\Controllers;

class TaskController extends Controller
{
    public function index()
    {
        $name = 'Willian';

        return view('tasks.index', [
            'name' => $name,
        ]);
    }
}