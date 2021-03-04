<?php

namespace App\Entity;

use App\Repository\VerfahrenRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=VerfahrenRepository::class)
 */
class Verfahren
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $nummer;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $art;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Anschrift;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stadt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $plz;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $ziel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $auszug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $auslage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $karte;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lng;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Dienstsitz::class, inversedBy="verfahrens")
     */
    private $dienstsitz;

    /**
     * @ORM\Column(type="text")
     */
    private $inhalt;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="verfahren")
     */
    private $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNummer(): ?int
    {
        return $this->nummer;
    }

    public function setNummer(int $nummer): self
    {
        $this->nummer = $nummer;

        return $this;
    }

    public function getArt(): ?string
    {
        return $this->art;
    }

    public function setArt(string $art): self
    {
        $this->art = $art;

        return $this;
    }

    public function getAnschrift(): ?string
    {
        return $this->Anschrift;
    }

    public function setAnschrift(string $Anschrift): self
    {
        $this->Anschrift = $Anschrift;

        return $this;
    }

    public function getStadt(): ?string
    {
        return $this->stadt;
    }

    public function setStadt(string $stadt): self
    {
        $this->stadt = $stadt;

        return $this;
    }

    public function getPlz(): ?string
    {
        return $this->plz;
    }

    public function setPlz(string $plz): self
    {
        $this->plz = $plz;

        return $this;
    }

    public function getZiel(): ?string
    {
        return $this->ziel;
    }

    public function setZiel(?string $ziel): self
    {
        $this->ziel = $ziel;

        return $this;
    }

    public function getAuszug(): ?string
    {
        return $this->auszug;
    }

    public function setAuszug(string $auszug): self
    {
        $this->auszug = $auszug;

        return $this;
    }

    public function getAuslage(): ?string
    {
        return $this->auslage;
    }

    public function setAuslage(?string $auslage): self
    {
        $this->auslage = $auslage;

        return $this;
    }

    public function getKarte(): ?string
    {
        return $this->karte;
    }

    public function setKarte(?string $karte): self
    {
        $this->karte = $karte;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLng(): ?float
    {
        return $this->lng;
    }

    public function setLng(?float $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDienstsitz(): ?Dienstsitz
    {
        return $this->dienstsitz;
    }

    public function setDienstsitz(?Dienstsitz $dienstsitz): self
    {
        $this->dienstsitz = $dienstsitz;

        return $this;
    }

    public function getInhalt(): ?string
    {
        return $this->inhalt;
    }

    public function setInhalt(string $inhalt): self
    {
        $this->inhalt = $inhalt;

        return $this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setVerfahren($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getVerfahren() === $this) {
                $comment->setVerfahren(null);
            }
        }

        return $this;
    }
}
