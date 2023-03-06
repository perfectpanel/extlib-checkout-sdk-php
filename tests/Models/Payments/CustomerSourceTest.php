<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Payments\CustomerSource;
use Perfectpanel\Checkout\tests\Helpers\Sources;
use PHPUnit\Framework\TestCase;

class CustomerSourceTest extends TestCase
{
    public function testCreateID()
    {
        $id = Sources::generateCustomerID();
        $model = new CustomerSource($id);

        $this->assertTrue($model->getId() !== null);
    }

    public function testCreateEmail()
    {
        $email = Sources::generateCustomerEmail();
        $model = new CustomerSource($email);

        $this->assertTrue($model->email !== null);
    }
}
