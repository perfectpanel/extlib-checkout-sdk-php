<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\BillingDescriptor;
use PHPUnit\Framework\TestCase;

class BillingDescriptorTest extends TestCase
{
    public function testCreate()
    {
        $model = new BillingDescriptor('{name}', '{city}');
        $this->assertInstanceOf(BillingDescriptor::class, $model);
    }
}
