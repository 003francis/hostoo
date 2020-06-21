<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 17/01/19
 * Time: 07:54
 */

namespace hostoo\SanteBundle\Journalisation;
use hostoo\UserBundle\Entity\Utilisateur;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use hostoo\GestionBundle\Entity\HostooLog;
use Doctrine\ORM\EntityManagerInterface;

class JournalisationListener
{
    protected $em;
    protected $events;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em=$entityManager;
        $this->events= new HostooLog();

    }

    public function authentificationDelUtilisateur($user)
    {
        $emgr=$this->em;
        $ev=$this->events;
        $ev->setEvenement('Authentification');
        $ev->setTemps(new \DateTime('now'));
        $ev->setUtilisateur($user);

        $emgr->persist($ev);
        $emgr->flush();
    }

    public function enregistrerEvenement(Utilisateur $user,$events)
    {
        $ev=$this->events;
        $ev->setEvenement($events);
        $ev->setTemps(new \DateTime('now'));
        $ev->setUtilisateur($user);
        return $ev;
    }

   public function  setEvenement($evenement)
   {

   }
    public function getEvenement($user)
    {
        return $this->authentificationDelUtilisateur($user)->getEvenement();
    }



}