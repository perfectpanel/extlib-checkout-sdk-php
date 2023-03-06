<?php

namespace Perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\TokenSource;
use Perfectpanel\Checkout\tests\Helpers\Tokens;
use PHPUnit\Framework\TestCase;

class TokenSourceTest extends TestCase
{
    public function testCreate()
    {
        $token = new TokenSource(Tokens::generateId());
        $this->assertInstanceOf(TokenSource::class, $token);
    }
}
