<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\UuidV4;

/**
 * @ApiResource
 * @ORM\Entity
 */
class BucketList
{
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
     * @var BucketType
     * @ORM\ManyToMany(targetEntity="BucketType", inversedBy="BucketList", cascade={"persist"})
     * @ORM\JoinTable(name="pool_tag",
     *     joinColumns={@ORM\JoinColumn(name="bucketlist_id", referencedColumnName="id")
     * },
     *     joinColumns={
     * @ORM\JoinColumn(name="bucketype_id", referencedColumnName="id")
     * }
     *     ),
     */
    public $bucketType;

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

    public function __construct() {
        $this->bucketType = new ArrayCollection();
    }
}