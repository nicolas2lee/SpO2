<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="AccountBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


		/**
     * @ORM\OneToMany(targetEntity="GraphBundle\Entity\Sensor", mappedBy="user")
     */
		protected $sensors;
	

    public function getId()
    {
        return $this->id;
    }

		public function __construct()
    {
        parent::__construct();
        // your own logic
    }

		





    /**
     * Add sensor
     *
     * @param \GraphBundle\Entity\Sensor $sensor
     *
     * @return Fos_user
     */
    public function addSensor(\GraphBundle\Entity\Sensor $sensor)
    {
        $this->sensors[] = $sensor;

        return $this;
    }

    /**
     * Remove sensor
     *
     * @param \GraphBundle\Entity\Sensor $sensor
     */
    public function removeSensor(\GraphBundle\Entity\Sensor $sensor)
    {
        $this->sensors->removeElement($sensor);
    }

    /**
     * Get sensors
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSensors()
    {
        return $this->sensors;
    }
}
