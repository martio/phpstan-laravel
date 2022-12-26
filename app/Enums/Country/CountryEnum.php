<?php

namespace App\Enums\Country;

use App\Enums\Concerns\Equalable;
use App\Enums\Concerns\Valuable;

enum CountryEnum: string
{
    use Equalable;
    use Valuable;

    case England = 'gb';
    case Poland = 'pl';
}
