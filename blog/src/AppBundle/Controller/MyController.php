<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MyController extends Controller
{
    /**
     * Created by K
     * tAction
     * @param Request $request
     * @return JsonResponse
     * @Route("/my", name="homepage1")
     */
    public function tAction(Request $request)
    {
        return new JsonResponse(['aaa','bbb']);
    }
    public function ttAction(){
        return new JsonResponse([111,222,333]);
    }

    /**
     * Created by K
     * t1Action
     * @param $a
     * @return mixed
     * @Route("/my/t1/{a}/{b}",name="mtVar")
     */
    public function t1Action($a,$b=456){
       return new JsonResponse([$a,$b]);
    }
}
