<?php
// src/Entity/Comment.php
namespace App\Entity;

use App\Enum\CommentStatusEnum;
use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: 'string', enumType: CommentStatusEnum::class)]
    private CommentStatusEnum $status;

    // Getter and setter for $status
    public function getStatus(): CommentStatusEnum
    {
        return $this->status;
    }

    public function setStatus(CommentStatusEnum $status): self
    {
        $this->status = $status;
        return $this;
    }
}