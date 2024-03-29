<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Tokens\GooglePay;
use perfectpanel\Checkout\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class GooglePayTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Tokens\GooglePay');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Tokens::generateGooglePayModel();
        $response = $model->getValues();

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(GooglePay::class, $result);
    }
}
