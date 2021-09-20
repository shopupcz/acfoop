<?php

namespace ShopUp\Acfoop\Fields\Layout;

use ShopUp\Acfoop\Field;
use ShopUp\Acfoop\Helpers\Schema;
use ShopUp\Acfoop\Traits\ParentField;

/**
 * @method static Repeater make(string $key)
 */
class Repeater extends Field
{
	use ParentField;

	/** @var Schema */
	private Schema $schema;

	/**
	 * @param string $key
	 */
	public function __construct(string $key)
	{
		parent::__construct($key);
		$this->schema = new Schema();
	}

	/**
	 * @param Field $field
	 * @return static
	 */
	public function addChild(Field $field): self
	{
		$this->schema->addRecord($field);
		return $this;
	}

	/**
	 * Initializes children from the schema as cloned objects.
	 */
	public function build()
	{
		if (is_array($this->getValue())) {
			for ($index = 0; $index < count($this->getValue()); $index++) {
				$this->children[] = Group::make($index)
					->setParent($this)
					->setChildren($this->schema->build());
			}
		}
	}

	/**
	 * @return Repeater
	 */
	public function duplicate(): Field
	{
		$this->build();
		return parent::duplicate();
	}
}
