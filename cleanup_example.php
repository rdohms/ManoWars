<?php
/**
 * MW_Mano test case.
 */
class CleanUpTest extends PHPUnit_Framework_TestCase
{
    private $file = "/tmp/file";

    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        unlink($this->file);
        parent::tearDown();
    }

    public function testFile()
    {
        file_put_contents($this->file);
    }