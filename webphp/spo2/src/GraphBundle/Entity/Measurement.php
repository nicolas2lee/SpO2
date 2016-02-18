<?php

namespace GraphBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Measurement
 *
 * @ORM\Table(name="measurement")
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

		private $tbegin;

		private $tend;

		private $sensor_id;

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

