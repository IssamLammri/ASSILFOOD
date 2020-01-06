<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientActive
 *
 * @ORM\Table(name="client_active")
 * @ORM\Entity
 */
class ClientActive
{
    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="Numero_identitÃ©", type="integer", nullable=false)
     */
    private $numeroIdentitã©;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_identitÃ©", type="string", length=255, nullable=false)
     */
    private $typeIdentitã©;

    /**
     * @var \ClientPassive
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="ClientPassive")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client_Passive")
     * })
     */
    private $idClient;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNumeroIdentitã©(): ?int
    {
        return $this->numeroIdentitã©;
    }

    public function setNumeroIdentitã©(int $numeroIdentitã©): self
    {
        $this->numeroIdentitã© = $numeroIdentitã©;

        return $this;
    }

    public function getTypeIdentitã©(): ?string
    {
        return $this->typeIdentitã©;
    }

    public function setTypeIdentitã©(string $typeIdentitã©): self
    {
        $this->typeIdentitã© = $typeIdentitã©;

        return $this;
    }

    public function getIdClient(): ?ClientPassive
    {
        return $this->idClient;
    }

    public function setIdClient(?ClientPassive $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }


}
