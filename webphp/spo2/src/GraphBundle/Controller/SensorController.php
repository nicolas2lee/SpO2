<?php

namespace GraphBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use GraphBundle\Entity\Sensor;
use GraphBundle\Entity\Document;
use GraphBundle\Entity\Movement;
use GraphBundle\Entity\Spo2;


use GraphBundle\Form\SensorType;
use GraphBundle\Form\DocumentType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


use Symfony\Component\Finder\Finder;
use Symfony\Component\Filesystem\Filesystem;


/**
 * Sensor controller.
 *
 * @Route("/sensor")
 */
class SensorController extends Controller
{
    /**
     * Lists all Sensor entities.
     *
     * @Route("/", name="sensor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
				$user= $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $sensors = $em->getRepository('GraphBundle:Sensor')->findAll();
				$sensors = $user->getSensors();
        return $this->render('sensor/index.html.twig', array(
            'sensors' => $sensors,
					
						'user' => $user,
						
        ));
    }


		/**
     *
     * @Route("/{sensor_id}/uploadfile", name="sensor_uploadfile")
     * @Method({"GET", "POST"})
     */
		public function uploadfileAction(Request $request, $sensor_id){
			$em = $this->getDoctrine()->getManager();
      $sensor = $em->getRepository('GraphBundle:Sensor')->find($sensor_id);
			$document = new Document();
			
      $form = $this->createForm('GraphBundle\Form\DocumentType', $document);
			$form ->add('submit', SubmitType::class, array(
            'label' => 'Create',
      ));
      $form->handleRequest($request);


      if ($form->isSubmitted() && $form->isValid()) {
          $em = $this->getDoctrine()->getManager();
				
					$document->setSensor($sensor);
					//$sensor->addDocument($document);

          $em->persist($document);
          $em->flush();
					//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
					//$contents = file_get_contents($document->getWebPath());

					if($document->getType()== "SpO2"){

							$myfile = fopen($document->getWebPath(), "r");
							if($myfile){
									while(($line=fgets($myfile))!== false){
										$args=	array_map('trim', explode(';', $line));
										if ($args[0]!="\"id\""){
												$spo2 = new Spo2();
												$spo2 ->setDatetime($args[1]);
												$spo2 ->setSaturation($args[2]);
												$spo2 ->setSensor($sensor);

												$em->persist($spo2);
				     						$em->flush();
										}
									}
									fclose($myfile);
							}
					}elseif($document->getType()== "Accelerometer"){ 

							$myfile = fopen($document->getWebPath(), "r");
							if($myfile){
									while(($line=fgets($myfile))!== false){
										$args=	array_map('trim', explode(';', $line));
										if ($args[0]!="\"results_id\""){
										
												$movement = new Movement();
						//	"results_id";"start";"duration";"class";"steps";"mi";"aee";"tee";"met";"vmu"
						//       0            1      2         3      4       5     6    7     8     9
												$fullstart=str_replace('"','',$args[1]);
												$fullstarts=explode('.', $fullstart);
												$movement->setTstart($fullstarts[0]);
												$movement->setDuration($args[2]);
												$movement->setClass(str_replace('"','',$args[3]));
												$movement->setNbSteps($args[4]);
												$movement->setMI($args[5]);
												$movement->setAEE($args[6]);
												$movement->setTEE($args[7]);
												$movement->setMET($args[8]);
												$movement->setVMU($args[9]);
												$movement->setSensor($sensor);

												$em->persist($movement);
				     						$em->flush();
										}
									}
									fclose($myfile);
							}else{}
					}

					return $this->render('UploadFile/test.html.twig', array(		    
							'line' => $args
					));
					
					//$data = $this->chargeData($document);
          return $this->redirectToRoute('sensor_show', 
					array('id' => $sensor->getId(),
								
					));
      }

      return $this->render('UploadFile/upload.html.twig', array(
          'document' => $document,
          'form' => $form->createView(),
					'sensor' => $sensor
      ));
		}


    /**
     * Creates a new Sensor entity.
     *
     * @Route("/new", name="sensor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $sensor = new Sensor();
				$user = $this->getUser();
        $form = $this->createForm('GraphBundle\Form\SensorType', $sensor);
				$form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-right')
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
						
						$sensor->setUser($user);
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('sensor_show', array('id' => $sensor->getId()));
        }

        return $this->render('sensor/new.html.twig', array(
            'sensor' => $sensor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sensor entity.
     *
     * @Route("/{id}", name="sensor_show")
     * @Method("GET")
     */
    public function showAction(Sensor $sensor)
    {

				$documents=$sensor->getDocuments();
      	
        $deleteForm = $this->createDeleteForm($sensor);
				$user= $sensor->getUser();
        return $this->render('sensor/show.html.twig', array(
            'sensor' => $sensor,
						'user' =>  $user,
            'delete_form' => $deleteForm->createView(),
						'documents' => $documents,
						//'content' => "",
        ));
    }

    /**
     * Displays a form to edit an existing Sensor entity.
     *
     * @Route("/{id}/edit", name="sensor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Sensor $sensor)
    {
        $deleteForm = $this->createDeleteForm($sensor);
        $editForm = $this->createForm('GraphBundle\Form\SensorType', $sensor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('sensor_edit', array('id' => $sensor->getId()));
        }

        return $this->render('sensor/edit.html.twig', array(
            'sensor' => $sensor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sensor entity.
     *
     * @Route("/{id}", name="sensor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Sensor $sensor)
    {
        $form = $this->createDeleteForm($sensor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sensor);
            $em->flush();
        }

        return $this->redirectToRoute('sensor_index');
    }

    /**
     * Creates a form to delete a Sensor entity.
     *
     * @param Sensor $sensor The Sensor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Sensor $sensor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sensor_delete', array('id' => $sensor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
	
		private function chargeData(Document $document){
				return	$document->getData();	
				
		}





}
