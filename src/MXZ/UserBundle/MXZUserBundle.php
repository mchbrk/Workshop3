<?php

namespace MXZ\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MXZUserBundle extends Bundle
{
    public function getParent(){
        return 'FOSUserBundle';
    }
}
