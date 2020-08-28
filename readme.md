# timelogger

[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.md)

This is a more professional way: https://symfony.com/doc/current/components/stopwatch.html

However for the ease of logging (including the method´s name), I will leave this package available.

## Installation

``` bash
$ composer require kraenzle-ritter/timelogger
```

## Usage

```
$stopwatch = TimeLogger::start();
  ...
$stopwatch->logTime('elapsed'); // named
  ...
$stopwatch->logTime();
```

`logTime()` can take 2 parameters: a name, and a minimum of seconds, so that only if the time is greater than this minimum, the method will log.
