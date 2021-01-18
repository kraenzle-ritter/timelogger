<?php

namespace KraenzleRitter\timelogger;

use Illuminate\Support\Facades\Log;

/**
 * Usage:
 *
 * $stopwatch = TimeLogger::start();
 * ...
 * $stopwatch->logTime();
 */

class TimeLogger
{
    public $start;

    public function __construct()
    {
        $this->start = microtime(true);
    }

    public static function start()
    {
        return new TimeLogger();
    }

    public function logTime($name = '', $minimum = 0)
    {
        $this->end = microtime(true);
        $time = round($this->end - $this->start, 2);
        if ($time >= $minimum) {
            Log::debug(debug_backtrace()[1]['class'] .'::'. debug_backtrace()[1]['function'], [$name ?: 'executionTime' => $time]);
        }
    }
}

}
