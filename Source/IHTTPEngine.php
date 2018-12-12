<?php
namespace HTTPCore;


interface IHTTPEngine
{
	public function __clone();
	public function request(HTTPRequest $request): HTTPResponse;
}