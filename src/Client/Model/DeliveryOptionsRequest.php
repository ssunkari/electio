<?php
/**
 * DeliveryOptionsRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A minimal Electio client
 *
 * OpenAPI spec version: 1.0.1
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\Electio\Client\Model;

use \ArrayAccess;

/**
 * DeliveryOptionsRequest Class Doc Comment
 *
 * @category    Class
 * @package     ChrisHemmings\Electio
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeliveryOptionsRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryOptionsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consignment_reference_provided_by_customer' => 'string',
        'shipping_date' => '\DateTime',
        'addresses' => '\ChrisHemmings\Electio\Client\Model\Address[]',
        'packages' => '\ChrisHemmings\Electio\Client\Model\Package[]',
        'source' => 'string',
        'meta_data' => '\ChrisHemmings\Electio\Client\Model\MetaData[]',
        'customs_documentation' => '\ChrisHemmings\Electio\Client\Model\CustomsDocumentation',
        'guaranteed_only' => 'bool',
        'delivery_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consignment_reference_provided_by_customer' => null,
        'shipping_date' => 'date-time',
        'addresses' => null,
        'packages' => null,
        'source' => null,
        'meta_data' => null,
        'customs_documentation' => null,
        'guaranteed_only' => null,
        'delivery_date' => 'date-time'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'consignment_reference_provided_by_customer' => 'ConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'ShippingDate',
        'addresses' => 'Addresses',
        'packages' => 'Packages',
        'source' => 'Source',
        'meta_data' => 'MetaData',
        'customs_documentation' => 'CustomsDocumentation',
        'guaranteed_only' => 'GuaranteedOnly',
        'delivery_date' => 'DeliveryDate'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'consignment_reference_provided_by_customer' => 'setConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'setShippingDate',
        'addresses' => 'setAddresses',
        'packages' => 'setPackages',
        'source' => 'setSource',
        'meta_data' => 'setMetaData',
        'customs_documentation' => 'setCustomsDocumentation',
        'guaranteed_only' => 'setGuaranteedOnly',
        'delivery_date' => 'setDeliveryDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'consignment_reference_provided_by_customer' => 'getConsignmentReferenceProvidedByCustomer',
        'shipping_date' => 'getShippingDate',
        'addresses' => 'getAddresses',
        'packages' => 'getPackages',
        'source' => 'getSource',
        'meta_data' => 'getMetaData',
        'customs_documentation' => 'getCustomsDocumentation',
        'guaranteed_only' => 'getGuaranteedOnly',
        'delivery_date' => 'getDeliveryDate'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['consignment_reference_provided_by_customer'] = isset($data['consignment_reference_provided_by_customer']) ? $data['consignment_reference_provided_by_customer'] : null;
        $this->container['shipping_date'] = isset($data['shipping_date']) ? $data['shipping_date'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['customs_documentation'] = isset($data['customs_documentation']) ? $data['customs_documentation'] : null;
        $this->container['guaranteed_only'] = isset($data['guaranteed_only']) ? $data['guaranteed_only'] : null;
        $this->container['delivery_date'] = isset($data['delivery_date']) ? $data['delivery_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['addresses'] === null) {
            $invalid_properties[] = "'addresses' can't be null";
        }
        if ($this->container['packages'] === null) {
            $invalid_properties[] = "'packages' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['addresses'] === null) {
            return false;
        }
        if ($this->container['packages'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets consignment_reference_provided_by_customer
     * @return string
     */
    public function getConsignmentReferenceProvidedByCustomer()
    {
        return $this->container['consignment_reference_provided_by_customer'];
    }

    /**
     * Sets consignment_reference_provided_by_customer
     * @param string $consignment_reference_provided_by_customer
     * @return $this
     */
    public function setConsignmentReferenceProvidedByCustomer($consignment_reference_provided_by_customer)
    {
        $this->container['consignment_reference_provided_by_customer'] = $consignment_reference_provided_by_customer;

        return $this;
    }

    /**
     * Gets shipping_date
     * @return \DateTime
     */
    public function getShippingDate()
    {
        return $this->container['shipping_date'];
    }

    /**
     * Sets shipping_date
     * @param \DateTime $shipping_date
     * @return $this
     */
    public function setShippingDate($shipping_date)
    {
        $this->container['shipping_date'] = $shipping_date;

        return $this;
    }

    /**
     * Gets addresses
     * @return \ChrisHemmings\Electio\Client\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \ChrisHemmings\Electio\Client\Model\Address[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets packages
     * @return \ChrisHemmings\Electio\Client\Model\Package[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     * @param \ChrisHemmings\Electio\Client\Model\Package[] $packages
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets source
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \ChrisHemmings\Electio\Client\Model\MetaData[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \ChrisHemmings\Electio\Client\Model\MetaData[] $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets customs_documentation
     * @return \ChrisHemmings\Electio\Client\Model\CustomsDocumentation
     */
    public function getCustomsDocumentation()
    {
        return $this->container['customs_documentation'];
    }

    /**
     * Sets customs_documentation
     * @param \ChrisHemmings\Electio\Client\Model\CustomsDocumentation $customs_documentation
     * @return $this
     */
    public function setCustomsDocumentation($customs_documentation)
    {
        $this->container['customs_documentation'] = $customs_documentation;

        return $this;
    }

    /**
     * Gets guaranteed_only
     * @return bool
     */
    public function getGuaranteedOnly()
    {
        return $this->container['guaranteed_only'];
    }

    /**
     * Sets guaranteed_only
     * @param bool $guaranteed_only
     * @return $this
     */
    public function setGuaranteedOnly($guaranteed_only)
    {
        $this->container['guaranteed_only'] = $guaranteed_only;

        return $this;
    }

    /**
     * Gets delivery_date
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     * @param \DateTime $delivery_date
     * @return $this
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ChrisHemmings\Electio\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChrisHemmings\Electio\ObjectSerializer::sanitizeForSerialization($this));
    }
}


