<?php

namespace hostoo\SanteBundle\Controller;

use hostoo\SanteBundle\Entity\Patient;
use hostoo\SanteBundle\Form\PatientType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('hostooSanteBundle:Default:index.html.twig');
    }
    public function receptionAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $actelabo=$em->getRepository('hostooSanteBundle:Tarifslabo')->findAll();
        $liste=$em->getRepository('hostooSanteBundle:Patient')->findby(array(),array('id'=>'desc'));
        $rdv=$em->getRepository('hostooSanteBundle:Rdv')->findBy(array('daterdv'=>new \DateTime('now')));
        //$rdv=$em->getRepository('hostooSanteBundle:Rdv')->findAll();
        $patient = new Patient;
        $form=$this->get('form.factory')->create(PatientType::class, $patient);
        if($request->isMethod('POST') && $form->handleRequest($request)->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $Testpatient=$em->getRepository('hostooSanteBundle:Patient')->findOneBy(array('nom'=>$patient->getNom(),'postnom'=>$patient->getPostnom(),'prenom'=>$patient->getPrenom()));

            if(!is_null($Testpatient))
            {
                throw $this->createNotFoundException('Ce Patient Existe deja');
            }
            $em->persist($patient);
            $em->flush();
            $this->redirect($this->generateUrl('hostoo_sante_reception').'#tabr2');
        }
        return $this->render('hostooSanteBundle:Patient:reception.html.twig', array('form'=>$form->createView(),'rdvs'=>$rdv,'categories'=>$categories,'actes'=>$actemedicaux,'actes2'=>$actelabo,'patients'=>$liste));
    }

    public function tarifsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $actemedicaux=$em->getRepository('hostooSanteBundle:Tarification')->findAll();
        $categories=$em->getRepository('hostooSanteBundle:Cattarifs')->findAll();
        $actelabo=$em->getRepository('hostooSanteBundle:Tarifslabo')->findAll();
        return $this->render('hostooSanteBundle:Tarifs:tarifs.html.twig',array(
            'categories'=>$categories,
            'actes'=>$actemedicaux,
            'actes2'=>$actelabo
        ));
    }

    public function recherchePatientAction(Request $request)
    {
        //$form = $this->createForm(new RechercheType());
        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest() && !empty($request->get('motcle')) && strlen($request->get('motcle'))>=3)
        {

            $motcle=$request->get('motcle');
/*
            $qb = $em->createQueryBuilder();
            $qb->select('a')
                ->from('hostooSanteBundle:Patient', 'a')
                ->where("a.nom LIKE :motcle OR a.prenom LIKE :motcle")
                ->orderBy('a.nom', 'ASC')
                ->setParameter('motcle', '%'.$motcle.'%');

            $query = $qb->getQuery();*/

            $articles =$em->getRepository('hostooSanteBundle:Patient')->recherchePatient($motcle);


            /*} else {
                //$articles=$em->getRepository('toonaShopBundle:Article')->findAll();
                $motcle=$request->get('motcle');

                $qb = $em->createQueryBuilder();
                $qb->select('a')->from('hostooSanteBundle:Patient', 'a')
                    ->where("a.nom LIKE :motcle OR a.prenom LIKE :motcle")
                    ->orderBy('a.nom', 'ASC')
                    ->setParameter('motcle', '%'.$motcle.'%');

                $query = $qb->getQuery();
                $articles = $query->getResult();
                $items=array();


                //return $this->redirect($this->generateUrl('reception_t_b'));
                // $recherche=$request->get('ts_recherche_recherche');
                foreach ($articles as $item){
                    $items[]=array('id'=>$item->getId(),'nom'=>$item->getNom(),'postnom'=>$item->getPostnom());
                }
    */ $items=array();
            foreach ($articles as $item){
                $items[]=array('id'=>$item->getId(),'nom'=>$item->getNom(),'postnom'=>$item->getPostnom(),'prenom'=>$item->getPrenom());
            }
            $response = new JsonResponse();
            return $response->setData(array('items' => $items));
            //$em = $this->getDoctrine()->getManager(); 
            //$articles = $em->getRepository('toonaShopBundle:Article')->findByNom($recherche);
            //return $this->render('toonaShopBundle:Store:rec_articles.html.twig', array('articles' => $articles));
        }

        $items=array();


        $response = new JsonResponse();
        return $response->setData(array('items' => $items));
        //return $this->get('templating')->renderResponse   ('toonaShopBundle:Store:pos.html.twig', array('items' => $articles));
        //return new JsonResponse(array('items'=>$articles))->headers->set('Content-Type', 'application/json');;
        //return $this->redirect($this->generateUrl('ts_pos'));
    }

}
