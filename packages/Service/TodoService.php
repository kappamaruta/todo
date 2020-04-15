<?php

namespace packages\Service;

use packages\Domain\Todo\Todo\UserRepositoryInterface;

class TodoService{

    public function __construct(UserRepositoryInterface $todo)
    {
        $this->todo = $todo;
    }

    public function fetch_todos(){

        return $this->todo->get_all();

    }
}


