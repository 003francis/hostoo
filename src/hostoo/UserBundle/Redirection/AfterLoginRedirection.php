<?php

/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 10/23/16
 * Time: 9:08 AM
 */
namespace hostoo\UserBundle\Redirection;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var \Symfony\Component\Routing\RouterInterface
     */
    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // On récupère la liste des rôles d'un utilisateur
        $roles = $token->getRoles();
        // On transforme le tableau d'instance en tableau simple
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);
        // S'il s'agit d'un admin ou d'un super admin on le redirige vers le backoffice
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true)) {
            return $redirection = new RedirectResponse($this->router->generate('_admin_t_b'));
        }else if (in_array('ROLE_RECEPTION', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('reception_t_b'));
        }else if (in_array('ROLE_CAISSIER', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_sante_listeactes'));
        }else if (in_array('ROLE_DISPATCHER', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_sante_listprelev'));
        }else if (in_array('ROLE_INFIRMIER', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_sante_listprelev'));
        }else if (in_array('ROLE_DG', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('medecin_tb'));
        }else if (in_array('ROLE_MEDECIN', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_sante_patientsattente'));
        }else if (in_array('ROLE_LABORATOIRE', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_labo_dash'));
        }else if (in_array('ROLE_IMAGERIE', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_img_dash'));
        }else if (in_array('ROLE_PHARMACIE', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('hostoo_phar_dash'));
        }else if (in_array('ROLE_REPORT', $rolesTab, true)){
            return $redirection = new RedirectResponse($this->router->generate('tableau_de_bord'));
        }
        else{
            return $redirection = new RedirectResponse($this->router->generate('throw_autorization'));
        }
        //return $redirection;
    }
}