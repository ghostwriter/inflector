<?php

declare(strict_types=1);

namespace Ghostwriter\Inflector\Exception;

use Ghostwriter\Inflector\Interface\InflectorExceptionInterface;
use LogicException;

final class ShouldNotHappenException extends LogicException implements InflectorExceptionInterface {}
