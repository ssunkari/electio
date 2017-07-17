<?php
/**
 * Package
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
 * Package Class Doc Comment
 *
 * @category    Class
 * @package     ChrisHemmings\Electio
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Package implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Package';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reference' => 'string',
        'package_reference_provided_by_customer' => 'string',
        'weight' => '\ChrisHemmings\Electio\Client\Model\Weight',
        'dimensions' => '\ChrisHemmings\Electio\Client\Model\Dimensions',
        'value' => '\ChrisHemmings\Electio\Client\Model\Money',
        'description' => 'string',
        'package_size_reference' => 'string',
        'bar_code' => 'string',
        'items' => '\ChrisHemmings\Electio\Client\Model\Item[]',
        'meta_data' => '\ChrisHemmings\Electio\Client\Model\MetaData[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'reference' => 'Reference',
        'package_reference_provided_by_customer' => 'PackageReferenceProvidedByCustomer',
        'weight' => 'Weight',
        'dimensions' => 'Dimensions',
        'value' => 'Value',
        'description' => 'Description',
        'package_size_reference' => 'PackageSizeReference',
        'bar_code' => 'BarCode',
        'items' => 'Items',
        'meta_data' => 'MetaData'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reference' => 'setReference',
        'package_reference_provided_by_customer' => 'setPackageReferenceProvidedByCustomer',
        'weight' => 'setWeight',
        'dimensions' => 'setDimensions',
        'value' => 'setValue',
        'description' => 'setDescription',
        'package_size_reference' => 'setPackageSizeReference',
        'bar_code' => 'setBarCode',
        'items' => 'setItems',
        'meta_data' => 'setMetaData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reference' => 'getReference',
        'package_reference_provided_by_customer' => 'getPackageReferenceProvidedByCustomer',
        'weight' => 'getWeight',
        'dimensions' => 'getDimensions',
        'value' => 'getValue',
        'description' => 'getDescription',
        'package_size_reference' => 'getPackageSizeReference',
        'bar_code' => 'getBarCode',
        'items' => 'getItems',
        'meta_data' => 'getMetaData'
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
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['package_reference_provided_by_customer'] = isset($data['package_reference_provided_by_customer']) ? $data['package_reference_provided_by_customer'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['package_size_reference'] = isset($data['package_size_reference']) ? $data['package_size_reference'] : null;
        $this->container['bar_code'] = isset($data['bar_code']) ? $data['bar_code'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['value'] === null) {
            $invalid_properties[] = "'value' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalid_properties[] = "'description' can't be null";
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

        if ($this->container['value'] === null) {
            return false;
        }
        if ($this->container['description'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets package_reference_provided_by_customer
     * @return string
     */
    public function getPackageReferenceProvidedByCustomer()
    {
        return $this->container['package_reference_provided_by_customer'];
    }

    /**
     * Sets package_reference_provided_by_customer
     * @param string $package_reference_provided_by_customer
     * @return $this
     */
    public function setPackageReferenceProvidedByCustomer($package_reference_provided_by_customer)
    {
        $this->container['package_reference_provided_by_customer'] = $package_reference_provided_by_customer;

        return $this;
    }

    /**
     * Gets weight
     * @return \ChrisHemmings\Electio\Client\Model\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     * @param \ChrisHemmings\Electio\Client\Model\Weight $weight
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets dimensions
     * @return \ChrisHemmings\Electio\Client\Model\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     * @param \ChrisHemmings\Electio\Client\Model\Dimensions $dimensions
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets value
     * @return \ChrisHemmings\Electio\Client\Model\Money
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param \ChrisHemmings\Electio\Client\Model\Money $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets package_size_reference
     * @return string
     */
    public function getPackageSizeReference()
    {
        return $this->container['package_size_reference'];
    }

    /**
     * Sets package_size_reference
     * @param string $package_size_reference
     * @return $this
     */
    public function setPackageSizeReference($package_size_reference)
    {
        $this->container['package_size_reference'] = $package_size_reference;

        return $this;
    }

    /**
     * Gets bar_code
     * @return string
     */
    public function getBarCode()
    {
        return $this->container['bar_code'];
    }

    /**
     * Sets bar_code
     * @param string $bar_code
     * @return $this
     */
    public function setBarCode($bar_code)
    {
        $this->container['bar_code'] = $bar_code;

        return $this;
    }

    /**
     * Gets items
     * @return \ChrisHemmings\Electio\Client\Model\Item[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \ChrisHemmings\Electio\Client\Model\Item[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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


