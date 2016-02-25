<?php

namespace GraphBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Chart controller.
 *
 * @Route("/chart")
 */
class ChartController extends Controller
{
		/**
     *
     * @Route("/", name="chart")
     * @Method("GET")
     */
    public function indexAction()
    {

				return $this->render('chart/index.html.twig');
    }

}
