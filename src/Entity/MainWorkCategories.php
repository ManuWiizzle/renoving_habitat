<?php

namespace App\Entity;

class MainWorkCategories
{

    private $roofing;

    private $isolation;

    private $interior;

    private $facade;

    private $carpentry;

    private $earthwork;

    public function getRoofing(): ?bool
    {
        return $this->roofing;
    }

    public function setRoofing(?bool $roofing): self
    {
        $this->roofing = $roofing;

        return $this;
    }

    public function getIsolation(): ?bool
    {
        return $this->isolation;
    }

    public function setIsolation(?bool $isolation): self
    {
        $this->isolation = $isolation;

        return $this;
    }

    public function getInterior(): ?bool
    {
        return $this->interior;
    }

    public function setInterior(?bool $interior): self
    {
        $this->interior = $interior;

        return $this;
    }

    public function getFacade(): ?bool
    {
        return $this->facade;
    }

    public function setFacade(?bool $facade): self
    {
        $this->facade = $facade;

        return $this;
    }

    public function getCarpentry(): ?bool
    {
        return $this->carpentry;
    }

    public function setCarpentry(?bool $carpentry): self
    {
        $this->carpentry = $carpentry;

        return $this;
    }

    public function getEarthwork(): ?bool
    {
        return $this->earthwork;
    }

    public function setEarthwork(?bool $earthwork): self
    {
        $this->earthwork = $earthwork;

        return $this;
    }
}
