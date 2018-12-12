<?php
namespace HTTPCore;


use HTTPCore\Engine\CurlEngine;


class HTTPConnector
{
	private const DEFAULT_ENGINE = CurlEngine::class;
	
	
	/** @var IHTTPEngine */
	private $engine = null;
	
	/** @var IHTTPEngineDecorator[] */
	private $decorators = [];
	
	/** @var IHTTPEngineChain[] */
	private $chain = [];
	
	
	public function __clone()
	{
		
	}
	
	
	public function setEngine(IHTTPEngine $engine): HTTPConnector
	{
		
	}
	
	/**
	 * @param IHTTPEngineDecorator[] ...$decorators
	 * @return HTTPConnector
	 */
	public function addDecorator(IHTTPEngineDecorator ...$decorators): HTTPConnector
	{
		
	}
	
	/**
	 * @param IHTTPEngineChain[] ...$decorators
	 * @return HTTPConnector
	 */
	public function addChain(IHTTPEngineChain ...$decorators): HTTPConnector
	{
		
	}
	
	
	public function request(HTTPRequest $request): HTTPResponse
	{
		
	}
}