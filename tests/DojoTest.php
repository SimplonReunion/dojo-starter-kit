<?php
use SimplonReunion\Dojo;
/**
 * The test class for the starter class SimplonReunion/Dojo
 */
class DojoTest extends PHPUnit_Framework_TestCase
{

  public function testIsDojoGreat(){
    $dojo = new Dojo();

    $this->assertTrue($dojo->isDojo());
  }
}
