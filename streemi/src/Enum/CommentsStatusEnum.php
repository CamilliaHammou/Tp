<?php
// src/Enum/CommentStatusEnum.php
namespace App\Enum;

enum CommentStatusEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
}