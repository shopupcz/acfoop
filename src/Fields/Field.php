<?php

namespace ShopUp\WordPress\Acfoop\Fields;

abstract class Field
{
	/** @var string */
	private string $key;

	/** @var null|Field */
	private ?Field $parent = null;

	/** @var mixed $value */
	private $value;

	/**
	 * @param string $key
	 */
	public function __construct(string $key)
	{
		$this->key = $key;
	}

	/**
	 * @param string $key
	 * @return static
	 */
	public static function make(string $key): Field
	{
		return new static($key);
	}

	/**
	 * @return static
	 */
	public function duplicate(): Field
	{
		return clone($this);
	}

	/**
	 * @return bool
	 */
	public function hasParent(): bool
	{
		return !is_null($this->parent);
	}

	/**
	 * @return string
	 */
	public function getFieldName(): string
	{
		return $this->hasParent() ? $this->parent->getFieldName() . '_' . $this->key : $this->key;
	}

	/**
	 * @return string
	 */
	public function getKey(): string
	{
		return $this->key;
	}

	/**
	 * @return Field|null
	 */
	public function getParent(): ?Field
	{
		return $this->parent;
	}

	/**
	 * @param Field $parent
	 * @return static
	 */
	public function setParent(Field $parent): self
	{
		$this->parent = $parent;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValue()
	{
		if (!isset($this->value)) {
			$this->value = get_field($this->getFieldName());
		}

		return $this->value;
	}
}
