<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TableARepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Table(
 *     name="TABLE_A"
 * )
 * @ORM\Entity(repositoryClass=TableARepository::class)
 */
class TableA
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="APK1")
     */
    public $apk1;

    /**
     * @ORM\Id
     * @ORM\Column(type="datetime", name="APK2")
     */
    public $apk2;

    /**
     * @ORM\Column(type="string", name="FIELD1")
     */
    public $field1;

    /**
     * @ORM\Column(type="string", name="FIELD2")
     */
    public $field2;
}
