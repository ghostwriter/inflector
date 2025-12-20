<?php

declare(strict_types=1);

namespace Ghostwriter\Inflector;

use Ghostwriter\Inflector\Interface\InflectorInterface;

/** @see FooTest */
final class Inflector implements InflectorInterface
{
    public function __construct() {}

    public static function new(): self
    {
        return new self();
    }

    public function test(): bool
    {
        return true;
    }
}
