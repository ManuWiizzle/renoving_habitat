<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class CvUpload
 * @package App\Entity
 */
class CvUpload
{

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *   pattern="/[0-9]{10}/"
     * )
     */
    private $telephone;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Email(
     *     message = "Votre email '{{ value }}' n'est pas une adresse valide.")
     */
    private $email;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=4)
     */
    private $streetNumber;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=100)
     */
    private $streetName;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=1, max=100)
     */
    private $city;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Regex(
     *   pattern="/[0-9]{5}/"
     * )
     */
    private $postCode;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $occupation;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=2, max=100)
     */
    private $area;

    /**
     * @Assert\NotBlank(message="Veuillez joindre votre CV en format PDF, WORD ODT, JPEG, ou PNG.")
     * @Assert\File(
     *     mimeTypes = { "application/pdf", "application/msword",
     *    "application/vnd.oasis.opendocument.text", "image/jpeg", "image/png" },
     *     mimeTypesMessage = "Votre piece jointe n'est pas un format valide.
     *     Veuillez utiliser un format PDF, WORD, ODT, JPEG, ou PNG."
     * )
     */
    private $cv;

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=5, max=1000)
     */
    private $message;

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    public function setStreetNumber(string $streetNumber): self
    {
        $this->streetNumber = $streetNumber;

        return $this;
    }

    public function getStreetName(): ?string
    {
        return $this->streetName;
    }

    public function setStreetName(string $streetName): self
    {
        $this->streetName = $streetName;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    public function getOccupation(): ?string
    {
        return $this->occupation;
    }

    public function setOccupation(string $occupation): self
    {
        $this->occupation = $occupation;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv)
    {
        $this->cv = $cv;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
