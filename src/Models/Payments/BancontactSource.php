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

/**
 * Payment method Bancontact.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class BancontactSource extends Source
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
    const MODEL_NAME = 'bancontact';


    /**
     * Magic Methods
     */

    /**
     * Initialise bancontact.
     *
     * @param      string  $name        The account_holder_name
     * @param      string  $country     The payment_country
     * @param      string  $descriptor  The billing_descriptor
     */
    public function __construct($name, $country, $descriptor = '')
    {
        $this->type = static::MODEL_NAME;
        $this->account_holder_name = $name;
        $this->payment_country = $country;
        $this->billing_descriptor = $descriptor;
    }
}
