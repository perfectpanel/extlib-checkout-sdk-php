<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\Risk;
use PHPUnit\Framework\TestCase;

class RiskTest extends TestCase
{
    public function testCreate()
    {
        $model = new Risk(true);
        $this->assertInstanceOf(Risk::class, $model);
    }
}
