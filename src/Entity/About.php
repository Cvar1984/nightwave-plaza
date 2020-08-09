<?php

namespace App\Entity;

use App\Repository\AboutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AboutRepository::class)
 */
class About
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorEmail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorPhone;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authorAddress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    public function setAuthorName(string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    public function getAuthorEmail(): ?string
    {
        return $this->authorEmail;
    }

    public function setAuthorEmail(string $authorEmail): self
    {
        $this->authorEmail = $authorEmail;

        return $this;
    }

    public function getAuthorPhone(): ?string
    {
        return $this->authorPhone;
    }

    public function setAuthorPhone(string $authorPhone): self
    {
        $this->authorPhone = $authorPhone;

        return $this;
    }

    public function getAuthorAddress(): ?string
    {
        return $this->authorAddress;
    }

    public function setAuthorAddress(string $authorAddress): self
    {
        $this->authorAddress = $authorAddress;

        return $this;
    }
}
