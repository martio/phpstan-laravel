<?php

namespace App\Support;

use Illuminate\Support\Str;

final class UidSupport
{
    /**
     * Generate a new unique identifier (UID) such as UUID and ULID.
     *
     * @return string
     */
    public function generate(): string
    {
        return strtolower((string) Str::ulid());
    }
}
