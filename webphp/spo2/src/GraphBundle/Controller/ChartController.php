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
     * @Route("/{sensor_id}/spo2", name="spo2chart")
     * @Method("GET")
     */
    public function spo2Action($sensor_id)
    {
				$em = $this->getDoctrine()->getManager();
				$sensor = $em->getRepository('GraphBundle:Sensor')->find($sensor_id);
				$spo2s = $sensor->getSpo2s();
				return $this->render('chart/index.html.twig', array('sensor'=>$sensor, 'spo2s' => $spo2s));
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
			//	if ($sensor->getType()==)
				$movements = $sensor->getMovements();

				return $this->render('mchart/index.html.twig', array(
						'sensor' => $sensor,
						'movements' => $movements,
				));
    }

		/**
     *
     * @Route("/{sensor_id}/syncgraph", name="syncchart")
     * @Method("GET")
     */
    public function syncAction($sensor_id)
    {
				$em = $this->getDoctrine()->getManager();
				$sensor = $em->getRepository('GraphBundle:Sensor')->find($sensor_id);
			//	if ($sensor->getType()==)
				$movements = $sensor->getMovements();

				return $this->render('syncchart/index.html.twig', array(
						'sensor' => $sensor,
						'movements' => $movements,
				));
    }
}
