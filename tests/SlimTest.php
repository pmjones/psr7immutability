<?php
use Slim\Http\Environment;
use Slim\Http\Request;

class SlimTest extends AbstractImmutabilityTest
{
    protected function newServerRequest()
    {
        return Request::createFromEnvironment(Environment::mock());
    }
}
