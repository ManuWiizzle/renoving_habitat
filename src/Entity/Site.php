<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
/**
 * @Vich\Uploadable
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\SiteRepository")
 */
class Site
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     * @Assert\Length(max = 60, maxMessage="Veuillez limiter ce champs à 60 caractères")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(max = 255, maxMessage="Veuillez limiter ce champs à 255 caractères")
     */
    private $place;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\BeginSite", inversedBy="site", cascade={"persist", "remove"})
     */
    private $beginSite;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FinalSite", inversedBy="site", cascade={"persist", "remove"})
     */
    private $finalSite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(?string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getBeginSite(): ?BeginSite
    {
        return $this->beginSite;
    }

    public function setBeginSite(?BeginSite $beginSite): self
    {
        $this->beginSite = $beginSite;

        return $this;
    }

    public function getFinalSite(): ?FinalSite
    {
        return $this->finalSite;
    }

    public function setFinalSite(?FinalSite $finalSite): self
    {
        $this->finalSite = $finalSite;

        return $this;
    }
}
