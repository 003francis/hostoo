<?php
/**
 * Created by PhpStorm.
 * User: ramseytiger
 * Date: 26/01/19
 * Time: 03:54
 */

namespace hostoo\SanteBundle\Listener;


use Doctrine\ORM\Event\LifecycleEventArgs;
use Xiidea\EasyAuditBundle\Entity\BaseAuditLog;

class AuditLogPrePersistListener
{
    public function prePersist(LifecycleEventArgs $args)
    {
        /** @var \Xiidea\EasyAuditBundle\Entity\BaseAuditLog $entity */
        $entity = $args->getEntity();

        if ($entity instanceof BaseAuditLog) {
            //Do your extra processing
        }
    }
}