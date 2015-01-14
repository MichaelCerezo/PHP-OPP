<?php 
// /* Lecture 1 */
// 	//----------------------------------------------------------------------------------------
// 	// Example 1
// 	//----------------------------------------------------------------------------------------
// 	class car{
// 		//class body
// 		//class body
// 		//class body
// 	}
// 	class house{
// 		//class body
// 		//class body
// 		//class body
// 	}
// 	class food{
// 		//class body
// 		//class body
// 		//class body
// 	}

// 	//-----------------------------------------------------------------------------------------
// 	// Example 2
// 	//-----------------------------------------------------------------------------------------
// 	$car1 = new car();
// 	$car2 = new car();

// 	$house1 = new house();
// 	$house2 = new house();

// 	$food1 = new food();
// 	$food2 = new food();

// 	//-----------------------------------------------------------------------------------------
// 	// Example 3 
// 	//-----------------------------------------------------------------------------------------
//  	class car{
// 		public $name = "default name";
// 		public $type = "toyota";
// 		public $doors = "4";
// 		public $price = "700";	
// 	}
// 	class house{
// 		public $name = "default name";
// 		public $type = "apartments";
// 		public $floors = "2";
// 		public $price = "1500";
// 	}
// 	class food{
// 		public $name = "default name";
// 		public $type = "Mexican";
// 		public $dish = "tacos";
// 		public $price = "1.50";
// 	}

// 	//-----------------------------------------------------------------------------------------
// 	// Example 4 
// 	//-----------------------------------------------------------------------------------------
// 	$car1 = new Car();
// 	print $car1->type;
// 	// default type

// 	$house1 = new House();
// 	print $house1->type;
// 	// default type

// 	$food1 = new Food();
// 	print $Food1->type;
// 	// default type

// 	//-----------------------------------------------------------------------------------------
// 	// Example 5
// 	//-----------------------------------------------------------------------------------------
// 	public function Method( $argument1, $argument2){
// 		// body
// 		// body
// 		// body
// 	}
// 	public function Method2( $argument1, $argument2){
// 		// body
// 		// body
// 		// body
// 	}
// 	public function Method3( $argument1, $argument2){
// 		// body
// 		// body
// 		// body
// 	}

// 	//-----------------------------------------------------------------------------------------
// 	// Example 6
// 	//-----------------------------------------------------------------------------------------
// 	class car{
// 		public $name = "default name";
// 		public $type = "default type";
// 		public $year = "2014";
// 		public $price = "700";	
// 		function getCar(){
// 			return "{$this->name}" . "{this->type}";
// 		}
// 	}
// 	$car1 = new Car();
// 	$car1->brand = "honda";
// 	$car1->type = "civic";
// 	print "This car is a {$car1->Car()}";
	
// 	class house{
// 		public $name = "default name";
// 		public $type = "default type";
// 		public $floors = "2";
// 		public $price = "1500";
// 		function getHouse(){
// 			return "{$this->name}" . "{this->type}";
// 		}
// 	}
// 	$house1 = new House();
// 	$house1->name = "apartment";
// 	$house1->type = "big";
// 	print "This house is a {$house1->House()}";
	
// 	class food{
// 		public $name = "default name";
// 		public $type = "default type";
// 		public $dish = "tacos";
// 		public $price = "1.50";
// 		function getFood(){
// 			return "{$this->name}" . "{this->type}";
// 		}
// 	}
// 	$food1 = new Food();
// 	$food1->name = "taco";
// 	$food1->type = "good";
// 	print "This food is a {$food1->Food()}";
 
/* Lecture 4 */
		class School {
		public $name;
		public $type;
		public $mascot;

		function __construct($name, $type, $mascot){
			$this->name = $name;
			$this->type = $type;
			$this->mascot = $mascot;
		}

		function getName(){
			return "I attend" .$this->name .
			"it's a" .$this->type;
		}
	}
	class Mascot{
		function greet(){
			return $this->mascot;
		}
	}

	$name = new name("PHS", "Highschool", "Bulldogs");
	print "I attend" .$name->getName();
 ?>