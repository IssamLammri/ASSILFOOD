<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="ID_Plat", columns={"ID_Plat"}), @ORM\Index(name="ID_Client", columns={"ID_Client"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Commande", type="date", nullable=false)
     */
    private $dateCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=255, nullable=false)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix_Total", type="integer", nullable=false)
     */
    private $prixTotal;

    /**
     * @var \ClientPassive
     *
     * @ORM\ManyToOne(targetEntity="ClientPassive")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client_Passive")
     * })
     */
    private $idClient;

    /**
     * @var \Plat
     *
     * @ORM\ManyToOne(targetEntity="Plat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Plat", referencedColumnName="ID_Plat")
     * })
     */
    private $idPlat;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixTotal(): ?int
    {
        return $this->prixTotal;
    }

    public function setPrixTotal(int $prixTotal): self
    {
        $this->prixTotal = $prixTotal;

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

    public function getIdPlat(): ?Plat
    {
        return $this->idPlat;
    }

    public function setIdPlat(?Plat $idPlat): self
    {
        $this->idPlat = $idPlat;

        return $this;
    }


}
