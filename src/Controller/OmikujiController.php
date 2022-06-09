<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class OmikujiController extends AbstractController
{
    /**
     * おみくじ運勢を表示する
     * 
     * @Route("/omikuji/{youname}", defaults={"youname"="YOU"}, name="omikuji")  // ②
     * 
     * @param Request $request
     * @return Response
     */
    public function omikujiAction(Request $request, $youname)  // ③
    {
        $omikuji = ['大吉', '中吉', '小吉', '末吉', '凶'];
        $number = rand(0, count($omikuji) - 1);

        // return new Response(
        //     "<html><body>${youname}の運勢は $omikuji[$number] です。</body></html>"
        // );

        return $this->render("omikuji/omikuji.html.twig",[
            "name" => $youname,
            "unsei" => $omikuji[$number]
        ]);
    }
}