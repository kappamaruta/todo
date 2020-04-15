<?php

namespace packages\Infrastructure\Todo;


use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;
use packages\Domain\Todo\TodoRepositoryInterface;

class TodoRepository implements TodoRepositoryInterface
{
    public function get_all()
    {
        $todos = DB::table('todos')->get();

        return $todos;
    }
}
