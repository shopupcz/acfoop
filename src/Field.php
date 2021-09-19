<?php

namespace ShopUp\Acfoop;

abstract class Field
{
	/** @var string */
	private $key;

	/** @var null|Field */
	private $parent = null;

	public function __construct(string $key)
	{
		$this->key = $key;
	}

	abstract public static function make(string $key): self;

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
