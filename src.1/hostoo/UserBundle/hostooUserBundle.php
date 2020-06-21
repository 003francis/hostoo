<?php

namespace hostoo\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class hostooUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
