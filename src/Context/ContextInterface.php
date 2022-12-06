<?php

declare(strict_types=1);
/**
 * This file is part of DTM-PHP.
 *
 * @license  https://github.com/dtm-php/dtm-client/blob/master/LICENSE
 */
namespace DtmClient\Context;

interface ContextInterface
{
    public static function set(string $id, $value);

    public static function get(string $id, $default = null, $coroutineId = null);

    public static function getContainer();
}
