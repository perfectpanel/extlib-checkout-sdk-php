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

namespace perfectpanel\Checkout\Models\Tokens;

use perfectpanel\Checkout\Library\HttpHandler;
use perfectpanel\Checkout\Library\Model;

/**
 * Token base class.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
abstract class Token extends Model
{

    /**
     * Qualified name of the class.
     *
     * @var string
     */
    const QUALIFIED_NAME = __CLASS__;

    /**
     * API Request URL.
     *
     * @var string
     */
    const MODEL_REQUEST_URL = 'tokens';

    /**
     * API Request Method.
     *
     * @var string
     */
    const MODEL_REQUEST_METHOD = HttpHandler::METHOD_POST;
}
