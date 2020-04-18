<?php
namespace packages\Domain\Todo;

class TodoTitle
{

    private const MIN_LENGTH = 2;
    private const MAX_LENGTH = 100;

    private $value;

    public function __construct(string $value)
    {
        $length = strlen($value);
        if ($length < self::MIN_LENGTH || $length > self::MAX_LENGTH) {
            // FIXME: 適した例外を作成する必要があります
            throw new \Exception('タイトルは、2文字から100文字の間で指定してください。');
        }
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
