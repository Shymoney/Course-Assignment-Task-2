<?php

namespace App\Enum;

use App\Traits\EnumToStrings;

enum Level : string
{
    use EnumToStrings;

    case UNDERGRADUATE = 'undergraduate';
    case POSTGRADUATE = 'postgraduate';

    public static function toString(): string
    {
        return self::concatToString(self::cases());
    }
}
