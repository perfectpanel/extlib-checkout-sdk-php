<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\Destination;
use PHPUnit\Framework\TestCase;

class DestinationTest extends TestCase
{
    public function testCreate()
    {
        $model = new Destination('{id}', 1000);
        $this->assertInstanceOf(Destination::class, $model);
    }
}
