<?php
/**
 * Octopus Search Test
 *
 */
class SearchTest extends PHPUnit_Framework_TestCase
{
  public function testCreateObjectWithParameter()
  {
    $obj = new Radiergummi\Octopus\Search('foo');
    
    $this->assertInstanceOf('Radiergummi\Octopus\Search', $obj);
  }
  
  public function testCreateObjectWithoutParameter()
  {
    $this->setExpectedException('\InvalidArgumentException');

    $obj = new Radiergummi\Octopus\Search();
  }
}
