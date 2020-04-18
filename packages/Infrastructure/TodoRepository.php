<?php

namespace packages\Infrastructure\Todo;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;
use packages\Domain\Todo\TodoRepositoryInterface;
use packages\Domain\Todo\Todo;
use packages\Domain\Todo\TodoTitle;

class TodoRepository implements TodoRepositoryInterface
{
    public function getAll(): array
    {

        return DB::table('todos')
            ->get()
            ->transform([$this, 'transform'])
            ->toArray()
        ;
    }

    public function save(Todo $todo)
    {
        DB::table('todos')
        ->updateOrInsert(
            ['is_complete' => $todo->isComplete(),'title' => $todo->getTitle()]
        );
    }

    public function transform(object $todo): Todo
    {
        return Todo::set(
            $todo->id,
            new TodoTitle($todo->title),
            $todo->is_complete,
            new CarbonImmutable($todo->created_at),
            new CarbonImmutable($todo->updated_at)
        );
    }
}
