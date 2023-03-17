<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\SofortSource;
use PHPUnit\Framework\TestCase;

class SofortSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new SofortSource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
