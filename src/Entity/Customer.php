<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomerRepository::class)
 */
class Customer
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
    private $customer_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_lastname;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $customer_birthdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $customer_address;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $customer_postalCode;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $customer_city;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerName(): ?string
    {
        return $this->customer_name;
    }

    public function setCustomerName(string $customer_name): self
    {
        $this->customer_name = $customer_name;

        return $this;
    }

    public function getCustomerLastname(): ?string
    {
        return $this->customer_lastname;
    }

    public function setCustomerLastname(string $customer_lastname): self
    {
        $this->customer_lastname = $customer_lastname;

        return $this;
    }

    public function getCustomerBirthdate(): ?\DateTimeInterface
    {
        return $this->customer_birthdate;
    }

    public function setCustomerBirthdate(?\DateTimeInterface $customer_birthdate): self
    {
        $this->customer_birthdate = $customer_birthdate;

        return $this;
    }

    public function getCustomerEmail(): ?string
    {
        return $this->customer_email;
    }

    public function setCustomerEmail(string $customer_email): self
    {
        $this->customer_email = $customer_email;

        return $this;
    }

    public function getCustomerPassword(): ?string
    {
        return $this->customer_password;
    }

    public function setCustomerPassword(string $customer_password): self
    {
        $this->customer_password = $customer_password;

        return $this;
    }

    public function getCustomerAddress(): ?string
    {
        return $this->customer_address;
    }

    public function setCustomerAddress(string $customer_address): self
    {
        $this->customer_address = $customer_address;

        return $this;
    }

    public function getCustomerPostalCode(): ?string
    {
        return $this->customer_postalCode;
    }

    public function setCustomerPostalCode(string $customer_postalCode): self
    {
        $this->customer_postalCode = $customer_postalCode;

        return $this;
    }

    public function getCustomerCity(): ?string
    {
        return $this->customer_city;
    }

    public function setCustomerCity(string $customer_city): self
    {
        $this->customer_city = $customer_city;

        return $this;
    }
}
