<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor
 *
 * @ORM\Table(name="Sensor")
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
   * @ORM\Column(type="integer")
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Sensor
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Sensor
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Sensor
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
