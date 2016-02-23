<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Measurement
 *
 * @ORM\Table(name="Measurement")
 * @ORM\Entity(repositoryClass="GraphBundle\Repository\MeasurementRepository")
 */
class Measurement
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
		private $tbegin;

		/**
    * @ORM\Column(type="string")
    */
		private $tend;

		/**
    * @ORM\Column(type="integer")
    */
		private $sensor_id;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tbegin
     *
     * @param string $tbegin
     *
     * @return Measurement
     */
    public function setTbegin($tbegin)
    {
        $this->tbegin = $tbegin;

        return $this;
    }

    /**
     * Get tbegin
     *
     * @return string
     */
    public function getTbegin()
    {
        return $this->tbegin;
    }

    /**
     * Set tend
     *
     * @param string $tend
     *
     * @return Measurement
     */
    public function setTend($tend)
    {
        $this->tend = $tend;

        return $this;
    }

    /**
     * Get tend
     *
     * @return string
     */
    public function getTend()
    {
        return $this->tend;
    }

    /**
     * Set sensorId
     *
     * @param integer $sensorId
     *
     * @return Measurement
     */
    public function setSensorId($sensorId)
    {
        $this->sensor_id = $sensorId;

        return $this;
    }

    /**
     * Get sensorId
     *
     * @return integer
     */
    public function getSensorId()
    {
        return $this->sensor_id;
    }
}
