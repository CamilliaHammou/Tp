<?php

declare(strict_types=1);

namespace App\Enum;

enum UserAccountStatusEnum: string
{
    case INACTIVE = 'inactive';
    case ACTIVE = 'active';
    CASE BANNED = 'banned';
    case BLOCKED = 'blocked';
}
