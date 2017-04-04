<?php
	// This is the file for the parent class

	class ParentClass {
		protected $fName;
		protected $breed;
		protected $index;
		
		public function __construct($name, $breed, $index){
			$this->fName = $name;
			$this->breed = $breed;
			$this->index = $index;
		}
		
		public function setName($name){
			$this->fName = $name;
		}
		
		public function getName(){
			return $this->fName;
		}
		
		public function setBreed($breed, $index){
			$this->breed = $breed;
			$this->index = $index;
		}
		
		public function getBreed(){
			return $this->breed;
		}
		
		public function getIndex(){
			return $this->index;
		}
		
		public function __toString(){
			$puppyName = "Meet " . $this->getName() . " the " . $this->getBreed() . "!\n";
			return $puppyName;
		}
	}
?>
