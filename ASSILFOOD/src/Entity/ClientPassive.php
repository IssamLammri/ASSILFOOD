<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientPassive
 *
 * @ORM\Table(name="client_passive")
 * @ORM\Entity
 */
class ClientPassive
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Client_Passive", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClientPassive;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="N_Telephone", type="integer", nullable=false)
     */
    private $nTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    public function getIdClientPassive(): ?int
    {
        return $this->idClientPassive;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNTelephone(): ?int
    {
        return $this->nTelephone;
    }

    public function setNTelephone(int $nTelephone): self
    {
        $this->nTelephone = $nTelephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }


}
