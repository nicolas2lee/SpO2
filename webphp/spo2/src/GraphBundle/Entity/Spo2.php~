<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Spo2
 *
 * @ORM\Table(name="Spo2")
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
    * @ORM\Column(type="string")
    */
		private $saturation;

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

    /**
     * Set saturation
     *
     * @param string $saturation
     *
     * @return Spo2
     */
    public function setSaturation($saturation)
    {
        $this->saturation = $saturation;

        return $this;
    }

    /**
     * Get saturation
     *
     * @return string
     */
    public function getSaturation()
    {
        return $this->saturation;
    }

    /**
     * Set datetime
     *
     * @param string $datetime
     *
     * @return Spo2
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
}
