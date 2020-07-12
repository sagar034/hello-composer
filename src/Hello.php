<?php

namespace samplecodetest\HelloComposer;

class Hello
{
	private $m_strSting;

	public function sayToDisplay($toSay = "Nothing given")
	{
		return $toSay;
	}

	public function sayToSet($strSting = "")
	{
		$this->m_strSting = $strSting;
	}

	public function displaySetValue($strSting = "")
	{
		return $this->m_strSting;
	}
	
}