<?php

namespace AccountBundle\Controller;

use FOS\UserBundle\Controller\ProfileController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class ProfileController extends BaseController
{

		 
		public function showAction()
		{
				$user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

				$flag=false;
				$roles=$user->getRoles();
				foreach ($roles as $r){
						if ($r == 'ROLE_ADMIN'){
								$flag=true;						
						}
				}

			  $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

				if ($flag == true){
		        return $this->render('AccountBundle:Profile:adminshow.html.twig', array(
		            'user' => $user,
								'flag' => $flag,
								'users' => $users
		        ));
				}else{
						 return $this->render('AccountBundle:Profile:show.html.twig', array(
		            'user' => $user,
								'flag' => $flag
		        ));
				}
		}

	
		public function displayUserAction($user_id){
				$user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
				 return $this->render('AccountBundle:Profile:show.html.twig', array(
		            'user' => $user,
		        ));
		}
}
