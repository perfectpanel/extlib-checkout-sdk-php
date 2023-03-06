<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\Voids;
use Perfectpanel\Checkout\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class VoidsTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Payments\Voids');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateVoidModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Voids::class, $result);
    }
}
