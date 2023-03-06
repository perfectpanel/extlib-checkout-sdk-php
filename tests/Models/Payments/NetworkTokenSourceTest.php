<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\NetworkTokenSource;
use Perfectpanel\Checkout\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;

class NetworkTokenSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new NetworkTokenSource(Tokens::generateID(), 12, 2020, '{type}');
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
