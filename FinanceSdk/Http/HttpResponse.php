<?php
namespace FinanceSdk\Http;

/**
 * @Description 请求返回信息
 * @ProjectName: HttpResponse.php
 * @Package:
 * @ClassName
 * @Author  <a href="mailto:250165296@qq.com">罗明俊</a>
 * @Date 14:46 2019/8/6 0006
 * @Param
 * @exception
 * @return
 * @version v1.0.0
 **/
class HttpResponse
{
	private $content;
	private $body;
	private $header;
	private $requestId;
	private $errorMessage;
	private $contentType;
	private $httpStatusCode;
	
	public function getContent()
	{
		return $this->content;
	}

	public function setContent($content)
	{
		$this->content = $content;
	}

	public function setHeader($header)
	{
		$this->header = $header;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setBody($body)
	{
		$this->body = $body;
	}

	public function getBody()
	{
		return $this->body;
	}

	public function getRequestId()
	{
		return $this->requestId;
	}

	public function getErrorMessage()
	{
		return $this->errorMessage;
	}
	
	public function getHttpStatusCode()
	{
		return $this->httpStatusCode;
	}
	
	public function setHttpStatusCode($httpStatusCode)
	{
		$this->httpStatusCode  = $httpStatusCode;
	}

	public function getContentType()
	{
		return $this->contentType;
	}
	
	public function setContentType($contentType)
	{
		$this->contentType  = $contentType;
	}
	
	public function getSuccess()
	{
		if(200 <= $this->httpStatusCode && 300 > $this->httpStatusCode)
		{
			return true;
		}
		return false;
	}

	/**
	*根据headersize大小，区分返回的header和body
	*/
	public function setHeaderSize($headerSize) {
		if (0 < $headerSize && 0 < strlen($this->content)) {
			$this->header = substr($this->content, 0, $headerSize);
			self::extractKey();
		}
		if (0 < $headerSize && $headerSize < strlen($this->content)) {
			$this->body = substr($this->content, $headerSize);
		}
	}

	/**
	*提取header中的requestId和errorMessage
	*/
	private function extractKey() {
		if (0 < strlen($this->header)) {
			$headers = explode("\r\n", $this->header);
			foreach ($headers as $value) {
				if(strpos($value, "X-Ca-Request-Id:") !== false) 
				{
					$this->requestId = trim(substr($value, strlen("X-Ca-Request-Id:")));
				}
				if(strpos($value, "X-Ca-Error-Message:") !== false) 
				{
					$this->errorMessage = trim(substr($value, strlen("X-Ca-Error-Message:")));
				}
			}
		}
	}
}