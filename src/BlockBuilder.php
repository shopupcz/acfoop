<?php

namespace ShopUp\Acfoop;

class BlockBuilder
{
	/**
	 * @param array $_block
	 * @return Block
	 */
	static function make(array $_block): Block
	{
		$block = new Block();
		$block->setID(self::getBlockId($_block));
		$block->setClasses(self::getBlockClasses($_block));

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
		return explode(' ', $_block['className']);
	}
}
