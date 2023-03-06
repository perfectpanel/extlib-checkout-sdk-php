<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Tokens\ApplePay;
use Perfectpanel\Checkout\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class ApplePayTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Tokens\ApplePay');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Tokens::generateApplePayModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(ApplePay::class, $result);
    }
}
