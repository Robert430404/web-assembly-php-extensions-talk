<?php

// Bring In Composer
use League\CLImate\CLImate;
use Robert430404\WebAssemblyExamples\Examples\Contracts\CommandInterface;
use Robert430404\WebAssemblyExamples\Examples\NoExtension;
use Robert430404\WebAssemblyExamples\Examples\WithExtension;

require_once './vendor/autoload.php';

// Pull The Command Arguments
/** @var string $command */
$command = $argv[1];

$climate = new CLImate;

// Registered Commands
/** @var CommandInterface[] $commands */
$commands = [
    'no-extension'   => new NoExtension($climate),
    'with-extension' => new WithExtension($climate),
];

($commands[$command])->execute();