<?php
use Zend\Diactoros\ServerRequestFactory;

class DiactorosTest extends AbstractImmutabilityTest
{
    protected function newServerRequest()
    {
        return ServerRequestFactory::fromGlobals();
    }
}
