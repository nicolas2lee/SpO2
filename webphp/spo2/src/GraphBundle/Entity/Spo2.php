<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spo2
 *
 * @ORM\Table(name="spo2")
 * @ORM\Entity(repositoryClass="GraphBundle\Repository\Spo2Repository")
 */
class Spo2
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

		/**
    * @ORM\Column(type="double")
    */
		private $oxygenrate;

		/**
    * @ORM\Column(type="string", length=100)
    */
		private $datetime;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

