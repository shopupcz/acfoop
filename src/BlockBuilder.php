<?php

namespace ShopUp\WordPress\Acfoop;

class BlockBuilder
{
	/**
	 * @param array $_block
	 * @param bool|int|string $context
	 * @return Block
	 */
	public static function make(array $_block, $context = false): Block
	{
		$block = new Block();
		$block->setID(self::getBlockId($_block));
		$block->setClasses(self::getBlockClasses($_block));
		$block->setContext($context);

		return $block;
	}

	/**
	 * @param array $_block
	 * @return string
	 */
	private static function getBlockId(array $_block): string
	{
		if (!empty($_block['anchor'])) {
			return $_block['anchor'];
		}

		return 'block-' . $_block['id'];
	}

	/**
	 * @param array $_block
	 * @return array
	 */
	private static function getBlockClasses(array $_block): array
	{
		if(array_key_exists('className', $_block)) {
			return explode(' ', $_block['className']);
		}
		return [];
	}
}
