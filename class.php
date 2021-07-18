<?php
class Car{
	public $name;
	public $color;
	
	public function set_name($name){
		$this->name = $name;
	}
	
	public function get_name(){
		return $this->name;
	}

	public function set_color($color){
		$this->color = $color;
	}
	public function get_color(){
		 return $this->color;
	}
}

$car = new Car();
$car->set_name("Suzuki");
$car->set_color("Blue");
echo $car->get_color();
echo $car->get_name();




?>