<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use packages\Service\TodoService;


class TodoController extends Controller
{
    public function __construct(TodoService $todo)
    {
        $this->todo = $todo;
    }
    public function index ()
    {

    }
}
