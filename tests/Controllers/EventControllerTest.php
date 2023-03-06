<?php

namespace perfectpanel\Checkout\tests\Controllers;

use Perfectpanel\Checkout\CheckoutApi;
use Perfectpanel\Checkout\Library\HttpHandler;
use Perfectpanel\Checkout\tests\Helpers\Events;
use Perfectpanel\Checkout\tests\Helpers\Notifications;
use Perfectpanel\Checkout\tests\Helpers\Webhooks;
use PHPUnit\Framework\TestCase;

class EventControllerTest extends TestCase
{
    public function testLoad()
    {
        $checkout = new CheckoutApi();
        $event = $checkout->events()->load(Events::generateID(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $event);
        $this->assertEquals(HttpHandler::METHOD_GET, $event->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $event->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $event->getContentType());
    }

    public function testRetrieve()
    {
        $checkout = new CheckoutApi();
        $event = $checkout->events()->retrieve(array(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $event);
        $this->assertEquals(HttpHandler::METHOD_GET, $event->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $event->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $event->getContentType());
    }

    public function testNotification()
    {
        $checkout = new CheckoutApi();
        $event = $checkout->events()->notification(Events::generateID(), Notifications::generateID(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $event);
        $this->assertEquals(HttpHandler::METHOD_GET, $event->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $event->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $event->getContentType());
    }

    public function testTypes()
    {
        $checkout = new CheckoutApi();
        $event = $checkout->events()->types(array(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $event);
        $this->assertEquals(HttpHandler::METHOD_GET, $event->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $event->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $event->getContentType());
    }

    public function testWebhook()
    {
        $checkout = new CheckoutApi();
        $event = $checkout->events()->webhook(Events::generateID(), Webhooks::generateID(), HttpHandler::MODE_RETRIEVE);

        $this->assertInstanceOf(HttpHandler::class, $event);
        $this->assertEquals(HttpHandler::METHOD_POST, $event->getMethod());
        $this->assertEquals(HttpHandler::AUTH_TYPE_SECRET, $event->getAuth());
        $this->assertEquals('Content-type: ' . HttpHandler::MIME_TYPE_JSON, $event->getContentType());
    }
}
