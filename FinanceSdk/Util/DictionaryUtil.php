<?php
namespace FinanceSdk\Util;


/**
 * 集合对象的元素处理
 */
class DictionaryUtil 
{
	public static function Add($dic, $key, $value) {
		if (null == $value) {
			return;
		}
		if (null == $dic)
		{
			$dic = Array();
		}
		foreach($dic as $itemKey=>$itemValue)
		{
			//区分大小写
			if ($itemKey == $key) {
				$dic[$key] = $itemValue;
				return;
			}
		}
		$dic[$key] = $value;

	}

	public static function Get($dic, $key)
	{
		if (array_key_exists($key, $dic)) {
			return $dic[$key];
		}

		return null;
	}

	public static function Pop(&$dic, $key)
	{
		$value = null;
		if (array_key_exists($key, $dic)) {
			$value = $dic[$key];
			unset($dic[$key]);
		}

		return $value;
	}
}