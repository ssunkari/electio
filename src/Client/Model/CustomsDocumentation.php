<?php
/**
 * CustomsDocumentation
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
 * OpenAPI spec version: 1.0.0
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
 * CustomsDocumentation Class Doc Comment
 *
 * @category    Class
 * @package     ChrisHemmings\Electio
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomsDocumentation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomsDocumentation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'importers_vat_number' => 'string',
        'category_type' => '\ChrisHemmings\Electio\Client\Model\CategoryType',
        'shipper_customs_reference' => 'string',
        'importers_tax_code' => 'string',
        'importers_telephone' => 'string',
        'importers_fax' => 'string',
        'cn23_comments' => 'string',
        'references_of_attached_invoices' => 'string[]',
        'references_of_attached_licences' => 'string[]',
        'category_type_explanation' => 'string',
        'declaration_date' => '\DateTime',
        'office_of_posting' => 'string',
        'reason_for_export' => 'string',
        'shipping_terms' => '\ChrisHemmings\Electio\Client\Model\ShippingTerms',
        'shippers_vat_number' => 'string',
        'designated_person_responsible' => 'string'
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
        'importers_vat_number' => 'ImportersVatNumber',
        'category_type' => 'CategoryType',
        'shipper_customs_reference' => 'ShipperCustomsReference',
        'importers_tax_code' => 'ImportersTaxCode',
        'importers_telephone' => 'ImportersTelephone',
        'importers_fax' => 'ImportersFax',
        'cn23_comments' => 'CN23Comments',
        'references_of_attached_invoices' => 'ReferencesOfAttachedInvoices',
        'references_of_attached_licences' => 'ReferencesOfAttachedLicences',
        'category_type_explanation' => 'CategoryTypeExplanation',
        'declaration_date' => 'DeclarationDate',
        'office_of_posting' => 'OfficeOfPosting',
        'reason_for_export' => 'ReasonForExport',
        'shipping_terms' => 'ShippingTerms',
        'shippers_vat_number' => 'ShippersVatNumber',
        'designated_person_responsible' => 'DesignatedPersonResponsible'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'importers_vat_number' => 'setImportersVatNumber',
        'category_type' => 'setCategoryType',
        'shipper_customs_reference' => 'setShipperCustomsReference',
        'importers_tax_code' => 'setImportersTaxCode',
        'importers_telephone' => 'setImportersTelephone',
        'importers_fax' => 'setImportersFax',
        'cn23_comments' => 'setCn23Comments',
        'references_of_attached_invoices' => 'setReferencesOfAttachedInvoices',
        'references_of_attached_licences' => 'setReferencesOfAttachedLicences',
        'category_type_explanation' => 'setCategoryTypeExplanation',
        'declaration_date' => 'setDeclarationDate',
        'office_of_posting' => 'setOfficeOfPosting',
        'reason_for_export' => 'setReasonForExport',
        'shipping_terms' => 'setShippingTerms',
        'shippers_vat_number' => 'setShippersVatNumber',
        'designated_person_responsible' => 'setDesignatedPersonResponsible'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'importers_vat_number' => 'getImportersVatNumber',
        'category_type' => 'getCategoryType',
        'shipper_customs_reference' => 'getShipperCustomsReference',
        'importers_tax_code' => 'getImportersTaxCode',
        'importers_telephone' => 'getImportersTelephone',
        'importers_fax' => 'getImportersFax',
        'cn23_comments' => 'getCn23Comments',
        'references_of_attached_invoices' => 'getReferencesOfAttachedInvoices',
        'references_of_attached_licences' => 'getReferencesOfAttachedLicences',
        'category_type_explanation' => 'getCategoryTypeExplanation',
        'declaration_date' => 'getDeclarationDate',
        'office_of_posting' => 'getOfficeOfPosting',
        'reason_for_export' => 'getReasonForExport',
        'shipping_terms' => 'getShippingTerms',
        'shippers_vat_number' => 'getShippersVatNumber',
        'designated_person_responsible' => 'getDesignatedPersonResponsible'
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
        $this->container['importers_vat_number'] = isset($data['importers_vat_number']) ? $data['importers_vat_number'] : null;
        $this->container['category_type'] = isset($data['category_type']) ? $data['category_type'] : null;
        $this->container['shipper_customs_reference'] = isset($data['shipper_customs_reference']) ? $data['shipper_customs_reference'] : null;
        $this->container['importers_tax_code'] = isset($data['importers_tax_code']) ? $data['importers_tax_code'] : null;
        $this->container['importers_telephone'] = isset($data['importers_telephone']) ? $data['importers_telephone'] : null;
        $this->container['importers_fax'] = isset($data['importers_fax']) ? $data['importers_fax'] : null;
        $this->container['cn23_comments'] = isset($data['cn23_comments']) ? $data['cn23_comments'] : null;
        $this->container['references_of_attached_invoices'] = isset($data['references_of_attached_invoices']) ? $data['references_of_attached_invoices'] : null;
        $this->container['references_of_attached_licences'] = isset($data['references_of_attached_licences']) ? $data['references_of_attached_licences'] : null;
        $this->container['category_type_explanation'] = isset($data['category_type_explanation']) ? $data['category_type_explanation'] : null;
        $this->container['declaration_date'] = isset($data['declaration_date']) ? $data['declaration_date'] : null;
        $this->container['office_of_posting'] = isset($data['office_of_posting']) ? $data['office_of_posting'] : null;
        $this->container['reason_for_export'] = isset($data['reason_for_export']) ? $data['reason_for_export'] : null;
        $this->container['shipping_terms'] = isset($data['shipping_terms']) ? $data['shipping_terms'] : null;
        $this->container['shippers_vat_number'] = isset($data['shippers_vat_number']) ? $data['shippers_vat_number'] : null;
        $this->container['designated_person_responsible'] = isset($data['designated_person_responsible']) ? $data['designated_person_responsible'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['category_type'] === null) {
            $invalid_properties[] = "'category_type' can't be null";
        }
        if ($this->container['declaration_date'] === null) {
            $invalid_properties[] = "'declaration_date' can't be null";
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

        if ($this->container['category_type'] === null) {
            return false;
        }
        if ($this->container['declaration_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets importers_vat_number
     * @return string
     */
    public function getImportersVatNumber()
    {
        return $this->container['importers_vat_number'];
    }

    /**
     * Sets importers_vat_number
     * @param string $importers_vat_number
     * @return $this
     */
    public function setImportersVatNumber($importers_vat_number)
    {
        $this->container['importers_vat_number'] = $importers_vat_number;

        return $this;
    }

    /**
     * Gets category_type
     * @return \ChrisHemmings\Electio\Client\Model\CategoryType
     */
    public function getCategoryType()
    {
        return $this->container['category_type'];
    }

    /**
     * Sets category_type
     * @param \ChrisHemmings\Electio\Client\Model\CategoryType $category_type
     * @return $this
     */
    public function setCategoryType($category_type)
    {
        $this->container['category_type'] = $category_type;

        return $this;
    }

    /**
     * Gets shipper_customs_reference
     * @return string
     */
    public function getShipperCustomsReference()
    {
        return $this->container['shipper_customs_reference'];
    }

    /**
     * Sets shipper_customs_reference
     * @param string $shipper_customs_reference
     * @return $this
     */
    public function setShipperCustomsReference($shipper_customs_reference)
    {
        $this->container['shipper_customs_reference'] = $shipper_customs_reference;

        return $this;
    }

    /**
     * Gets importers_tax_code
     * @return string
     */
    public function getImportersTaxCode()
    {
        return $this->container['importers_tax_code'];
    }

    /**
     * Sets importers_tax_code
     * @param string $importers_tax_code
     * @return $this
     */
    public function setImportersTaxCode($importers_tax_code)
    {
        $this->container['importers_tax_code'] = $importers_tax_code;

        return $this;
    }

    /**
     * Gets importers_telephone
     * @return string
     */
    public function getImportersTelephone()
    {
        return $this->container['importers_telephone'];
    }

    /**
     * Sets importers_telephone
     * @param string $importers_telephone
     * @return $this
     */
    public function setImportersTelephone($importers_telephone)
    {
        $this->container['importers_telephone'] = $importers_telephone;

        return $this;
    }

    /**
     * Gets importers_fax
     * @return string
     */
    public function getImportersFax()
    {
        return $this->container['importers_fax'];
    }

    /**
     * Sets importers_fax
     * @param string $importers_fax
     * @return $this
     */
    public function setImportersFax($importers_fax)
    {
        $this->container['importers_fax'] = $importers_fax;

        return $this;
    }

    /**
     * Gets cn23_comments
     * @return string
     */
    public function getCn23Comments()
    {
        return $this->container['cn23_comments'];
    }

    /**
     * Sets cn23_comments
     * @param string $cn23_comments
     * @return $this
     */
    public function setCn23Comments($cn23_comments)
    {
        $this->container['cn23_comments'] = $cn23_comments;

        return $this;
    }

    /**
     * Gets references_of_attached_invoices
     * @return string[]
     */
    public function getReferencesOfAttachedInvoices()
    {
        return $this->container['references_of_attached_invoices'];
    }

    /**
     * Sets references_of_attached_invoices
     * @param string[] $references_of_attached_invoices
     * @return $this
     */
    public function setReferencesOfAttachedInvoices($references_of_attached_invoices)
    {
        $this->container['references_of_attached_invoices'] = $references_of_attached_invoices;

        return $this;
    }

    /**
     * Gets references_of_attached_licences
     * @return string[]
     */
    public function getReferencesOfAttachedLicences()
    {
        return $this->container['references_of_attached_licences'];
    }

    /**
     * Sets references_of_attached_licences
     * @param string[] $references_of_attached_licences
     * @return $this
     */
    public function setReferencesOfAttachedLicences($references_of_attached_licences)
    {
        $this->container['references_of_attached_licences'] = $references_of_attached_licences;

        return $this;
    }

    /**
     * Gets category_type_explanation
     * @return string
     */
    public function getCategoryTypeExplanation()
    {
        return $this->container['category_type_explanation'];
    }

    /**
     * Sets category_type_explanation
     * @param string $category_type_explanation
     * @return $this
     */
    public function setCategoryTypeExplanation($category_type_explanation)
    {
        $this->container['category_type_explanation'] = $category_type_explanation;

        return $this;
    }

    /**
     * Gets declaration_date
     * @return \DateTime
     */
    public function getDeclarationDate()
    {
        return $this->container['declaration_date'];
    }

    /**
     * Sets declaration_date
     * @param \DateTime $declaration_date
     * @return $this
     */
    public function setDeclarationDate($declaration_date)
    {
        $this->container['declaration_date'] = $declaration_date;

        return $this;
    }

    /**
     * Gets office_of_posting
     * @return string
     */
    public function getOfficeOfPosting()
    {
        return $this->container['office_of_posting'];
    }

    /**
     * Sets office_of_posting
     * @param string $office_of_posting
     * @return $this
     */
    public function setOfficeOfPosting($office_of_posting)
    {
        $this->container['office_of_posting'] = $office_of_posting;

        return $this;
    }

    /**
     * Gets reason_for_export
     * @return string
     */
    public function getReasonForExport()
    {
        return $this->container['reason_for_export'];
    }

    /**
     * Sets reason_for_export
     * @param string $reason_for_export
     * @return $this
     */
    public function setReasonForExport($reason_for_export)
    {
        $this->container['reason_for_export'] = $reason_for_export;

        return $this;
    }

    /**
     * Gets shipping_terms
     * @return \ChrisHemmings\Electio\Client\Model\ShippingTerms
     */
    public function getShippingTerms()
    {
        return $this->container['shipping_terms'];
    }

    /**
     * Sets shipping_terms
     * @param \ChrisHemmings\Electio\Client\Model\ShippingTerms $shipping_terms
     * @return $this
     */
    public function setShippingTerms($shipping_terms)
    {
        $this->container['shipping_terms'] = $shipping_terms;

        return $this;
    }

    /**
     * Gets shippers_vat_number
     * @return string
     */
    public function getShippersVatNumber()
    {
        return $this->container['shippers_vat_number'];
    }

    /**
     * Sets shippers_vat_number
     * @param string $shippers_vat_number
     * @return $this
     */
    public function setShippersVatNumber($shippers_vat_number)
    {
        $this->container['shippers_vat_number'] = $shippers_vat_number;

        return $this;
    }

    /**
     * Gets designated_person_responsible
     * @return string
     */
    public function getDesignatedPersonResponsible()
    {
        return $this->container['designated_person_responsible'];
    }

    /**
     * Sets designated_person_responsible
     * @param string $designated_person_responsible
     * @return $this
     */
    public function setDesignatedPersonResponsible($designated_person_responsible)
    {
        $this->container['designated_person_responsible'] = $designated_person_responsible;

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


