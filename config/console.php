<?php

declare(strict_types=1);
use Hyperf\Command\ClosureCommand;
use Hyperf\Command\Console;

Console::command('hello', function () {
    /**
     * @var ClosureCommand $this
     * @phpstan-ignore variable.undefined
     */
    $this->comment('Hello, Hyperf!');
})->describe('This a closure command demo.');
