<?php
class MW_Mano
{
    
    private $atk;
    private $def;
    
    function __construct ()
    {
        
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
    
    private function getRandomBonus()
    {
        
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

    
    
    
}
?>