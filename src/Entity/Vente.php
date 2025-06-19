<?php

namespace App\Entity;

use App\Repository\VenteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VenteRepository::class)]
class Vente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Vente = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVente(): ?string
    {
        return $this->Vente;
    }

    public function setVente(string $Vente): static
    {
        $this->Vente = $Vente;

        return $this;
    }
}
