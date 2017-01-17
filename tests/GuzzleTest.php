<?php
use GuzzleHttp\Psr7\ServerRequest;

class GuzzleTest extends AbstractImmutabilityTest
{
    protected function newServerRequest()
    {
        return ServerRequest::fromGlobals();
    }
}
