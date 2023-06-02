<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $_title;

    /**
     * @ORM\Column(type="text")
     */
    private $_content;

    /**
     * @ORM\Column(type="date")
     */
    private $_date;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->_title;
    }

    public function setTitle(string $_title): self
    {
        $this->_title = $_title;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->_content;
    }

    public function setContent(string $_content): self
    {
        $this->_content = $_content;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->_date;
    }

    public function setDate(\DateTimeInterface $_date): self
    {
        $this->_date = $_date;

        return $this;
    }
}
