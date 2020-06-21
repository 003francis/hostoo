<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 17/01/19
 * Time: 01:35
 */

namespace hostoo\GestionBundle\Litoyi;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\Dump\Container;


class LitoyiListener
{

// La date de fin de la version bêta :
// - Avant cette date, on affichera un compte à rebours (J-3 parexemple)
// - Après cette date, on n'affichera plus le « bêta »
    protected $dateFin;
    public function __construct($dateFin)
    {
        $this->dateFin = new \Datetime($dateFin);
    } // Méthode pour ajouter le « bêta » à une réponse
    protected function displayBeta(Response $response, $joursRestant)
    {
        $content = $response->getContent();
// Code à rajouter
        $html = '<span style="color: red; font-size: 0.5em;"> - Beta J-
'.(int) $joursRestant.' !</span>';
// Insertion du code dans la page, dans le <h1> du header
        $content = preg_replace('#<h1>(.*?)</h1>#iU',
            '<h1>$1'.$html.'</h1>',
            $content,
            1);
// Modification du contenu dans la réponse
        $response->setContent($content);
        return $response;
    }

}