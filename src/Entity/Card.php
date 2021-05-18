<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
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
     * @ORM\ManyToMany(targetEntity=Color::class, inversedBy="cards")
     */
    private $color;

    /**
     * @ORM\ManyToOne(targetEntity=CollectionCard::class, inversedBy="cards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $collection;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="cards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $type_line;

    public function __construct()
    {
        $this->color = new ArrayCollection();
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

    /**
     * @return Collection|Color[]
     */
    public function getColor(): Collection
    {
        return $this->color;
    }

    public function addColor(Color $color): self
    {
        if (!$this->color->contains($color)) {
            $this->color[] = $color;
        }

        return $this;
    }

    public function removeColor(Color $color): self
    {
        $this->color->removeElement($color);

        return $this;
    }

    public function getCollection(): ?Collection
    {
        return $this->collection;
    }

    public function setCollection(?Collection $collection): self
    {
        $this->collection = $collection;

        return $this;
    }

    public function getTypeLine(): ?Type
    {
        return $this->type_line;
    }

    public function setTypeLine(?Type $type_line): self
    {
        $this->type_line = $type_line;

        return $this;
    }

}