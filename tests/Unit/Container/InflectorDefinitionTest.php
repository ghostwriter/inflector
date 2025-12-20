<?php

declare(strict_types=1);

namespace Tests\Unit\Container;

use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\Inflector\Container\InflectorDefinition;
use PHPUnit\Framework\Attributes\CoversClass;
use Tests\Unit\AbstractTestCase;
use Throwable;

use function is_a;

#[CoversClass(InflectorDefinition::class)]
final class InflectorDefinitionTest extends AbstractTestCase
{
    /** @throws Throwable */
    public function testImplementsDefinitionInterface(): void
    {
        self::assertTrue(is_a(InflectorDefinition::class, DefinitionInterface::class, true));
    }
}
