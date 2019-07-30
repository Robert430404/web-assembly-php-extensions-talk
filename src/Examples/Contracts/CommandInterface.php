<?php

namespace Robert430404\WebAssemblyExamples\Examples\Contracts;

/**
 * Interface CommandInterface
 *
 * Represents the contract for the command.
 */
interface CommandInterface
{
    /**
     * Executes the command.
     */
    public function execute(): void;
}