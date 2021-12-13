<?php

namespace Decorator;

use Service\Formatting\HtmlTextFormatter;

class LayoutDecorator extends HtmlTextFormatter
{
	public function format(string $text): string
	{
		return $this->elementHeader().$text.$this->elementFooter();
	}
	public function elementHeader():string
	{
		return '<h1>Внимание</h1>';
	}
	public function elementFooter(): string
	{
		return '<h4>Ждём вас</h4>';
	}
}