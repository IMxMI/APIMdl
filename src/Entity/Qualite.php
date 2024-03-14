<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\QualiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QualiteRepository::class)]
#[ApiResource]
class Qualite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $libellequalite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibellequalite(): ?string
    {
        return $this->libellequalite;
    }

    public function setLibellequalite(string $libellequalite): static
    {
        $this->libellequalite = $libellequalite;

        return $this;
    }
}
