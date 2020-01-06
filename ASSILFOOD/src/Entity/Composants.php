<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Composants
 *
 * @ORM\Table(name="composants")
 * @ORM\Entity
 */
class Composants
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Composants", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idComposants;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Composants", type="string", length=30, nullable=false)
     */
    private $nomComposants;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reaps", mappedBy="idComposants")
     */
    private $idRepas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idRepas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdComposants(): ?int
    {
        return $this->idComposants;
    }

    public function getNomComposants(): ?string
    {
        return $this->nomComposants;
    }

    public function setNomComposants(string $nomComposants): self
    {
        $this->nomComposants = $nomComposants;

        return $this;
    }

    /**
     * @return Collection|Reaps[]
     */
    public function getIdRepas(): Collection
    {
        return $this->idRepas;
    }

    public function addIdRepa(Reaps $idRepa): self
    {
        if (!$this->idRepas->contains($idRepa)) {
            $this->idRepas[] = $idRepa;
            $idRepa->addIdComposant($this);
        }

        return $this;
    }

    public function removeIdRepa(Reaps $idRepa): self
    {
        if ($this->idRepas->contains($idRepa)) {
            $this->idRepas->removeElement($idRepa);
            $idRepa->removeIdComposant($this);
        }

        return $this;
    }

}
