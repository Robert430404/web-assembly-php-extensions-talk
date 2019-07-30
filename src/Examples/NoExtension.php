<?php

namespace Robert430404\WebAssemblyExamples\Examples;

use League\CLImate\CLImate;
use Robert430404\WebAssemblyExamples\Examples\Contracts\CommandInterface;

/**
 * Class NoExtension
 *
 * This is the test ran with no extension.
 *
 * @package Robert430404\WebAssemblyExamples\Examples
 */
class NoExtension implements CommandInterface
{
    /**
     * @var CLImate
     */
    private $climate;

    /**
     * Maximum Iterations
     *
     * @var int
     */
    private $maxValue = 200000000;

    /**
     * NoExtension constructor.
     *
     * @param CLImate $climate
     */
    public function __construct(CLImate $climate)
    {
        $this->climate = $climate;
    }

    /**
     * Executes the command.
     */
    public function execute(): void
    {
        $this->climate->out("Started Executing Without Extension");

        $startTime = time();

        for ($i = 0; $i < $this->maxValue; $i++) {
            // Looping Here To Sum
            $this->sumNumbers($i, $i * rand(1, 9));
        }

        $endTime = time();

        $this->climate->out('Execution Ended');
        $this->climate->out('Total Execution Time: ' . ($endTime - $startTime) . ' seconds');
    }

    public function sumNumbers($one, $two) {
        return $one + $two;
    }
}