<?php
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
    protected function setUp()
    {
        parent::setUp();
        
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated MW_ManoTest::tearDown()
        $this->MW_Mano = null;
        parent::tearDown();
    }

    /**
     * Tests MW_Mano->__construct()
     */
    public function testConstruct()
    {
        $this->MW_Mano = new MW_Mano('Gil');
        
        $this->assertType('MW_Mano', $this->MW_Mano);
    }

    /**
     * Tests MW_Mano->defend()
     */
    public function testDefend()
    {
        $this->MW_Mano = new MW_Mano('Gil');
        $this->MW_Mano->setDef(5);
        
        $this->assertEquals(5, $this->MW_Mano->getDef());
        
        $sgth = $this->MW_Mano->defend();
        
        $this->assertGreaterThanOrEqual(5, $sgth);
        
    }
    
    /**
     * Tests MW_Mano->attack()
     * 
     * Remove random luck bonus and puts Manos head to head
     */
    public function testDefendWithoutLuck()
    {
        //Obter Mock
        $manoMock = $this->getMock('MW_Mano',array('getRandomBonus'), array('John'));
        //Definir que o objeto retorne zero.
        $manoMock->expects($this->any())
                 ->method('getRandomBonus')
                 ->will($this->returnValue(0));
        
        //Definir defesa
        $manoMock->setDef(5);
                 
        //Verificar que defesa nao se altera
        $this->assertEquals(5, $manoMock->defend());
    }
    
    /**
     * Tests MW_Mano->attack()
     * 
     * @dataProvider provideForAttack
     */
    public function testAttack($atk, $def, $expectedResult)
    {
        //Vitima
        //Obter Mock
        $victMock = $this->getMock('MW_Mano',array('defend'), array('John'));
        //Definir que o objeto retorne zero.
        $victMock->expects($this->any())
                 ->method('defend')
                 ->will($this->returnValue($def));

                 
         //Atacante
        //Obter Mock
        $manoMock = $this->getMock('MW_Mano',array('getRandomBonus'), array('Gil'));
        //Definir que o objeto retorne zero.
        $manoMock->expects($this->any())
                 ->method('getRandomBonus')
                 ->will($this->returnValue(0));
        $manoMock->setAtk($atk);
         
         $this->assertEquals($expectedResult, $manoMock->attack($victMock));
    }
    
    public function provideForAttack()
    {
        return array(
            array(5, 10, false),
            array(15, 10, true),
            array(5, 5, false),
        );
    }
}

