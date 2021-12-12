<?php

namespace Decorator;

use Service\Formatting\HtmlTextFormatter;

class layoutDecorator extends HtmlTextFormatter
{
	public function format(string $text): string
	{
		return $this->elementHeader().$text.$this->elementFooter();
	}
	public function elementHeader():string
	{
		return '<h1>Внимание</h1>'.'\n';
	}
	public function elementFooter(): string
	{
		return '<h4>Ждём вас</h4>'.'\n';
	}
}