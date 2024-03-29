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

use perfectpanel\Checkout\Library\HttpHandler;
use perfectpanel\Checkout\Library\Model;
use perfectpanel\Checkout\Library\Utilities;

/**
 * Void Model.
 *
 * @category SDK
 * @package  Checkout.com
 * @author   Platforms Development Team <platforms@checkout.com>
 * @license  https://opensource.org/licenses/mit-license.html MIT License
 * @link     https://docs.checkout.com/
 */
class Voids extends Model
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
    const MODEL_NAME = 'void';

    /**
     * API Request URL.
     *
     * @var string
     */
    const MODEL_REQUEST_URL = 'payments/{id}/voids';

    /**
     * API Request Method.
     *
     * @var string
     */
    const MODEL_REQUEST_METHOD = HttpHandler::METHOD_POST;


    /**
     * Magic Methods
     */

    /**
     * Initialise Voids
     *
     * @param string   $id
     * @param string   $reference
     * @param Metadata $meta
     */
    public function __construct($id, $reference = null, Metadata $meta = null)
    {
        $this->id = $id;
        $this->reference = $reference;
        $this->metadata = $meta;
    }

    /**
     * Create Void object.
     *
     * @param  array $response
     * @return Model
     */
    protected static function create(array $response)
    {
        return new self(
            Utilities::getValueFromArray($response, 'id', ''),
            Utilities::getValueFromArray($response, 'reference', ''),
            Utilities::getValueFromArray($response, 'metadata', new Metadata)
        );
    }
}
