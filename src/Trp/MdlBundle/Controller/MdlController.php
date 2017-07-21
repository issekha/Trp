<?php

namespace Trp\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MdlController extends Controller
{
	public function stepAction($id){
		
		$content = $this->get('templating')->render("TrpMdlBundle:Mdl:step$id.html.twig");
    
    	return new Response($content);
	}
	
    public function indexAction()
    {
		$content = $this->get('templating')->render('TrpMdlBundle:Mdl:index.html.twig');
    
    	return new Response($content);
    }
}