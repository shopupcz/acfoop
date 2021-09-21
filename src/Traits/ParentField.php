<?php

namespace ShopUp\Acfoop\Traits;

use ShopUp\Acfoop\Fields\Field;
use ShopUp\Acfoop\Interfaces\Buildable;

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
			$child->setParent($this);
			if ($child instanceof Buildable) {
				$child->build();
			}
			$this->children[$child->getKey()] = $child;
		}
		return $this;
	}

	/**
	 * FIXME: Isn't there a better way to to this?
	 *  Try to Google how to work with references in foreach loop.
	 *
	 * @return static
	 */
	public function duplicate(): Field
	{
		$clone = clone($this);
		$children = [];
		foreach ($clone->children as $child) {
			$children[] = $child->duplicate();
		}
		$clone->setChildren($children);
		return $clone;
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
