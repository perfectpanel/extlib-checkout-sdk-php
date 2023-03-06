<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\AlipaySource;
use PHPUnit\Framework\TestCase;

class AlipaySourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new AlipaySource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
