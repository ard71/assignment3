<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		function __construct($name, $breed, $index){
			parent::__construct($name, $breed, $index);
		}
		
		function __toString(){
			return parent:: __toString();
		}
		
		public function setPuppy(){
			$puppies = array("French Bulldog",
			"Pug",
			"Pitbull",
			"English Bulldog",
			"Boston Terrier",
			"Weimaraner",
			"Pomeranian",
			"English Staffordshire Terrier",
			"Boxer",
			"Irish Wolfhound",
			"Russian Wolfhound",
			"Whippet",
			"Cavalier King Charles Spaniel",
			"Chinese Crested");
			$rand = mt_rand(0, (sizeof($puppies)-1));
			$randPup = $puppies[$rand];
			$this->setBreed($randPup,$rand);
		}
	}
