<?php

namespace ShopUp\Acfoop\Traits;

use ShopUp\Acfoop\Fields\Field;

trait ParentField
{
	/** @var Field[] */
	private array $children = [];

	/**
	 * @return Field[]
	 */
	public function getChildren(): array
	{
		return $this->children;
	}

	/**
	 * @param Field $field
	 * @return static
	 */
	public function addChild(Field $field): self
	{
		$this->children[$field->getKey()] = $field;
		return $this;
	}

	/**
	 * @param Field[] $children
	 * @return static
	 */
	public function setChildren(array $children): self
	{
		foreach($children as $child) {
			$this->children[$child->getKey()] = $child;
		}
		return $this;
	}

	/**
	 * @param string $child
	 *
	 * @return Field
	 */
	public function __get( string $child ): Field {
		return $this->children[ $child ];
	}
}
