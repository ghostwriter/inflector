<?php

declare(strict_types=1);

namespace Tests\Unit\Exception;

use Ghostwriter\Inflector\Exception\ShouldNotHappenException;
use Ghostwriter\Inflector\Interface\InflectorExceptionInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Throwable;

use function is_a;

#[CoversClass(ShouldNotHappenException::class)]
final class ShouldNotHappenExceptionTest extends TestCase
{
    /** @throws Throwable */
    public function testImplementsExceptionInterface(): void
    {
        self::assertTrue(is_a(ShouldNotHappenException::class, InflectorExceptionInterface::class, true));

        self::assertTrue(is_a(ShouldNotHappenException::class, Throwable::class, true));
    }
}
