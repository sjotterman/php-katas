<?php
use Kata\TimeUtils;

class TimeTest extends \Codeception\Test\Unit
{
    public function testCenturyFromYear()
    {
        $timeUtils = new TimeUtils();
        $this->assertEquals(18, $timeUtils->centuryFromYear(1705));
        $this->assertEquals(19, $timeUtils->centuryFromYear(1900));
        $this->assertEquals(17, $timeUtils->centuryFromYear(1601));
        $this->assertEquals(20, $timeUtils->centuryFromYear(2000));
    }
}

