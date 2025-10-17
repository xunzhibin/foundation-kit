<?php
namespace Xzb\FoundationKit;

class ArrayObject extends \ArrayObject
{
	/**
	 * 构造函数
	 * 
	 * @param array|object $array
	 * @param int $flags
	 * @param string $iteratorClass 
	 */
	public function __construct($array = [], int $flags = \ArrayObject::ARRAY_AS_PROPS, string $iteratorClass = \ArrayIterator::class)
	{
		parent::__construct($array, $flags, $iteratorClass);
	}

}
