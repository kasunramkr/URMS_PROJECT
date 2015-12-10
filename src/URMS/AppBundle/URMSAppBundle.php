<?php

namespace URMS\AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class URMSAppBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
