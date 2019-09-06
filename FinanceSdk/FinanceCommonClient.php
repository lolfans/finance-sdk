<?php
namespace FinanceSdk;
use FinanceSdk\Http\HttpClient;
use FinanceSdk\Http\HttpRequest;

class FinanceCommonClient{

    /**
     * @param $host
     * @param $path
     * @param $code
     * @param $signType
     * @param $method
     * @param $appKey
     * @param $appSecret
     * @param array $params
     * @return mixed
     */
	public function CommonRequest($host,$path,$code,$signType,$method,$appKey,$appSecret,$params=[])
    {
        $request = new HttpRequest($host, $path, $method,$appKey,$appSecret);
        $request->setHeader("sn_api_code", $code);
        $request->setHeader("Content-Type",'application/json;charset=UTF-8');
        $request->setHeader("sn_signType",$signType);

        foreach ($params as $key => $value){
            $request->setQuery($key, $value);
        }

        $response = HttpClient::execute($request);

        return $response->getBody();
    }

}
