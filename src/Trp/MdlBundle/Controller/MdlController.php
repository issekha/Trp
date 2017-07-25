<?php

namespace Trp\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Trp\MdlBundle\Entity\Cmd;
use Trp\MdlBundle\Entity\Tckt;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MdlController extends Controller
{	
    public function indexAction()
    {
		$content = $this->get('templating')->render('TrpMdlBundle:Mdl:index.html.twig');
    
    	return new Response($content);
    }
	
	public function step1Action(){
		
		$cmd = new Cmd();
		
		
		$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $cmd);
			
		$formBuilder
					->add('date', 	DateType::class)
					->add('ttype', 	TextType::class)
					->add('tnbrs',	IntegerType::class)
		;
					
		$form = $formBuilder->getForm();
		
		return $this->render('TrpMdlBundle:Mdl:step1.html.twig', array('form' => $form->createView(),
		));
	}
	
	
}
