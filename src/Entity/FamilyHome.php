<?php

namespace App\Entity;

use App\Repository\FamilyHomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FamilyHomeRepository::class)
 */
class FamilyHome
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $familyHome_person1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyHome_person2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $familyHome_person3;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFamilyHomePerson1(): ?string
    {
        return $this->familyHome_person1;
    }

    public function setFamilyHomePerson1(?string $familyHome_person1): self
    {
        $this->familyHome_person1 = $familyHome_person1;

        return $this;
    }

    public function getFamilyHomePerson2(): ?string
    {
        return $this->familyHome_person2;
    }

    public function setFamilyHomePerson2(?string $familyHome_person2): self
    {
        $this->familyHome_person2 = $familyHome_person2;

        return $this;
    }

    public function getFamilyHomePerson3(): ?string
    {
        return $this->familyHome_person3;
    }

    public function setFamilyHomePerson3(?string $familyHome_person3): self
    {
        $this->familyHome_person3 = $familyHome_person3;

        return $this;
    }
}
