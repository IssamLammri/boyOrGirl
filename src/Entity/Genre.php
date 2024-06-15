<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Genre
{
    public const ALIAS_GIRL = 'girl';
    public const ALIAS_BOY = 'boy';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read_bounce', 'read_bounce_session_list'])]
    private int $id;


    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $genre = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Genre
    {
        $this->id = $id;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): Genre
    {
        $this->genre = $genre;

        return $this;
    }
}
