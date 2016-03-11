<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\OneToMany(targetEntity="Document", mappedBy="sensor")
     */
		protected $documents;

		/**
     * @ORM\OneToMany(targetEntity="Movement", mappedBy="sensor")
     */
		protected $movements;

		/**
     * @ORM\OneToMany(targetEntity="Spo2", mappedBy="sensor")
     */
		protected $spo2s;
		

		/**
     * @ORM\ManyToOne(targetEntity="AccountBundle\Entity\User", inversedBy="sensors")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
		protected $user;


		public function __construct()
    {
        $this->documents = new ArrayCollection();
    }
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
     * Add document
     *
     * @param \GraphBundle\Entity\Document $document
     *
     * @return Sensor
     */
    public function addDocument(\GraphBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \GraphBundle\Entity\Document $document
     */
    public function removeDocument(\GraphBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Add movement
     *
     * @param \GraphBundle\Entity\Movement $movement
     *
     * @return Sensor
     */
    public function addMovement(\GraphBundle\Entity\Movement $movement)
    {
        $this->movements[] = $movement;

        return $this;
    }

    /**
     * Remove movement
     *
     * @param \GraphBundle\Entity\Movement $movement
     */
    public function removeMovement(\GraphBundle\Entity\Movement $movement)
    {
        $this->movements->removeElement($movement);
    }

    /**
     * Get movements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMovements()
    {
        return $this->movements;
    }

    /**
     * Add spo2
     *
     * @param \GraphBundle\Entity\Spo2 $spo2
     *
     * @return Sensor
     */
    public function addSpo2(\GraphBundle\Entity\Spo2 $spo2)
    {
        $this->spo2s[] = $spo2;

        return $this;
    }

    /**
     * Remove spo2
     *
     * @param \GraphBundle\Entity\Spo2 $spo2
     */
    public function removeSpo2(\GraphBundle\Entity\Spo2 $spo2)
    {
        $this->spo2s->removeElement($spo2);
    }

    /**
     * Get spo2s
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpo2s()
    {
        return $this->spo2s;
    }



    /**
     * Set user
     *
     * @param \AccountBundle\Entity\User $user
     *
     * @return Sensor
     */
    public function setUser(\AccountBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AccountBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
