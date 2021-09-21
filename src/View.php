<?php

namespace ShopUp\WordPress\Acfoop;

use Exception;

class View
{
	/**
	 * Generates HTML as output from PHTML template.
	 *
	 * @param string $template
	 * @param array $data
	 * @return string
	 * @throws Exception
	 */
	public static function render(string $template, array $data): string
	{
		if (!file_exists($template)) {
			throw new Exception('Template ' . $template . ' not found!');
		}

		ob_start();
		extract($data);
		include($template);
		$content = ob_get_contents();
		ob_end_clean();

		if (!$content) {
			throw new Exception('Output buffering isn\'t active!');
		}

		return $content;
	}
}
