<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\BoletoSource;
use PHPUnit\Framework\TestCase;

class BoletoSourceTest extends TestCase
{
    public function testCreate()
    {
        $model = new BoletoSource('{name}', '{birthdate}', '{cpf}');
        $this->assertEquals($model::MODEL_NAME, $model->type);
    }
}
