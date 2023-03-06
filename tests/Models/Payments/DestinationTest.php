<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\Destination;
use PHPUnit\Framework\TestCase;

class DestinationTest extends TestCase
{
    public function testCreate()
    {
        $model = new Destination('{id}', 1000);
        $this->assertInstanceOf(Destination::class, $model);
    }
}
