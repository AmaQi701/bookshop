<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BookRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=BookRepository::class)
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $kitob;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKitob(): ?string
    {
        return $this->kitob;
    }

    public function setKitob(string $kitob): self
    {
        $this->kitob = $kitob;

        return $this;
    }
}
