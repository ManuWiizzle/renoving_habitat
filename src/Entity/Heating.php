<?php

namespace App\Entity;

class Heating
{

    private $totalReplacement;

    private $maintain;

    private $reparation;

    private $heatingType;

    public function getTotalReplacement(): ?bool
    {
        return $this->totalReplacement;
    }

    public function setTotalReplacement(?bool $totalReplacement): self
    {
        $this->totalReplacement = $totalReplacement;

        return $this;
    }

    public function getMaintain(): ?bool
    {
        return $this->maintain;
    }

    public function setMaintain(?bool $maintain): self
    {
        $this->maintain = $maintain;

        return $this;
    }

    public function getReparation(): ?bool
    {
        return $this->reparation;
    }

    public function setReparation(?bool $reparation): self
    {
        $this->reparation = $reparation;

        return $this;
    }

    public function getHeatingType(): ?string
    {
        return $this->heatingType;
    }

    public function setHeatingType(?string $heatingType): self
    {
        $this->heatingType = $heatingType;

        return $this;
    }
}
