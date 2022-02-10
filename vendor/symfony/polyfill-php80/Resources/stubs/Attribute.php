<?php

#[Attribute(Attribute::TARGET_CLASS)]
final class Attribute
{
<<<<<<< HEAD
    public const TARGET_CLASS = 1;
    public const TARGET_FUNCTION = 2;
    public const TARGET_METHOD = 4;
    public const TARGET_PROPERTY = 8;
    public const TARGET_CLASS_CONSTANT = 16;
    public const TARGET_PARAMETER = 32;
    public const TARGET_ALL = 63;
    public const IS_REPEATABLE = 64;
=======
    const TARGET_CLASS = 1;
    const TARGET_FUNCTION = 2;
    const TARGET_METHOD = 4;
    const TARGET_PROPERTY = 8;
    const TARGET_CLASS_CONSTANT = 16;
    const TARGET_PARAMETER = 32;
    const TARGET_ALL = 63;
    const IS_REPEATABLE = 64;
>>>>>>> parent of 31cfa1b1 (p)

    /** @var int */
    public $flags;

<<<<<<< HEAD
    public function __construct(int $flags = self::TARGET_ALL)
=======
    public function __construct(int $flags = Attribute::TARGET_ALL)
>>>>>>> parent of 31cfa1b1 (p)
    {
        $this->flags = $flags;
    }
}
