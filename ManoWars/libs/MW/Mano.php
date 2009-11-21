<?php
class MW_Mano
{
    private $name;
    private $atk;
    private $def;
    private $health;
    
    function __construct ($name)
    {
        $this->setName($name);
        $this->resetHealth();
    }
    
    public function attack(MW_Mano $victim)
    {
        $atk = $this->getAtk() + trim(file_get_contents('http://www.random.org/integers/?num=1&min=1&max=10&col=1&base=10&format=plain&rnd=new'));;
        $def = $victim->defend();
        
        $dmgMultiplier = trim(file_get_contents('http://www.random.org/integers/?num=1&min=1&max=10&col=1&base=10&format=plain&rnd=new'))/10;
        
        if ($atk > $def){
            $dmg = round($atk * $dmgMultiplier);
            $victim->hurt( $dmg );
            $action = "%s did %d damage on %s";
        }else{
            $dmg = round($def * $dmgMultiplier);
            $this->hurt( $dmg );
            $action = "%s took %d damage from %s";
            
        }
        
        return sprintf($action, $this->getName(), $dmg, $victim->getName());
    }
    
    public function defend()
    {
        return $this->getDef() + trim(file_get_contents('http://www.random.org/integers/?num=1&min=1&max=10&col=1&base=10&format=plain&rnd=new'));
    }
    
    public function resetHealth()
    {
        $this->health = 100;
    }
    
    public function hurt($damage)
    {
        $this->health = $this->health - $damage;
    }
    
    public function isAlive()
    {
        return ($this->health > 0);
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
    
    public function getHealth()
    {
        return $this->health;
    }
}
?>