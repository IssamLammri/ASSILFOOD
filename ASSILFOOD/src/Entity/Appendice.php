<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Appendice
 *
 * @ORM\Table(name="appendice")
 * @ORM\Entity
 */
class Appendice
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Appendice", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAppendice;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Appendice", type="string", length=30, nullable=false)
     */
    private $nomAppendice;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix_Achat", type="integer", nullable=false)
     */
    private $prixAchat;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plat", mappedBy="idAppendice")
     */
    private $idPlat;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPlat = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdAppendice(): ?int
    {
        return $this->idAppendice;
    }

    public function getNomAppendice(): ?string
    {
        return $this->nomAppendice;
    }

    public function setNomAppendice(string $nomAppendice): self
    {
        $this->nomAppendice = $nomAppendice;

        return $this;
    }

    public function getPrixAchat(): ?int
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(int $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * @return Collection|Plat[]
     */
    public function getIdPlat(): Collection
    {
        return $this->idPlat;
    }

    public function addIdPlat(Plat $idPlat): self
    {
        if (!$this->idPlat->contains($idPlat)) {
            $this->idPlat[] = $idPlat;
            $idPlat->addIdAppendice($this);
        }

        return $this;
    }

    public function removeIdPlat(Plat $idPlat): self
    {
        if ($this->idPlat->contains($idPlat)) {
            $this->idPlat->removeElement($idPlat);
            $idPlat->removeIdAppendice($this);
        }

        return $this;
    }

}
