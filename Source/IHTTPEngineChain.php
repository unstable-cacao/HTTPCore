<?php
namespace HTTPCore;


interface IHTTPEngineChain
{
	public function setEngine(IHTTPEngine $engine);
	public function preRequest(HTTPRequest $request): void;
	public function postRequest(HTTPRequest $request, HTTPResponse $response): void;
	public function onException(HTTPRequest $request, \Throwable $exception): void;
}