<?php

class MW_Battle
{

    /**
     * @var MW_Mano
     */
    private $manoA;
    
    /**
     * @var MW_Mano
     */
    private $manoB;
    
    public function __construct($manoA, $manoB)
    {
        $this->setManoA($manoA);
        $this->setManoB($manoB);
    
        $this->manoA->resetHealth();
        $this->manoB->resetHealth();
        
    }
    
    public function fight()
    {
        while($this->manoA->isAlive() && $this->manoB->isAlive()){
            echo $this->manoA->attack($this->manoB) . PHP_EOL;
        }
        
        if ($this->manoA->isAlive()){
            return $this->manoA->getName() . " won!" . PHP_EOL;
        }else{
            return $this->manoB->getName() . " won!" . PHP_EOL;
        }
        
    }
    
    
	/**
     * @param $manoB the $manoB to set
     */
    public function setManoB($manoB)
    {
        $this->manoB = $manoB;
    }

	/**
     * @param $manoA the $manoA to set
     */
    public function setManoA($manoA)
    {
        $this->manoA = $manoA;
    }

	/**
     * @return the $manoB
     */
    public function getManoB()
    {
        return $this->manoB;
    }

	/**
     * @return the $manoA
     */
    public function getManoA()
    {
        return $this->manoA;
    }
 
    
    
}

?>