<?php
namespace FinanceSdk\Http;

use FinanceSdk\Util\HttpUtil;

/**
 * @Description  HttpClient
 * @ProjectName: HttpClient.php
 * @Package: 
 * @ClassName 
 * @Author  <a href="mailto:250165296@qq.com">罗明俊</a>
 * @Date 14:45 2019/8/6 0006
 * @Param 
 * @exception 
 * @return 
 * @version v1.0.0
 **/
class HttpClient
{
	private static $connectTimeout = 30000;//30 second
	private static $readTimeout	= 80000;//80 second
	
	public static function execute($request)
	{
		return HttpUtil::send($request, self::$readTimeout, self::$connectTimeout);
	}
}