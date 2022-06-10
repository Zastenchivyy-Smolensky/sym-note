<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 
 * 
 * @ORM\Table(name="unsei")
 * 
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UnseiRepository")
 */
class Unsei
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }
}
