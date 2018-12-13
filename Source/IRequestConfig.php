<?php
namespace HTTPCore;


interface IRequestConfig
{
	public function setMaxRedirects(int $max): IRequestConfig;
	public function setCURLFlag(int $option, $value = null): IRequestConfig;
	public function setCURLFlags(array $flags): IRequestConfig;
	public function setTimeout(float $executeTimeout, ?float $connectTimeout): IRequestConfig;
	
	public function getMaxRedirects(): int;
	public function getTimeout(): float;
	public function getConnectionTimeout(): float;
	public function getCURLFlags(): array;
}