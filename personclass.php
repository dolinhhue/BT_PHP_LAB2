<?php
    class Person{
        private $name;
        private $nationalID;

        public function __construct($personName, $ID){
            $this ->name = strtolower($personName);
            $this ->nationalID = $ID;
        }

        public function getName(){
            return $this ->name;
        }
        public function SetName($newname){
            $this ->name = $newname;
        }
        public function GetNationalID(){
            return $this ->nationalID;
        }
    }
?>