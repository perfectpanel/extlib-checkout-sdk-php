<?php

namespace Perfectpanel\Checkout\tests\Controllers;

use Perfectpanel\Checkout\CheckoutApi;
use Perfectpanel\Checkout\Library\HttpHandler;
use Perfectpanel\Checkout\tests\Helpers\Sources;
use PHPUnit\Framework\TestCase;

class SourceControllerTest extends TestCase
{
    public function testAdd()
    {
        $checkout = new CheckoutApi();
        $source = $checkout->sources()->add(Sources::generateSepaModel(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $source);
        $this->assertEquals(HttpHandler::METHOD_POST, $source->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $source->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $source->getContentType());
    }
}
