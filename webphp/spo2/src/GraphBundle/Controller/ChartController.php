<?php

namespace GraphBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use GraphBundle\Entity\Sensor;

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

		/**
     *
     * @Route("/{sensor_id}/movegraph", name="mchart")
     * @Method("GET")
     */
    public function moveAction($sensor_id)
    {
				$em = $this->getDoctrine()->getManager();
				$sensor = $em->getRepository('GraphBundle:Sensor')->find($sensor_id);
				$movements = $sensor->getMovements();

				return $this->render('mchart/index.html.twig', array(
						'sensor' => $sensor,
						'movements' => $movements,
				));
    }
}
