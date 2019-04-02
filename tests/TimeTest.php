<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Time.php';


class TimeTest extends TestCase
{
	public function testCurrTime()
	{
		$ts = 1554217615;
		$time = new Time($ts);
		$this->assertEquals($ts, $time->getCurrTime());
	}

}
