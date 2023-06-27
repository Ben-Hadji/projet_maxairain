<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $max = null;

    #[ORM\Column]
    private ?int $utiliser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(int $max): static
    {
        $this->max = $max;

        return $this;
    }

    public function getUtiliser(): ?int
    {
        return $this->utiliser;
    }

    public function setUtiliser(int $utiliser): static
    {
        $this->utiliser = $utiliser;

        return $this;
    }
}
