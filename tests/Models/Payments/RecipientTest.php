<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\Recipient;
use PHPUnit\Framework\TestCase;

class RecipientTest extends TestCase
{
    public function testCreate()
    {
        $model = new Recipient('{dob}', '{account}', '{zip}', '{surname}');
        $this->assertInstanceOf(Recipient::class, $model);
    }
}
