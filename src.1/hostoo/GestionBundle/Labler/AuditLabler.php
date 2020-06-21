<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 23/01/19
 * Time: 16:50
 */

namespace hostoo\GestionBundle\Labler;


use Symfony\Component\Security\Core\User\UserInterface;

class AuditLabler
{
    public static function getLabel( $entity) {
        if ($entity instanceof UserInterface) {
            return $entity->getUsername();
        }

        return 'Unlabeled';
    }
}