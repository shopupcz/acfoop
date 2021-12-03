<?php

namespace ShopUp\WordPress\Acfoop;

use ShopUp\WordPress\Acfoop\Interfaces\Buildable;
use ShopUp\WordPress\Acfoop\Traits\ParentField;
use ShopUp\WordPress\Acfoop\Traits\Renderable;

class Block implements Buildable
{
	use Renderable {
		render as public contentRender;
	}
	use ParentField {
		getChildren as private getFields;
		addChild as public addField;
		setChildren as private setFields;
	}

	/** @var string */
	private $id;

	/** @var array */
	private $classes;

	/** @var bool */
	private $useWrapper;

	/**
	 * Builds all components with a schema.
	 *
	 * @return static
	 */
	public function build(bool $useWrapper = false): self
	{
		$this->useWrapper = $useWrapper;
		foreach ($this->getFields() as $field) {
			$field->setSelector($this->context);
			if ($field instanceof Buildable) {
				$field->build();
			}
		}
		return $this;
	}

	public function render(string $template): string
	{
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
	 * @return static
	 */
	public function setId(string $id): self
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @return array
	 */
	public function getClasses(): array
	{
		return $this->classes;
	}

	/**
	 * @param string $class
	 * @return static
	 */
	public function addClass(string $class): self
	{
		$this->classes[] = $class;
		return $this;
	}

	/**
	 * @param array $classes
	 * @return $this
	 */
	public function setClasses(array $classes): self
	{
		$this->classes = $classes;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getUseWrapper(): bool
	{
		return $this->useWrapper;
	}
}
