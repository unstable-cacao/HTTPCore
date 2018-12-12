<?php
namespace HTTPCore;


interface IHTTPEngineDecorator extends IHTTPEngine
{
	public function setChild(IHTTPEngine $engine): IHTTPEngineDecorator; 
}