<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * Message="Bitte füllen Sie dieses Feld aus"
     */
    private $toeb;

    /**
     * @ORM\Column(type="text")
     */
    private $einwendung;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Verfahren::class, inversedBy="comments")
     */
    private $verfahren;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToeb(): ?string
    {
        return $this->toeb;
    }

    public function setToeb(string $toeb): self
    {
        $this->toeb = $toeb;

        return $this;
    }

    public function getEinwendung(): ?string
    {
        return $this->einwendung;
    }

    public function setEinwendung(string $einwendung): self
    {
        $this->einwendung = $einwendung;

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

    public function getVerfahren(): ?Verfahren
    {
        return $this->verfahren;
    }

    public function setVerfahren(?Verfahren $verfahren): self
    {
        $this->verfahren = $verfahren;

        return $this;
    }
}
