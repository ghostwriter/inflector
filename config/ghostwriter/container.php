<?php

declare(strict_types=1);

use Ghostwriter\Config\Interface\ConfigurationInterface;
use Ghostwriter\Container\Interface\Service\DefinitionInterface;
use Ghostwriter\Container\Interface\Service\ExtensionInterface;
use Ghostwriter\Container\Interface\Service\FactoryInterface;
use Ghostwriter\Inflector\Container\Ghostwriter\Config\ConfigurationExtension;
use Ghostwriter\Inflector\Inflector;
use Ghostwriter\Inflector\Interface\InflectorInterface;

/**
 * @return array{
 *     'alias': array<class-string,class-string>,
 *     'define': array<class-string,class-string<DefinitionInterface>>,
 *     'extend': array<class-string,list<class-string<ExtensionInterface>>>,
 *     'factory': array<class-string,class-string<FactoryInterface>>
 * }
 */
return [
    'alias' => [
        InflectorInterface::class => Inflector::class,
    ],
    'define' => [],
    'extend' => [
        ConfigurationInterface::class => [ConfigurationExtension::class],
    ],
    'factory' => [],
];
