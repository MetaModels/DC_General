<?php
/**
 * PHP version 5
 * @package    generalDriver
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

namespace DcGeneral\Data\Interfaces;

interface Config
{
	/**
	 * Static constructor.
	 *
	 * @todo: do we want to keep this behaviour? Third party will not know the correct class anyway.
	 *
	 * @return mixed
	 */
	public static function init();

	/**
	 * Get specific id.
	 *
	 * @return mixed
	 */
	public function getId();

	/**
	 * Set specific id.
	 *
	 * @param mixed $mixId
	 *
	 * @return Config
	 */
	public function setId($mixId);

	/**
	 * Get list of specific ids to be retrieved.
	 *
	 * @return array
	 */
	public function getIds();

	/**
	 * Set list of specific ids to be retrieved.
	 *
	 * @param array $arrIds The list of ids to be retrieved.
	 *
	 * @return Config
	 */
	public function setIds($arrIds);

	/**
	 * Return flag if only ids should be returned.
	 *
	 * @return boolean
	 */
	public function getIdOnly();

	/**
	 * Set flag for return id only.
	 *
	 * @param boolean $blnIdOnly Boolean flag to determine that only Ids shall be returned when calling fetchAll().
	 *
	 * @return Config
	 */
	public function setIdOnly($blnIdOnly);

	/**
	 * Get the offset to start with.
	 *
	 * This is the offset to use for pagination.
	 *
	 * @return integer
	 */
	public function getStart();

	/**
	 * Set the offset to start with.
	 *
	 * This is the offset to use for pagination.
	 *
	 * @param integer $intStart Number of first element to return.
	 *
	 * @return Config
	 */
	public function setStart($intStart);

	/**
	 * Get the limit for results.
	 *
	 * This is the amount of items to return for pagination.
	 *
	 * @return integer
	 */
	public function getAmount();

	/**
	 * Set the limit for results.
	 *
	 * This is the amount of items to return for pagination.
	 *
	 * @param integer $intAmount
	 *
	 * @return Config
	 */
	public function setAmount($intAmount);

	/**
	 * Get the list with filter options.
	 *
	 * @return array
	 */
	public function getFilter();

	/**
	 * Set the list with filter options.
	 *
	 * @param array $arrFilter The array containing the filter values.
	 *
	 * @return Config
	 */
	public function setFilter($arrFilter);

	/**
	 * Get the list of all defined sortings.
	 *
	 * The returning array will be of 'property name' => 'ASC|DESC' nature.
	 *
	 * @return array
	 */
	public function getSorting();

	/**
	 * Set the list of all defined sortings.
	 *
	 * The array must be of 'property name' => 'ASC|DESC' nature.
	 *
	 * @param array $arrSorting The sorting array to use.
	 *
	 * @return array
	 */
	public function setSorting($arrSorting);

	/**
	 * Get the list of fields to be retrieved.
	 *
	 * @return array
	 */
	public function getFields();

	/**
	 * Set the list of fields to be retrieved.
	 *
	 * @param array $arrFields Array of property names.
	 *
	 * @return Config
	 */
	public function setFields($arrFields);

	// TODO: make a property bag out of this.
	/**
	 * Get the additional information.
	 *
	 * @param string $strKey The name of the information to retrieve.
	 *
	 * @return mixed || null
	 */
	public function get($strKey);

	/**
	 * Set the additional information.
	 *
	 * @param string $strKey   The name of the information to retrieve.
	 *
	 * @param mixed  $varValue The value to store.
	 *
	 * @return Config
	 */
	public function set($strKey, $varValue);
}