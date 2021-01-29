# timelogger

[![Latest Stable Version](https://poser.pugx.org/kraenzle-ritter/timelogger/v)](//packagist.org/packages/kraenzle-ritter/timelogger) [![Total Downloads](https://poser.pugx.org/kraenzle-ritter/timelogger/downloads)](//packagist.org/packages/kraenzle-ritter/timelogger) [![Latest Unstable Version](https://poser.pugx.org/kraenzle-ritter/timelogger/v/unstable)](//packagist.org/packages/kraenzle-ritter/timelogger) [![License](https://poser.pugx.org/kraenzle-ritter/timelogger/license)](//packagist.org/packages/kraenzle-ritter/timelogger)
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
