<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $namepost = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptionpost = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datapost = null;

    #[ORM\Column]
    private ?int $countsee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamepost(): ?string
    {
        return $this->namepost;
    }

    public function setNamepost(string $namepost): self
    {
        $this->namepost = $namepost;

        return $this;
    }

    public function getDescriptionpost(): ?string
    {
        return $this->descriptionpost;
    }

    public function setDescriptionpost(string $descriptionpost): self
    {
        $this->descriptionpost = $descriptionpost;

        return $this;
    }

    public function getDatapost(): ?\DateTimeInterface
    {
        return $this->datapost;
    }

    public function setDatapost(\DateTimeInterface $datapost): self
    {
        $this->datapost = $datapost;

        return $this;
    }

    public function getCountsee(): ?int
    {
        return $this->countsee;
    }

    public function setCountsee(int $countsee): self
    {
        $this->countsee = $countsee;

        return $this;
    }
}
