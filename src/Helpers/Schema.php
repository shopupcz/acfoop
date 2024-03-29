<?php

namespace ShopUp\WordPress\Acfoop\Helpers;

use ShopUp\WordPress\Acfoop\Fields\Field;

class Schema
{

	/** @var Field[] */
	private array $records = [];

	/**
	 * @param Field $field
	 */
	public function addRecord(Field $field)
	{
		$this->records[] = $field;
	}

	/**
	 * @return Field[]
	 */
	public function build(): array
	{
		$fields = [];
		foreach ($this->records as $record) {
			$fields[$record->getKey()] = $record->duplicate();
		}
		return $fields;
	}
}
