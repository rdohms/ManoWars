<?php

class MW_Battle
{

    private $manoA;
    private $manoB;
    private $rounds = 3;
    
    public function __construct($manoA, $manoB)
    {
        $this->setManoA($manoA);
        $this->setManoB($manoB);
    
    }
    
    public function fight()
    {
        
    }
    
    private function round()
    {
        
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
     * @param $rounds the $rounds to set
     */
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }

	/**
     * @return the $rounds
     */
    public function getRounds()
    {
        return $this->rounds;
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