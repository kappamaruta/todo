<?php

namespace packages\Domain\Todo;

use PhpParser\Node\Expr\Cast\Int_;

interface TodoRepositoryInterface
{
    /**
     * TODOリストを全件取得します
     *
     * @return Todo[]
     */
    public function getAll(): array;

    public function save(Todo $todo);
    //インフラ層のrespositoryから取ってくるんや//
}
