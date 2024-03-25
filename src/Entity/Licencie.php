<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LicencieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LicencieRepository::class)]
#[ApiResource]
class Licencie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numlicence = null;

    #[ORM\Column(length: 70)]
    private ?string $nom = null;

    #[ORM\Column(length: 70)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $adresse2 = null;

    #[ORM\Column(length: 6)]
    private ?string $cp = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 14)]
    private ?string $tel = null;

    #[ORM\Column(length: 100)]
    private ?string $mail = null;

    #[ORM\Column(length: 100)]
    private ?string $dateadhesion = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: 'idclub', nullable: false)]
    private ?club $idclub = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(name: "idqualite", nullable: false)]
    private ?qualite $idqualite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumlicence(): ?int
    {
        return $this->numlicence;
    }

    public function setNumlicence(int $numlicence): static
    {
        $this->numlicence = $numlicence;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse1(): ?string
    {
        return $this->adresse1;
    }

    public function setAdresse1(string $adresse1): static
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    public function getAdresse2(): ?string
    {
        return $this->adresse2;
    }

    public function setAdresse2(?string $adresse2): static
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(string $cp): static
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): static
    {
        $this->tel = $tel;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateadhesion(): ?string
    {
        return $this->dateadhesion;
    }

    public function setDateadhesion(string $dateadhesion): static
    {
        $this->dateadhesion = $dateadhesion;

        return $this;
    }

    public function getIdclub(): ?club
    {
        return $this->idclub;
    }

    public function setIdclub(?club $idclub): static
    {
        $this->idclub = $idclub;

        return $this;
    }

    public function getIdqualite(): ?qualite
    {
        return $this->idqualite;
    }

    public function setIdqualite(?qualite $idqualite): static
    {
        $this->idqualite = $idqualite;

        return $this;
    }
}
