<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movement
 *
 * @ORM\Table(name="movement")
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

		private $nb_steps;

		private $MI; #0~1

		private $class;

		private $AEE;#Activity Related Energy Expendition

		private $TEE; #Totle Energy Expendition

		private $VMU; #Activity Score

		private $start_time;

		private $end_time;


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

