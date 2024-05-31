<?php

class Vegetable {
    public $edible;

    public $color;

    public function __construct($edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
    }

    public function isEdible()
    {
        
        return $this->edible;
        
    }

    public function getColor()
    {
        return $this->color;
    }
}


$carrotte = new Vegetable(true,"cgcfgfcx");
echo($carrotte->isEdible() ? "oui" : "non" );
echo($carrotte->getColor());

$salade = new Vegetable(true,"vert pale");
echo($salade->isEdible() ? "oui" : "non" );
echo($salade->getColor());




class Spinach extends Vegetable {
    public $cooked = false;

    public function __construct()
    {
        parent::__construct(true, "green");
    }

    public function cook()
    {
        $this->cooked = true;
    }

    public function isCooked()
    {
        return $this->cooked;
    }
}
$Spinach = new Spinach();
$Spinach->cook();
echo($Spinach->isCooked() ? "oui" : "non" );
?>