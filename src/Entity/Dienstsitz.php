<?php

namespace App\Entity;

use App\Repository\DienstsitzRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DienstsitzRepository::class)
 */
class Dienstsitz
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ort;

    /**
     * @ORM\OneToMany(targetEntity=Verfahren::class, mappedBy="dienstsitz")
     */
    private $verfahrens;

    public function __construct()
    {
        $this->verfahrens = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrt(): ?string
    {
        return $this->ort;
    }

    public function setOrt(string $ort): self
    {
        $this->ort = $ort;

        return $this;
    }

    /**
     * @return Collection|Verfahren[]
     */
    public function getVerfahrens(): Collection
    {
        return $this->verfahrens;
    }

    public function addVerfahren(Verfahren $verfahren): self
    {
        if (!$this->verfahrens->contains($verfahren)) {
            $this->verfahrens[] = $verfahren;
            $verfahren->setDienstsitz($this);
        }

        return $this;
    }

    public function removeVerfahren(Verfahren $verfahren): self
    {
        if ($this->verfahrens->removeElement($verfahren)) {
            // set the owning side to null (unless already changed)
            if ($verfahren->getDienstsitz() === $this) {
                $verfahren->setDienstsitz(null);
            }
        }

        return $this;
    }
}
