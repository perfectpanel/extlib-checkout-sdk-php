<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Sources\Sepa;
use perfectpanel\Checkout\tests\Helpers\Sources;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class SepaTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Sources\Sepa');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Sources::generateSepaModel();
        $response = $model->getValues();


        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Sepa::class, $result);
    }

    public function testGetSepaMandateGet()
    {
        $model = Sources::generateSepaModel();
        $this->assertTrue(is_string($model->getSepaMandateGet()));
    }

    public function testGetSepaMandateCancel()
    {
        $model = Sources::generateSepaModel();
        $this->assertTrue(is_string($model->getSepaMandateCancel()));
    }
}
