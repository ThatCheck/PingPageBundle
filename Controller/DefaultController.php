<?php

namespace Ikom\PingPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $date = new \DateTime();
        
        return new JsonResponse(array("alive" => "true", "timestamp" => $date->getTimestamp()));
    }
}
