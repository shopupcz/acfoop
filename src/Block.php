<?php

namespace ShopUp\Acfoop;

class Block
{
	/** @var string */
	private $id;

	/** @var array */
	private $classes;

	/** @var Field[] */
	private $fields = [];

	/**
	 * @return string
	 */
	public function getId(): string
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId(string $id): void
	{
		$this->id = $id;
	}

	/**
	 * @return array
	 */
	public function getClasses(): array
	{
		return $this->classes;
	}

	/**
	 * @param array $classes
	 */
	public function setClasses(array $classes): void
	{
		$this->classes = $classes;
	}

	/**
	 * @return Field[]
	 */
	public function getFields(): array
	{
		return $this->fields;
	}

	/**
	 * @param Field $field
	 * @return $this
	 */
	public function addField(Field $field): self {
		$this->fields[] = $field;
		return $this;
	}
}
