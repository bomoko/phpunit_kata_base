<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

  /** @test */
  public function asserts_should_be_up_and_running()
  {
    $this->assertEquals(1, 1);
  }

}
