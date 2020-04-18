<?php

namespace packages\Service;
use packages\Domain\Todo\Todo;
use packages\Domain\Todo\TodoTitle;
use packages\Domain\Todo\TodoRepositoryInterface;

class TodoService {

    public function __construct(TodoRepositoryInterface $todo)
    {
        $this->todo = $todo;
    }

    public function fetch_todos(): array
    {
        return $this->todo->getAll();

    }

    public function add_todo($title)
    {
            $title = new TodoTitle($title);
            $todo = Todo::new($title->value());
            return $this->todo->save($todo);

    }

}


