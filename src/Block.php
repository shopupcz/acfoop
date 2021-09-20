<?php

namespace ShopUp\Acfoop;

use ShopUp\Acfoop\Fields\Field;
use ShopUp\Acfoop\Interfaces\Buildable;
use ShopUp\Acfoop\Traits\Renderable;

class Block implements Buildable
{
	use Renderable {
		render as public contentRender;
	}

	/** @var string */
	private $id;

	/** @var array */
	private $classes;

	/** @var Field[] */
	private $fields = [];

	/**
	 * Builds all components with a schema.
	 *
	 * @return static
	 */
	public function build(): self
	{
		foreach ($this->fields as $field) {
			if ($field instanceof Buildable) {
				$field->build();
			}
		}
		return $this;
	}

	public function render(string $template): string {
		return View::render(
			__DIR__ . '/template.phtml',
			[
				'block' => $this,
				'content' => $this->contentRender($template)
			]
		);
	}

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
	public function addField(Field $field): self
	{
		$this->fields[] = $field;
		return $this;
	}
}
