<?php

namespace App\Entity;

class EarthWork
{

    private $disabledConcrete;

    private $concreteSlab;

    private $floorTiles;

    public function getDisabledConcrete(): ?bool
    {
        return $this->disabledConcrete;
    }

    public function setDisabledConcrete(?bool $disabledConcrete): self
    {
        $this->disabledConcrete = $disabledConcrete;

        return $this;
    }

    public function getConcreteSlab(): ?bool
    {
        return $this->concreteSlab;
    }

    public function setConcreteSlab(?bool $concreteSlab): self
    {
        $this->concreteSlab = $concreteSlab;

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
