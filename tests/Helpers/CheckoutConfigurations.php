<?php

namespace perfectpanel\Checkout\tests\Helpers;

use perfectpanel\Checkout\Library\CheckoutConfiguration;

class CheckoutConfigurations
{
    public static function generateModel()
    {
        return new CheckoutConfiguration('{secret_key_goes_here}', true, '{public_key_goes_here}');
    }
}
