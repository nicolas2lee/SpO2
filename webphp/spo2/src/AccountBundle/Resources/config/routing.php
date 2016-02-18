<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('account_homepage', new Route('/account', array(
    '_controller' => 'AccountBundle:Default:index',
)));

return $collection;
