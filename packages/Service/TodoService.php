<?php

namespace packages\Service;
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
}


