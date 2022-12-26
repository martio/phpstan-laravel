<?php

namespace App\Enums\Person;

use App\Enums\Concerns\Equalable;

enum GenderEnum: string
{
    use Equalable;

    case Female = 'female';
    case Male = 'male';
}
