<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\PoliSource;
use PHPUnit\Framework\TestCase;

class PoliSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new PoliSource();
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
