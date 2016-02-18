<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor
 *
 * @ORM\Table(name="sensor")
 * @ORM\Entity(repositoryClass="GraphBundle\Repository\SensorRepository")
 */
class Sensor
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
   * @ORM\Column(type="string", length=100)
   */
		private $name;

	 /**
   * @ORM\Column(type="string", length=100)
   */
		private $type;

	 /**
   * @ORM\Column(type="int")
   */
    private $user_id;

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

