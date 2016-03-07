<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movement
 *
 * @ORM\Table(name="Movement")
 * @ORM\Entity(repositoryClass="GraphBundle\Repository\MovementRepository")
 */
class Movement
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
    * @ORM\Column(type="integer")
    */
		private $nbSteps;

		/**
    * @ORM\Column(type="string")
    */
		private $MI; #0~1

		/**
    * @ORM\Column(type="string")
    */
		private $class;

		/**
    * @ORM\Column(type="string")
    */
		private $AEE;#Activity Related Energy Expendition

		/**
    * @ORM\Column(type="string")
    */
		private $TEE; #Totle Energy Expendition

		/**
    * @ORM\Column(type="string")
    */
		private $MET; 

		/**
    * @ORM\Column(type="string")
    */
		private $VMU; #Activity Score

		/**
    * @ORM\Column(type="string")
    */
		private $tstart;

		/**
    * @ORM\Column(type="string")
    */
		private $duration;

		/**
     * @ORM\ManyToOne(targetEntity="Sensor", inversedBy="movements")
     * @ORM\JoinColumn(name="sensor_id", referencedColumnName="id")
     */
		protected $sensor;


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
     * Set nbSteps
     *
     * @param integer $nbSteps
     *
     * @return Movement
     */
    public function setNbSteps($nbSteps)
    {
        $this->nbSteps = $nbSteps;

        return $this;
    }

    /**
     * Get nbSteps
     *
     * @return integer
     */
    public function getNbSteps()
    {
        return $this->nbSteps;
    }

    /**
     * Set mI
     *
     * @param string $mI
     *
     * @return Movement
     */
    public function setMI($mI)
    {
        $this->MI = $mI;

        return $this;
    }

    /**
     * Get mI
     *
     * @return string
     */
    public function getMI()
    {
        return $this->MI;
    }

    /**
     * Set class
     *
     * @param string $class
     *
     * @return Movement
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set aEE
     *
     * @param string $aEE
     *
     * @return Movement
     */
    public function setAEE($aEE)
    {
        $this->AEE = $aEE;

        return $this;
    }

    /**
     * Get aEE
     *
     * @return string
     */
    public function getAEE()
    {
        return $this->AEE;
    }

    /**
     * Set tEE
     *
     * @param string $tEE
     *
     * @return Movement
     */
    public function setTEE($tEE)
    {
        $this->TEE = $tEE;

        return $this;
    }

    /**
     * Get tEE
     *
     * @return string
     */
    public function getTEE()
    {
        return $this->TEE;
    }

    /**
     * Set vMU
     *
     * @param string $vMU
     *
     * @return Movement
     */
    public function setVMU($vMU)
    {
        $this->VMU = $vMU;

        return $this;
    }

    /**
     * Get vMU
     *
     * @return string
     */
    public function getVMU()
    {
        return $this->VMU;
    }

    /**
     * Set tstart
     *
     * @param string $tstart
     *
     * @return Movement
     */
    public function setTstart($tstart)
    {
        $this->tstart = $tstart;

        return $this;
    }

    /**
     * Get tstart
     *
     * @return string
     */
    public function getTstart()
    {
        return $this->tstart;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Movement
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set mET
     *
     * @param string $mET
     *
     * @return Movement
     */
    public function setMET($mET)
    {
        $this->MET = $mET;

        return $this;
    }

    /**
     * Get mET
     *
     * @return string
     */
    public function getMET()
    {
        return $this->MET;
    }

    /**
     * Set sensor
     *
     * @param \GraphBundle\Entity\Sensor $sensor
     *
     * @return Movement
     */
    public function setSensor(\GraphBundle\Entity\Sensor $sensor = null)
    {
        $this->sensor = $sensor;

        return $this;
    }

    /**
     * Get sensor
     *
     * @return \GraphBundle\Entity\Sensor
     */
    public function getSensor()
    {
        return $this->sensor;
    }
}
