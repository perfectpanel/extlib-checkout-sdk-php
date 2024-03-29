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

use perfectpanel\Checkout\Library\Model;

/**
 * Payment recipient field model.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class Recipient extends Model
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
    const MODEL_NAME = 'recipient';


    /**
     * Magic Methods
     */

    /**
     * Initialise Payment recipients.
     *
     * @param string $dob
     * @param string $account
     * @param string $zip
     * @param string $surname
     */
    public function __construct($dob, $account, $zip, $surname)
    {
        $this->dob = $dob;
        $this->account_number = $account;
        $this->zip = $zip;
        $this->last_name = $surname;
    }
}
