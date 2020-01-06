<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table(name="plat", indexes={@ORM\Index(name="ID_Repas", columns={"ID_Repas"})})
 * @ORM\Entity
 */
class Plat
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Plat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlat;

    /**
     * @var \Reaps
     *
     * @ORM\ManyToOne(targetEntity="Reaps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Repas", referencedColumnName="ID_Repas")
     * })
     */
    private $idRepas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Appendice", inversedBy="idPlat")
     * @ORM\JoinTable(name="extensions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ID_Plat", referencedColumnName="ID_Plat")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ID_Appendice", referencedColumnName="ID_Appendice")
     *   }
     * )
     */
    private $idAppendice;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idAppendice = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdPlat(): ?int
    {
        return $this->idPlat;
    }

    public function getIdRepas(): ?Reaps
    {
        return $this->idRepas;
    }

    public function setIdRepas(?Reaps $idRepas): self
    {
        $this->idRepas = $idRepas;

        return $this;
    }

    /**
     * @return Collection|Appendice[]
     */
    public function getIdAppendice(): Collection
    {
        return $this->idAppendice;
    }

    public function addIdAppendice(Appendice $idAppendice): self
    {
        if (!$this->idAppendice->contains($idAppendice)) {
            $this->idAppendice[] = $idAppendice;
        }

        return $this;
    }

    public function removeIdAppendice(Appendice $idAppendice): self
    {
        if ($this->idAppendice->contains($idAppendice)) {
            $this->idAppendice->removeElement($idAppendice);
        }

        return $this;
    }

}
