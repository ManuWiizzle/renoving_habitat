<?php

namespace App\Entity;

class Bathroom
{

    private $italianShower;

    private $showerCabin;

    private $earthenware;

    private $floorTiles;

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
