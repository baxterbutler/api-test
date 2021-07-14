<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV4;

/**
 * @ApiResource
 * @ORM\Entity
 */
class BucketType {
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Symfony\Bridge\Doctrine\IdGenerator\UuidV4Generator")
     * @ORM\Column(type="uuid", unique=true)
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    public string $name;

    /**
     * @var
     * @ORM\Column(type="string")
     */
    public string $description;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    public DateTime $updatedAt;

    /**
     * @var DateTime
     * @ORM\Column(type="datetime")
     */
    public DateTime $createdAt;

    public function getId(): ?UuidV4
    {
        return $this->id;
    }
}