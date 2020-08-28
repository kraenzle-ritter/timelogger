# timelogger

[![Software License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](LICENSE.md)

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
