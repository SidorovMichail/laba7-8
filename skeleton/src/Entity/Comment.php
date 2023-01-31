<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $textcomment = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datecomment = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextcomment(): ?string
    {
        return $this->textcomment;
    }

    public function setTextcomment(string $textcomment): self
    {
        $this->textcomment = $textcomment;

        return $this;
    }

    public function getDatecomment(): ?\DateTimeInterface
    {
        return $this->datecomment;
    }

    public function setDatecomment(\DateTimeInterface $datecomment): self
    {
        $this->datecomment = $datecomment;

        return $this;
    }
}
