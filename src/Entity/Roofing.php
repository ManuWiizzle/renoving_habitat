<?php

namespace App\Entity;

class Roofing
{

    private $roofTiles;

    private $waterLeak;

    private $mosse;

    private $lastTreatment;

    public function getRoofTiles(): ?bool
    {
        return $this->roofTiles;
    }

    public function setRoofTiles(bool $roofTiles): self
    {
        $this->roofTiles = $roofTiles;

        return $this;
    }

    public function getWaterLeak(): ?bool
    {
        return $this->waterLeak;
    }

    public function setWaterLeak(?bool $waterLeak): self
    {
        $this->waterLeak = $waterLeak;

        return $this;
    }

    public function getMosse(): ?bool
    {
        return $this->mosse;
    }

    public function setMosse(?bool $mosse): self
    {
        $this->mosse = $mosse;

        return $this;
    }

    public function getLastTreatment(): ?string
    {
        return $this->lastTreatment;
    }

    public function setLastTreatment(?string $lastTreatment): self
    {
        $this->lastTreatment = $lastTreatment;

        return $this;
    }
}
