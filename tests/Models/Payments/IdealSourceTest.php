<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\IdealSource;
use PHPUnit\Framework\TestCase;

class IdealSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new IdealSource('{iDEAL_BIC}', '{iDEAL_DESC}');
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
