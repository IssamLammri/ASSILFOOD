<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reaps
 *
 * @ORM\Table(name="reaps")
 * @ORM\Entity
 */
class Reaps
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Repas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRepas;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Repas", type="string", length=50, nullable=false)
     */
    private $nomRepas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Composants", inversedBy="idRepas")
     * @ORM\JoinTable(name="composants_repas",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_Repas", referencedColumnName="ID_Repas")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_Composants", referencedColumnName="ID_Composants")
     *   }
     * )
     */
    private $idComposants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idComposants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdRepas(): ?int
    {
        return $this->idRepas;
    }

    public function getNomRepas(): ?string
    {
        return $this->nomRepas;
    }

    public function setNomRepas(string $nomRepas): self
    {
        $this->nomRepas = $nomRepas;

        return $this;
    }

    /**
     * @return Collection|Composants[]
     */
    public function getIdComposants(): Collection
    {
        return $this->idComposants;
    }

    public function addIdComposant(Composants $idComposant): self
    {
        if (!$this->idComposants->contains($idComposant)) {
            $this->idComposants[] = $idComposant;
        }

        return $this;
    }

    public function removeIdComposant(Composants $idComposant): self
    {
        if ($this->idComposants->contains($idComposant)) {
            $this->idComposants->removeElement($idComposant);
        }

        return $this;
    }

}
