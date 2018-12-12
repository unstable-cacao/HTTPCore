<?php
namespace HTTPCore;


use Structura\URL;


class HTTPRequest
{
	public function __clone() {}
	
	/**
	 * @param string|URL $url
	 * @return HTTPRequest
	 */
	public function setURL($url): HTTPRequest {}
	public function setProtocol(string $protocol): HTTPRequest {}
	public function setDomain(string $domain): HTTPRequest {}
	public function setURI(string $uri): HTTPRequest {}
	public function setPort(int $port): HTTPRequest {}
	
	public function setMethod(string $method): HTTPRequest {}
	
	public function setQueryParam(string $name, string $value): HTTPRequest {}
	public function setQueryParams(array $params): HTTPRequest {}
	public function setPostParam(string $name, string $value): HTTPRequest {}
	public function setPostParams(array $params): HTTPRequest {}
	public function setHeader(string $name, ?string $value = null): HTTPRequest {}
	public function setHeaders(array $headers): HTTPRequest {}
	
	/**
	 * @param string|array|\stdClass $body
	 * @return HTTPRequest
	 */
	public function setBody($body): HTTPRequest {}
}