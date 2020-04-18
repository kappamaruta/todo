<?php

namespace packages\Domain\Todo;

interface TodoRepositoryInterface
{
    /**
     * TODOリストを全件取得します
     * 
     * @return Todo[]
     */
    public function getAll(): array;

    //インフラ層のrespositoryから取ってくるんや//
}
