<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Response;
use perfectpanel\Checkout\Models\Webhooks\Webhook;
use perfectpanel\Checkout\tests\Helpers\Webhooks;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class WebhookTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Webhooks\Webhook');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Webhooks::generateModel();
        $response = $model->getValues();


        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Webhook::class, $result);
    }

    public function testCreateMultiple()
    {
        $class = new ReflectionClass('Checkout\Models\Webhooks\Webhook');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Webhooks::generateModel();
        $response = array($model->getValues());

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Response::class, $result);
    }
}
