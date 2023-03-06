<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Address;
use Perfectpanel\Checkout\Models\Payments\Shipping;
use Perfectpanel\Checkout\Models\Phone;
use PHPUnit\Framework\TestCase;

class ShippingTest extends TestCase
{
    public function testCreate()
    {
        $address = new Address();
        $phone = new Phone();
        $model = new Shipping($address, $phone);

        $this->assertInstanceOf(Shipping::class, $model);
        $this->assertEquals($address, $model->address);
    }
}
