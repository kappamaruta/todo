<?php
namespace packages\Domain\Todo;
//何を書けばいいかわからぬので放置や//

use Carbon\CarbonImmutable;

class Todo
{

    private $id;

    private $title;

    private $isComplete = false;

    private $createdAt;

    private $updatedAt;


    public function id(): int
    {
        return $this->id;
    }

    public function title(): TodoTitle
    {
        return $this->title;
    }

    public function isComplete(): bool
    {
        return $this->isComplete;
    }

    public function createdAt(): CarbonImmutable
    {
        return $this->createdAt;
    }

    public function updatedAt(): CarbonImmutable
    {
        return $this->updatedAt;
    }

    protected function fill(array $row): void
    {
        foreach($row as $key => $value) {
            $this->{$key} = $value;
        }
    }

    /**
     * 新規登録に利用する
     */
    public static function new(string $title)
    {
        $todo = new self();
        $todo->fill(compact('title'));
        return $todo;
    }

    /**
     * 検索した結果を登録する際に利用する
     */
    public static function set(int $id, TodoTitle $title, bool $isComplete, CarbonImmutable $createdAt, CarbonImmutable $updatedAt)
    {
        $todo = new self();
        $todo->fill(compact('id', 'title', 'isComplete', 'createdAt', 'updatedAt'));
        return $todo;
    }

}
