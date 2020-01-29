<?php


use Orchestra\Testbench\TestCase;

class Simple_Test extends TestCase {

    /**
     * @test
     * 
     */
    public function test_working_fine()
    {
        fwrite(STDOUT, "This is true assert");
        $this->assertTrue(true);
    }

}
