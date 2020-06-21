<?php

namespace hostoo\SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Cim10Controller extends Controller
{
    public function lesPathologiesAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        if($request->isXmlHttpRequest())
        {
            $items=array();
            $motcle=$request->get('q');
            $qb = $em->createQueryBuilder();
            $qb->select('a')
                ->from('hostooSanteBundle:Cim10', 'a')
                //->where("a.id < 20");
                ->where("a.pathologie LIKE :motcle OR a.code LIKE :motcle")
               ->orderBy('a.id', 'ASC')
               ->setParameter('motcle', '%'.$motcle.'%');

            $query = $qb->getQuery();
            $paths=$query->getResult();
            foreach ($paths as $item){
                $items[]=array('id'=>$item->getId(),'pathologie'=>$item->getPathologie());
            }

            $response = new JsonResponse();
            return $response->setData(array('items' => $items));

        }
        $paths=$em->getRepository('hostooSanteBundle:Cim10')->findAll();
        foreach ($paths as $item){
            $items[]=array('id'=>$item->getId(),'pathologie'=>$item->getPathologie());
        }

        $response = new JsonResponse();
        return $response->setData(array('items' => $items));
        /*return $this->render('hostooSanteBundle:Cim10:les_pathologies.html.twig', array('paths'=>$paths
            // ...
        ));*/
    }

}
