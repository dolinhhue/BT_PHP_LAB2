<?php

class Person{
    
    private $name;
    private $nationID;

    public function __construct($personName,$ID)
    {
        $this->name=strtolower($personName);
        $this->nationID=$ID;
    }

    public function GetName(){
        return $this->name;
    }
    public function SetName($newName){
        $this->name=strtoupper($newName);
    }
    public function GetNationID(){
        return $this->nationID;
    }
}
?>
