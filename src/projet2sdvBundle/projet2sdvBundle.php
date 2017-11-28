<?php

namespace projet2sdvBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class projet2sdvBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
