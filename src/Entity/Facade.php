<?php

namespace App\Entity;

class Facade
{

    private $smear;

    private $peelingOff;

    private $humidification;

    private $cracksFrom;

    private $cracksSize;

    public function getSmear(): ?bool
    {
        return $this->smear;
    }

    public function setSmear(?bool $smear): self
    {
        $this->smear = $smear;

        return $this;
    }

    public function getPeelingOff(): ?bool
    {
        return $this->peelingOff;
    }

    public function setPeelingOff(?bool $peelingOff): self
    {
        $this->peelingOff = $peelingOff;

        return $this;
    }

    public function getHumidification(): ?bool
    {
        return $this->humidification;
    }

    public function setHumidification(?bool $humidification): self
    {
        $this->humidification = $humidification;

        return $this;
    }

    public function getCracksFrom(): ?string
    {
        return $this->cracksFrom;
    }

    public function setCracksFrom(?string $cracksFrom): self
    {
        $this->cracksFrom = $cracksFrom;

        return $this;
    }

    public function getCracksSize(): ?string
    {
        return $this->cracksSize;
    }

    public function setCracksSize(?string $cracksSize): self
    {
        $this->cracksSize = $cracksSize;

        return $this;
    }
}
