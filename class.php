<?php 
	class Game{
		public $name;
		public $genre;
		public $difficulty;

		function__construct($name, $genre, $difficulty){
			$this->name = $name;
			$this->genre = $genre;
			$this->difficulty = $difficulty;
		}

		function getName() {
			return "{$this­>name}";
		}
		function getGenre() {
			return "{$this­>genre}";
		}
		function getdifficulty() {
			return "{$this­>difficulty}";
		}

		
	}
 ?>