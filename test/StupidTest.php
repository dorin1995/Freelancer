<?php
namespace phpUnitTutorial\Test;
class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
    
    public function testHTML()
    {
        $htmlOutput='<p id="my_id">ciao</p>';
        $matcher=array('id'=>'my_id');
        $this>assertTag($matcher,$htmlOutput);    
    }
}
