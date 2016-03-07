<?php

namespace AccountBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
//http://symfony.com/doc/current/bundles/FOSUserBundle/index.html
class AccountBundle extends Bundle
{
		public function getParent()
    {
        return 'FOSUserBundle';
    }
}
