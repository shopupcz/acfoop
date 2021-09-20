<?php

namespace ShopUp\Acfoop;

abstract class Field
{
	/** @var string */
	private string $key;

	/** @var null|Field */
	private ?Field $parent = null;

	public function __construct(string $key)
	{
		$this->key = $key;
	}

	/**
	 * @param string $key
	 * @return static
	 */
	public static function make(string $key)
	{
		return new static($key);
	}

	/**
	 * @return Field|null
	 */
	public function getParent(): ?Field
	{
		return $this->parent;
	}

	/**
	 * @param Field|null $parent
	 */
	public function setParent(?Field $parent): void
	{
		$this->parent = $parent;
	}
}
