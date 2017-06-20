<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test", name="homepage2")
     */
    public function tAction(Request $request)
    {
        return new JsonResponse(['aaa','bbb']);
    }

    /**
     * @Route("/test.html/tt")
     */
    public function ttAction(){
        return new JsonResponse([2342,224532,345]);
    }
}
