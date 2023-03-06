<?php

namespace Perfectpanel\Checkout\tests\Helpers;

use Perfectpanel\Checkout\Library\CheckoutConfiguration;

class CheckoutConfigurations
{
    public static function generateModel()
    {
        return new CheckoutConfiguration('{secret_key_goes_here}', true, '{public_key_goes_here}');
    }
}
