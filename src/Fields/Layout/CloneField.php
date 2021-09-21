<?php

namespace ShopUp\WordPress\Acfoop\Fields\Layout;

use Exception;
use ShopUp\WordPress\Acfoop\Fields\Field;
use ShopUp\WordPress\Acfoop\Traits\Renderable;

abstract class CloneField extends Field
{
	protected string $template;

	use Renderable {
		render as public renderContent;
	}

	/**
	 * @return string
	 * @throws Exception
	 */
	public function render(): string
	{
		if (!isset($this->template)) {
			throw new Exception('You need to set the template in class ' . get_called_class());
		}
		$this->getValue();
		return $this->renderContent($this->template);
	}
}
