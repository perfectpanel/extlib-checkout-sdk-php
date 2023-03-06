<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\Capture;
use Perfectpanel\Checkout\tests\Helpers\Payments;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class CaptureTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Payments\Capture');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Payments::generateCaptureModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Capture::class, $result);
    }
}
