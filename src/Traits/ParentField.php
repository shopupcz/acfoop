<?php

namespace ShopUp\WordPress\Acfoop\Traits;

use ShopUp\WordPress\Acfoop\Block;
use ShopUp\WordPress\Acfoop\Fields\Field;
use ShopUp\WordPress\Acfoop\Interfaces\Buildable;

trait ParentField
{
	/** @var Field[] */
	private array $children = [];

	/** @var bool|int|string */
	private $context = false;

	/**
	 * @param bool|int|string $context
	 */
	public function setContext( $context )
	{
		$this->context = $context;
	}

	/**
	 * @return bool|int|string
	 */
	public function getContext()
	{
		return $this->context;
	}

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
		if (!empty(preg_grep("/.*(ParentField)/", class_uses(get_class($field))))) {
			$field->setContext($this->context);
		} else {
			$field->setSelector($this->context);
		}

		if (!$this instanceof Block) {
			$field->setParent($this);
		}
		$this->children[$field->getKey()] = $field;
		return $this;
	}

	/**
	 * @param Field[] $children
	 * @return static
	 */
	public function setChildren(array $children): self
	{
		foreach ($children as $child) {
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
	public function __get(string $child): Field
	{
		return $this->children[$child];
	}
}
