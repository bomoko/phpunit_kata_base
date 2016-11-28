<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

  protected function setUp()
  {

  }

  /** @test */
  public function asserts_should_be_up_and_running()
  {
    $this->assertEquals(1, 1);
  }

}
