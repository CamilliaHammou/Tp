<?php
// src/Entity/Comment.php
namespace App\Entity;

use App\Enum\CommentStatusEnum;
use Doctrine\ORM\Mapping as ORM;

class Comment {
    #[ORM\Column(type: 'string', enumType: CommentStatusEnum::class)]
    private CommentStatusEnum $status;

    public function getStatus(): CommentStatusEnum {
        return $this->status;
    }

    public function setStatus(CommentStatusEnum $status): self {
        $this->status = $status;
        return $this;
    }
}