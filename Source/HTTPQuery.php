<?php
namespace HTTPCore;


class HTTPQuery extends HTTPRequest 
{
	/** @var IHTTPEngine */
	private $engine;
	
	
	public function __construct(IHTTPEngine $engine)
	{
		$this->engine = $engine;
	}
	
	
	public function query(): HTTPResponse {}
	
	public function queryCode(): int {}
	public function querySuccess(?int $code = null, ?int $to = null): bool {}
	public function queryBody(): string {}
	public function queryHeaders(): array {}
	
	public function querySafe(\Exception &$e = null): ?HTTPResponse {}
	public function querySuccessSafe(\Exception &$e = null, ?int $code = null, ?int $to = null): bool {}
}