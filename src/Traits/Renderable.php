<?php

namespace ShopUp\Wordpress\Acfoop\Traits;

use Exception;
use ShopUp\Wordpress\Acfoop\View;

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
