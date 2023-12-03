<?php
interface person_interface{
    public function setName($_set_name);
    public function getName() : string;
}
class person_implement implements person_interface{
    public $name;
    public function setName($_set_name){
        $this->name = $_set_name;
    }
    public function getName() : string{
        return $this->name;
    }
}
//////////////////////////////
$_Obj = new person('John', '18');
echo ("Simple class:".$_Obj->getName()."");
echo ('<br>');
$_Obj_extend = new person_extend('John', '18');
echo ("Extend Class:".$_Obj_extend->getName()."");
echo ('<br>');
echo ("Extend Class:".$_Obj_extend->getAge()."");
echo ('<br>');
$_Obj_implement =new person_implement();
$_Obj_implement->setName('John');
echo ("Interface Class:".$_Obj_implement->getName()."");
//////////////////////////////
class person{
    public $name;
    public function __construct($_set_name){
        $this->name = $_set_name;
    }
    public function getName(){
        return $this->name;
    }
}

class person_extend extends person{
    public $age;
    public function __construct($_set_name, $_set_age){
        parent::__construct($_set_name);
        $this->age = $_set_age;
    }
    public function getAge(){
        return $this->age;
    }
}



?>