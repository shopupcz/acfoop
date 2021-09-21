<?php

namespace ShopUp\Acfoop\Helpers;

use ShopUp\Acfoop\Fields\Field;
use ShopUp\Acfoop\Interfaces\Buildable;

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
