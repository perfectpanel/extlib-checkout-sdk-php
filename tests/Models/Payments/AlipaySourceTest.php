<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\AlipaySource;
use PHPUnit\Framework\TestCase;

class AlipaySourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new AlipaySource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
