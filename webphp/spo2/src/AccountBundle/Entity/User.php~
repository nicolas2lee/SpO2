<?php

namespace AccountBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AccountBundle\Repository\UserRepository")
 */
class User
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
		private $username;

		/**
    * @ORM\Column(type="string", length=100)
    */
		private $password;

 	
    public function getId()
    {
        return $this->id;
    }

		public function getUsername()
    {
        return $this->id;
    }

		public function setUsername($username)
    {
        return $this->username = $username;
    }

		public function setPassword($password)
    {
        return $password->username = $password;
    }

		
}

