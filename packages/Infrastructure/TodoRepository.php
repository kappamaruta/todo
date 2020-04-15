<?php

namespace packages\Infrastructure\Todo;
use TodoRepositoryInterface;
use packages\Domain\Todo\Todo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;

class TodoRepository implements TodoRepositoryInterface
{
    public function get_all()
    {
        $todos = DB::table('todos')->get();

        return $todos;
    }
}
