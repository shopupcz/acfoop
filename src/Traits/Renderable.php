<?php

namespace ShopUp\Acfoop\Traits;

use Exception;
use ShopUp\Acfoop\View;

trait Renderable
{
	/**
	 * @param string $template
	 * @return string
	 * @throws Exception
	 */
	public function render(string $template): string
	{
		return View::render(
			$template,
			['block' => $this]
		);
	}
}
