<?php

namespace perfectpanel\Checkout\tests\Models\Payments;

use Perfectpanel\Checkout\Models\Events\Event;
use Perfectpanel\Checkout\Models\Response;
use Perfectpanel\Checkout\tests\Helpers\Events;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

class EventTest extends TestCase
{
    public function testCreate()
    {
        $class = new ReflectionClass('Checkout\Models\Events\Event');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Events::generateModel();
        $response = $model->getValues();


        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Event::class, $result);
    }

    public function testCreateMultiple()
    {
        $class = new ReflectionClass('Checkout\Models\Events\Event');
        $method = $class->getMethod('create');
        $method->setAccessible(true);

        $model = Events::generateModel();

        $response = array('data' => array($model->getValues()),
                          'total_count' => 2);

        $result = $method->invokeArgs($model, array($response));
        $this->assertInstanceOf(Response::class, $result);
    }
}
