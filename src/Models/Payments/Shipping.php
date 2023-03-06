<?php

/**
 * Checkout.com
 * Authorised and regulated as an electronic money institution
 * by the UK Financial Conduct Authority (FCA) under number 900816.
 *
 * PHP version 7
 *
 * @category  SDK
 * @package   Checkout.com
 * @author    Platforms Development Team <platforms@checkout.com>
 * @copyright 2010-2019 Checkout.com
 * @license   https://opensource.org/licenses/mit-license.html MIT License
 * @link      https://docs.checkout.com/
 */

namespace perfectpanel\Checkout\Models\Payments;

use Perfectpanel\Checkout\Library\Model;
use Perfectpanel\Checkout\Models\Address;
use Perfectpanel\Checkout\Models\Phone;

/**
 * Payment shipping field model.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class Shipping extends Model
{

    /**
     * Qualified name of the class.
     *
     * @var string
     */
    const QUALIFIED_NAME = __CLASS__;

    /**
     * Name of the model.
     *
     * @var string
     */
    const MODEL_NAME = 'shipping';


    /**
     * Magic Methods
     */

    /**
     * Model for shipping.
     * @param Address $address
     * @param Phone $phone
     */
    public function __construct(Address $address = null, Phone $phone = null)
    {
        $this->address = $address;
        $this->phone = $phone;
    }
}
