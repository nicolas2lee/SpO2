<?php

namespace GraphBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
				$main_spo2s = $sensor->getSpo2s();
				return $this->render('chart/index.html.twig', array('sensor'=>$sensor, 'main_spo2s' => $main_spo2s));
    }

		/**
     * @Route("/spo2/update", name="updateSpo2chart")
     * @Method("POST")
     */
		public function updateSpo2Chart(){

				$request = $this->container->get('request');  
				$s_id=$request->request->get("sensor_id");
				$tbegin=$request->request->get("tbegin");
				$tend=$request->request->get("tend");		

/*
				$sensor_id=2;
				$tbegin='2015-01-01 22:00:01'	;
				$tend='2015-09-27 00:10:01';
*/
				$em = $this->getDoctrine()->getManager();
				$q=$em->createQuery(
						'select s from GraphBundle:Spo2 s
						where s.datetime > :tbegin and s.datetime < :tend')
						->setParameter('tbegin',$tbegin)
						->setParameter('tend',$tend);
/*
				$q=$em->createQuery(
						'select s from GraphBundle:Spo2 s
						where s.datetime > :tbegin and s.datetime < :tend and s.sensor = :sensor_id
						order by s.datetime ASC
						'			
				)->setParameter('tbegin',$tbegin)
				->setParameter('tend',$tend)
			  ->setParameter('sensor_id',$s_id)
				;*/
				$spo2s=$q->getResult();
				return $this->render('chart/drawspo2chart.html.twig', array(
						'spo2s' => $spo2s,
						'tbegin' => $tbegin,
						'tend' => $tend,
						's_id'=>$s_id,
				));
				//$q = $em->getRepository('GraphBundle:Sensor')->find(2);
				//$response= new Response(json_encode(array('spo2s'=>$spo2s)));
				//$response->headers->set('Content-Type','application/json');
				//return $response;
				//return new JsonResponse(array('spo2s'=>$spo2s));



/*
				return $this->render('chart/test.html.twig', array(
						'qs' => $spo2s,
				));*/
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
