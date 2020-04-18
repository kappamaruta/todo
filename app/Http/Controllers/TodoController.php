<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use packages\Service\TodoService;
use App\Http\Requests\CreateTodoRequest;

class TodoController extends Controller
{
    public function __construct(TodoService $todo)
    {
        $this->todo = $todo;
    }
    public function index ()
    {
       $todos = $this->todo->fetch_todos();


       return view('index', compact('todos'));
    }

    public function create ()
    {
       return view('create');
    }

    public function store (CreateTodoRequest $request)
    {
       $form = $request->all();

       $this->todo->add_todo($form['title']);
    }
}
