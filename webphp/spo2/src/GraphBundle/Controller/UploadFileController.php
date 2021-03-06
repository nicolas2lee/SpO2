<?php

namespace GraphBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use GraphBundle\Entity\Document;
use GraphBundle\Form\DocumentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class UploadFileController extends Controller
{
    /**
     * @Route("/upload")
     */
    public function uploadAction(Request $request)
    {
			  $document = new Document();
        $form = $this->createForm('GraphBundle\Form\DocumentType', $document);
				$form->add('submit', SubmitType::class, array(
            'label' => 'Create',
            'attr'  => array('class' => 'btn btn-default pull-right')
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($sensor);
            $em->flush();

            return $this->redirectToRoute('sensor_show', array('id' => $sensor->getId()));
        }
/*
        return $this->render('sensor/new.html.twig', array(
            'sensor' => $sensor,
            'form' => $form->createView(),
        ));
*/
        return $this->render('UploadFile/upload.html.twig', array(
            'document' => $document,
            'form' => $form->createView(),
        ));
    }

}
