<?php
 // class Fruit{
 // 	public $name;
 // 	protected $color;
 // 	private $weight;
 // }
 // $mango = new Fruit();
 // $mango->name = "Mango";
 // $mango->color = "red";
 // $mango->weight = "300";

class Fruit{
	public $name;
	public $color;
	public $weight;

	public function set_name($n){
		$this->name = $n;
	}

	protected function set_color($o){
		$this->color = $o;
	}
	private function set_weight($p){
		$this->weight  = $p;
	}
}
$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("Red");
$apple->set_weight(2000);

?>