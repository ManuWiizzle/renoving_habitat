<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class FinalSite
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="finalSite_image", fileNameProperty="imageName")
     *
     * @var File
     * @Assert\File(
     *     mimeTypes={ "image/jpg", "image/png", "image/jpeg", "image/gif" },
     *     maxSize="8M",
     *     mimeTypesMessage="Veuillez choisir un fichier de type .jpg, .jpeg, .png ou .gif",
     *     maxSizeMessage="Veuillez choisir un fichier de 7.9Mo maximum"
     *  )
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(max = 255, maxMessage="Veuillez limiter ce champs à 255 caractères")
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Site", mappedBy="finalSite", cascade={"persist", "remove"})
     */
    private $site;

    /**
     * @param File|UploadedFile $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;
        $newFinalSite = $site === null ? null : $this;
        if ($newFinalSite !== $site->getFinalSite()) {
            $site->setFinalSite($newFinalSite);
        }

        return $this;
    }
    public function __toString()
    {
        return $this->getImageName();
    }
}
