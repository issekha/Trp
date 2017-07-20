<?php

namespace Trp\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MdlController extends Controller
{
	public function viewAction($id){
		
		return new Response("Affichage de l'annonce d'id : ".$id);
	}
	
    public function indexAction()
    {
		$content = $this->get('templating')->render('TrpMdlBundle:Mdl:index.html.twig');
    
    	return new Response($content);
    }
}