<?php 
class ExampleTest extends PHPUnit_Framework_TestCase {
 /*
    public function testGreetings()
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }
	*/
	public function testAsercji()
	{
		$value = 10.99;
		$this->assertTrue(is_numeric($value), 'Opcjonalna wiadomo��');
	}
 
}