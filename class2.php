<?php
class Apple{
	 public $name;
	public $color;

	public function set_name($name){
		$this->name = $name;
	}
	public function get_name(){
		return $this->name;
	}

}

$fruit = new Apple();
$fruit->set_name("PineApple");
echo $fruit->get_name();
// instanceof
// Check value if belog a class or not;
var_dump($fruit instanceof Apple);
 
?>