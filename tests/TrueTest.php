<?php
namespace Vita\CI\Tests;

class TrueTest extends \PHPUnit_Framework_TestCase
{

    public function testNeedFail()
    {
        $this->assertTrue(false);
    }
}
