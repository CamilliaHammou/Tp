<?php
// src/Entity/Comment.php
namespace App\Entity;

use App\Enum\CommentStatusEnum;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

class Comment {
    #[ORM\Column(type: 'string', enumType: CommentStatusEnum::class)]
    private CommentStatusEnum $status;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'comment')]
    private Collection $author;

    public function __construct()
    {
        $this->author = new ArrayCollection();
    }

    public function getStatus(): CommentStatusEnum {
        return $this->status;
    }

    public function setStatus(CommentStatusEnum $status): self {
        $this->status = $status;
        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getAuthor(): Collection
    {
        return $this->author;
    }

    public function addAuthor(User $author): static
    {
        if (!$this->author->contains($author)) {
            $this->author->add($author);
            $author->setComment($this);
        }

        return $this;
    }

    public function removeAuthor(User $author): static
    {
        if ($this->author->removeElement($author)) {
            // set the owning side to null (unless already changed)
            if ($author->getComment() === $this) {
                $author->setComment(null);
            }
        }

        return $this;
    }
}