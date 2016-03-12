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

				$em = $this->getDoctrine()->getManager();

				$q=$em->createQuery(
						'select s from GraphBundle:Spo2 s
						where s.datetime > :tbegin and s.datetime < :tend and s.sensor = :sensor_id
						order by s.datetime ASC
						'			
				)->setParameter('tbegin',$tbegin)
				->setParameter('tend',$tend)
			  ->setParameter('sensor_id',$s_id)
				;

				$spo2s=$q->getResult();
			//	return new Response($spo2s);
				return $this->render('chart/drawspo2chart.html.twig', array(
						'spo2s' => $spo2s,
						'tbegin' => $tbegin,
						'tend' => $tend,
						's_id'=>$s_id,
				));

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
		
				$main_movements = $sensor->getMovements();

				return $this->render('mchart/index.html.twig', array(
						'sensor' => $sensor,
						'main_movements' => $main_movements,
				));
    }

		/**
     * @Route("/movement/update", name="updateMovementchart")
     * @Method("POST")
     */
		public function updateMovementChart(){

				$request = $this->container->get('request');  
				$s_id=$request->request->get("sensor_id");
				$tbegin=$request->request->get("tbegin");
				$tend=$request->request->get("tend");		

				$em = $this->getDoctrine()->getManager();

				$q=$em->createQuery(
						'select m from GraphBundle:Movement m
						where m.tstart > :tbegin and m.tstart < :tend and m.sensor = :sensor_id
						order by m.tstart ASC
						'			
				)->setParameter('tbegin',$tbegin)
				->setParameter('tend',$tend)
			  ->setParameter('sensor_id',$s_id)
				;
				$movements=$q->getResult();
				//return new Response(1);

				return $this->render('mchart/drawmovementchart.html.twig', array(
						'movements' => $movements,
						'tbegin' => $tbegin,
						'tend' => $tend,
						's_id'=>$s_id,
				));

		}


		/**
     *
     * @Route("/syncgraph", name="syncchart")
     * @Method("GET")
     */
    public function syncAction()
    {

	
				$user=$this->getUser();
				$sensors = $user->getSensors();

				//Need to be improved
				/*In a sipmle case, we retrive all data jsut by the order of sensors
					the order of data among sensors is not sure.
				*//*	
				foreach($sensors as $s){
					switch($s->getType()){
							case 'SpO2': $spo2_s=$s; break;
											
							case 'Accelerometer':$mov_s=$s; break;
					}
				}		*/	
		
				return $this->render('syncchart/index.html.twig', array(

						'sensors' => $sensors,
				));
    }

		/**
     *
     * @Route("/syncgraph/update", name="updatesyncchart")
     * @Method("POST")
     */
    public function updateSyncAction()
    {
				$request = $this->container->get('request');  
				$s_id=$request->request->get("sensor_id");
				$tbegin=$request->request->get("tbegin");
				$tend=$request->request->get("tend");		

				$em = $this->getDoctrine()->getManager();

				$q=$em->createQuery(
						'select m from GraphBundle:Movement m
						where m.tstart > :tbegin and m.tstart < :tend and m.sensor = :sensor_id
						order by m.tstart ASC
						' 
				)->setParameter('tbegin',$tbegin)
				->setParameter('tend',$tend)
			  ->setParameter('sensor_id',$s_id)
				;
				$syncs=$q->getResult();
				//return new Response(1);

				return $this->render('syncchart/drawsyncchart.html.twig', array(
						'syncs' => $syncs,
						'tbegin' => $tbegin,
						'tend' => $tend,
						's_id'=>$s_id,
				));
    }
}
