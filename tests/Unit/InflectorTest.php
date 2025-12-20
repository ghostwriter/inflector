<?php

declare(strict_types=1);

namespace Tests\Unit;

use Generator;
use Ghostwriter\Inflector\Inflector;
use Ghostwriter\Inflector\Interface\InflectorInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Throwable;

use function is_a;

#[CoversClass(Inflector::class)]
final class InflectorTest extends TestCase
{
    /** @throws Throwable */
    #[DataProvider('provideExampleCases')]
    public function testExample(bool $value): void
    {
        self::assertSame($value, $value);

        self::assertTrue(Inflector::new()->test());
    }

    /** @throws Throwable */
    public function testImplementsInterface(): void
    {
        self::assertTrue(is_a(Inflector::class, InflectorInterface::class, true));
    }

    /** @return Generator<array{bool}> */
    public static function provideExampleCases(): iterable
    {
        yield from [
            'true' => [true],
            'false' => [false],
        ];
    }
}
