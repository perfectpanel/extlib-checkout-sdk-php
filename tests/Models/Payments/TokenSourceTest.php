<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use perfectpanel\Checkout\Models\Payments\TokenSource;
use perfectpanel\Checkout\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;

class TokenSourceTest extends TestCase
{
    public function testCreate()
    {
        $token = new TokenSource(Tokens::generateId());
        $this->assertInstanceOf(TokenSource::class, $token);
    }
}
