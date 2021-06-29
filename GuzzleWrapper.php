<?php

namespace common\services\guzzle;

use GuzzleHttp\Client;
use common\services\guzzle\GuzzleRequest as Request;

class GuzzleWrapper
{
    protected static $client;

    public static function __callStatic($method, $args)
    {
        return Request::new(static::client())->{$method}(...$args);
    }

    public static function client()
    {
        return static::$client ?: static::$client = new Client;
    }
}
