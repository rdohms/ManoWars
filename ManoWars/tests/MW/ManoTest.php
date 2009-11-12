<?php
require_once 'ManoWars/MW/Mano.php';
require_once 'PHPUnit/Framework/TestCase.php';
/**
 * MW_Mano test case.
 */
class MW_ManoTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var MW_Mano
     */
    private $MW_Mano;
    /**
     * Prepares the environment before running a test.
     */
    protected function setUp ()
    {
        parent::setUp();
        // TODO Auto-generated MW_ManoTest::setUp()
        $this->MW_Mano = new MW_Mano(/* parameters */);
    }
    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown ()
    {
        // TODO Auto-generated MW_ManoTest::tearDown()
        $this->MW_Mano = null;
        parent::tearDown();
    }
    /**
     * Constructs the test case.
     */
    public function __construct ()
    {    // TODO Auto-generated constructor
    }
    /**
     * Tests MW_Mano->__construct()
     */
    public function test__construct ()
    {
        // TODO Auto-generated MW_ManoTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");
        $this->MW_Mano->__construct(/* parameters */);
    }
    /**
     * Tests MW_Mano->attack()
     */
    public function testAttack ()
    {
        // TODO Auto-generated MW_ManoTest->testAttack()
        $this->markTestIncomplete("attack test not implemented");
        $this->MW_Mano->attack(/* parameters */);
    }
    /**
     * Tests MW_Mano->defend()
     */
    public function testDefend ()
    {
        // TODO Auto-generated MW_ManoTest->testDefend()
        $this->markTestIncomplete("defend test not implemented");
        $this->MW_Mano->defend(/* parameters */);
    }
}

