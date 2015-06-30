<?php
/**
 * File for class ApiStructArrayOfNewsRelatedSearch
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
/**
 * This class stands for ArrayOfNewsRelatedSearch Struct
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
class ApiStructArrayOfNewsRelatedSearch extends ApiWsdlClass
{
    /**
     * The NewsRelatedSearch
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $NewsRelatedSearch;
    /**
     * Constructor method for ArrayOfNewsRelatedSearch
     * @see parent::__construct()
     * @param array $newsRelatedSearch
     */
    public function __construct(array $newsRelatedSearch = array())
    {
        parent::__construct(array('NewsRelatedSearch'=>$newsRelatedSearch), false);
    }
    /**
     * Get NewsRelatedSearch value
     * @return array
     */
    public function getNewsRelatedSearch()
    {
        return $this->NewsRelatedSearch;
    }
    /**
     * Set NewsRelatedSearch value
     * @param array $newsRelatedSearch
     * @return ApiStructArrayOfNewsRelatedSearch
     */
    public function setNewsRelatedSearch(array $newsRelatedSearch = array())
    {
        $this->NewsRelatedSearch = $newsRelatedSearch;
        return $this;
    }
    /**
     * Returns the current element
     * @see ApiWsdlClass::current()
     * @return ApiStructNewsRelatedSearch
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see ApiWsdlClass::item()
     * @param int $index
     * @return ApiStructNewsRelatedSearch
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see ApiWsdlClass::first()
     * @return ApiStructNewsRelatedSearch
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see ApiWsdlClass::last()
     * @return ApiStructNewsRelatedSearch
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see ApiWsdlClass::offsetGet()
     * @param int $offset
     * @return ApiStructNewsRelatedSearch
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see ApiWsdlClass::getAttributeName()
     * @return string NewsRelatedSearch
     */
    public function getAttributeName()
    {
        return 'NewsRelatedSearch';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ApiWsdlClass::__set_state()
     * @uses ApiWsdlClass::__set_state()
     * @param array $array the exported values
     * @return ApiStructArrayOfNewsRelatedSearch
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}