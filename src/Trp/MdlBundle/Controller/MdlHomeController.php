<?php

namespace Trp\MdlBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class MdlHomeController
{
    public function indexAction()
    {
        return new Response("Notre propre Hello World !");
    }
}