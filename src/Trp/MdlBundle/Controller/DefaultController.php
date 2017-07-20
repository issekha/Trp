<?php

namespace Trp\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrpMdlBundle:Default:index.html.twig');
    }
}
