<?php

namespace DanielJHarvey\CLIColours;

class BashColours {
	
	protected $foreground=[
		'default'=>39,
		'black'=>30,
		'red'=>31,
		'green'=>32,
		'yellow'=>33,
		'blue'=>34,
		'magenta'=>35,
		'cyan'=>36,
		'lightGray'=>37,
		'darkGray'=>90,
		'lightRed'=>91,
		'lightGreen'=>92,
		'lightYellow'=>93,
		'lightBlue'=>94,
		'lightMagenta'=>95,
		'lightCyan'=>96,
		'white'=>97
	];

	protected $background=[
		'default'=>49,
		'black'=>40,
		'red'=>41,
		'green'=>42,
		'yellow'=>43,
		'blue'=>44,
		'magenta'=>45,
		'cyan'=>46,
		'lightGray'=>47,
		'darkGray'=>100,
		'lightRed'=>101,
		'lightGreen'=>102,
		'lightYellow'=>103,
		'lightBlue'=>104,
		'lightMagenta'=>105,
		'lightCyan'=>106,
		'white'=>107
	];

	protected function createEscapeString($code) {
		return "\e[".$code."m";
	}

	protected function getForegroundCode($title=false) {
		if (!$title) return $this->foreground['default'];
		if (array_key_exists($title,$this->foreground)) {
			return $this->foreground[$title];
		}
		return $this->foreground['default'];
	}

	protected function getForegroundEscapeString($title) {
		$code=$this->getForegroundCode($title);
		return $this->createEscapeString($code);
	}

	protected function getBackgroundCode($title=false) {
		if (!$title) return $this->background['default'];
		if (array_key_exists($title,$this->background)) {
			return $this->background[$title];
		}
		return $this->background['default'];
	}

	protected function getBackgroundEscapeString($title) {
		$code=$this->getBackgroundCode($title);
		return $this->createEscapeString($code);
	}
	
	public function formatString($string,$foreground='default',$background='default') {
		$output="";
		if ($foreground!='default') {
			$output.=$this->getForegroundEscapeString($foreground);
		}
		if ($background!='default') {
			$output.=$this->getBackgroundEscapeString($background);
		}
		$output.=$string;
		$output.=$this->createEscapeString(0);
		return $output;

	}

	public function black($string) {
		return $this->formatString($string,'black');
	}

	public function red($string) {
		return $this->formatString($string,'red');
	}

	public function green($string) {
		return $this->formatString($string,'green');
	}

	public function yellow($string) {
		return $this->formatString($string,'yellow');
	}

	public function blue($string) {
		return $this->formatString($string,'blue');
	}

	public function magenta($string) {
		return $this->formatString($string,'magenta');
	}

	public function cyan($string) {
		return $this->formatString($string,'cyan');
	}

	public function lightGray($string) {
		return $this->formatString($string,'lightGray');
	}

	public function darkGray($string) {
		return $this->formatString($string, 'darkGray');
	}

	public function lightRed($string) {
		return $this->formatString($string,'lightRed');
	}

	public function lightGreen($string) {
		return $this->formatString($string,'lightGreen');
	}

	public function lightYellow($string) {
		return $this->formatString($string,'lightYellow');
	}

	public function lightBlue($string) {
		return $this->formatString($string,'lightBlue');
	}

	public function lightMagenta($string) {
		return $this->formatString($string,'lightMagenta');
	}

	public function white($string) {
		return $this->formatString($string,'white');
	}

}
