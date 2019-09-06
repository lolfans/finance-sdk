<?php
namespace FinanceSdk\Util;
/**
 * @Description 依赖加载
 * @ProjectName: Autoloader.php
 * @Package:
 * @ClassName
 * @Author  <a href="mailto:250165296@qq.com">罗明俊</a>
 * @Date 14:47 2019/8/6 0006
 * @Param
 * @exception
 * @return
 * @version v1.0.0
 **/
spl_autoload_register("Autoloader::autoload");

class Autoloader
{	
	private static $autoloadPathArray = array(
		"Constant",
		"Http",
		"Util"
	);
	
	public static function autoload($className)
	{
		foreach (self::$autoloadPathArray as $path) {
			$file = dirname(__DIR__).DIRECTORY_SEPARATOR.$path.DIRECTORY_SEPARATOR.$className.".php";
			$file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
			if(is_file($file)){
				include_once $file;
				break;
			}
		}
	}
	
	public static function addAutoloadPath($path)
	{
		array_push(self::$autoloadPathArray, $path);
	}
}

?>