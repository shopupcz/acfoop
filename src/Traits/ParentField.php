<?php

namespace ShopUp\Acfoop\Traits;

use ShopUp\Acfoop\Field;

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
		$this->children[] = $field;
		return $this;
	}

	/**
	 * @param Field[] $children
	 * @return static
	 */
	public function setChildren(array $children): self
	{
		$this->children = $children;
		return $this;
	}
}
