<?php

declare(strict_types=1);

namespace App;

/**
 * Class PhpInfo
 * @package App
 */
class PhpInfo
{
    /**
     * Just run phpinfo
     */
    public static function run(): void
    {
        phpinfo();
    }
}
