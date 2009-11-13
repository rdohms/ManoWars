<?php
class MW_Mano
{
    private $name;
    private $atk;
    private $def;
    
    private $output;
    
    function __construct ($name)
    {
        $this->output = new MW_Output();
        
        $this->setName($name);
        $this->output->output("Mano ".$name. " pronto para batalha!");
    }
    
    
    public function attack(MW_Mano $victim)
    {
        $atk = $this->getAtk() + $this->getRandomBonus();
        if ($atk > $victim->defend()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function defend()
    {
        return $this->getDef() + $this->getRandomBonus();
    }
    
    public function getRandomBonus()
    {
        return trim(file_get_contents('http://www.random.org/integers/?num=1&min=1&max=10&col=1&base=10&format=plain&rnd=new'));
    }
    
	/**
     * @param $def the $def to set
     */
    public function setDef($def)
    {
        $this->def = $def;
    }

	/**
     * @param $atk the $atk to set
     */
    public function setAtk($atk)
    {
        $this->atk = $atk;
    }
	/**
     * @param $name the $name to set
     */
    public function setName($name)
    {
        $this->name = $name;
    }

	/**
     * @return the $name
     */
    public function getName()
    {
        return $this->name;
    }

	/**
     * @return the $def
     */
    public function getDef()
    {
        return $this->def;
    }

	/**
     * @return the $atk
     */
    public function getAtk()
    {
        return $this->atk;
    }
    
	/**
     * @param $output the $output to set
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

	/**
     * @return the $output
     */
    public function getOutput()
    {
        return $this->output;
    }


    
    
    
}
?>