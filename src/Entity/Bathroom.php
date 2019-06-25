<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BathroomRepository")
 */
class Bathroom
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $italianShower;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $showerCabin;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $earthenware;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $floorTiles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItalianShower(): ?bool
    {
        return $this->italianShower;
    }

    public function setItalianShower(?bool $italianShower): self
    {
        $this->italianShower = $italianShower;

        return $this;
    }

    public function getShowerCabin(): ?bool
    {
        return $this->showerCabin;
    }

    public function setShowerCabin(?bool $showerCabin): self
    {
        $this->showerCabin = $showerCabin;

        return $this;
    }

    public function getEarthenware(): ?bool
    {
        return $this->earthenware;
    }

    public function setEarthenware(?bool $earthenware): self
    {
        $this->earthenware = $earthenware;

        return $this;
    }

    public function getFloorTiles(): ?bool
    {
        return $this->floorTiles;
    }

    public function setFloorTiles(?bool $floorTiles): self
    {
        $this->floorTiles = $floorTiles;

        return $this;
    }
}
