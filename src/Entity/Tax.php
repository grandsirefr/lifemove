<?php

namespace App\Entity;

use App\Repository\TaxRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaxRepository::class)
 */
class Tax
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tax_number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tax_password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tax_familyHomeNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaxNumber(): ?string
    {
        return $this->tax_number;
    }

    public function setTaxNumber(string $tax_number): self
    {
        $this->tax_number = $tax_number;

        return $this;
    }

    public function getTaxPassword(): ?string
    {
        return $this->tax_password;
    }

    public function setTaxPassword(string $tax_password): self
    {
        $this->tax_password = $tax_password;

        return $this;
    }

    public function getTaxFamilyHomeNumber(): ?string
    {
        return $this->tax_familyHomeNumber;
    }

    public function setTaxFamilyHomeNumber(?string $tax_familyHomeNumber): self
    {
        $this->tax_familyHomeNumber = $tax_familyHomeNumber;

        return $this;
    }
}
