<?php


class Animal
{
	protected $info = ['animal_name' => '', 'kind' => '', 'kind_eats' => ''];
	function __construct($animalName, $kind, $kind_eats)
	{
       if (isset($animalName, $kind, $kind_eats)) {
           
           $this -> info['animal_name'] = $animalName;
       	   $this -> info['kind'] = $kind;
       	   $this -> info['kind_eats'] = $kind_eats;

       }else{
       	   echo "Enter all info! <br>";
       }
	}

	public function set_color($color){
        if (isset($color)) {
        	$this -> info['color'] = $color;
        }else{
        	echo "Enter color! <br>";
        }
	}
	public function get_info(){
        foreach ($this -> info as $key => $value) {
        	echo "$key : $value <br>";
        }
        echo "<br>";
	}

}

class Mammals extends Animal
{
	protected $info = ['blood' => ''];
	function __construct($animalName, $kind_eats, $blood)
	{
	   $this -> info['kind'] = 'mammals';

       if (isset($animalName, $kind_eats, $blood)) {
           
           $this -> info['animal_name'] = $animalName;
       	   $this -> info['kind_eats'] = $kind_eats;
       	   $this -> info['blood'] = $blood;

       }else{
       	   echo "Enter all info! <br>";
       }
	}

}

class Cats extends Mammals
{
	protected $info = ['name' => '', 
	                   'breed' => '', 
	                   'character' => '', 
	                   'mood' => 100, 
	                   'fatigue' => 100, 
	                   'hunger' => 100,
	                   'thirst' => 100
	                  ];
	function __construct($name, $breed, $character)
	{
        $this -> info['animal_name'] = 'cat';
        $this -> info['kind'] = 'mammals';
    	  $this -> info['kind_eats'] = 'omnivorous';
       	$this -> info['blood'] = 'warm-blooded';
       	if (isset($name, $breed, $character)) {
       	     $this -> info['name'] = $name;
             $this -> info['breed'] = $breed;
        	   $this -> info['character'] = $character;
       	}else{
       	     echo "Enter all info! <br>";
       }
	}

	public function check_state(){
		echo "INFO OF STATE YOUR CAT <br>";
		foreach ($this -> info as $key => $value) {
			if ($key == 'mood') {
				if ($value >= 0 && $value <= 10) {
					echo "Your cat is so sad, play with him, please! <br>";
				}
				elseif ($value > 10 && $value <= 60) {
					echo "Your cat is happy! :) <br>";
				}
				elseif ($value > 60) {
					echo "Your cat love you! Your a greate owner! <br>";
				}
			    elseif ($value < 0) {
					echo "Your cat is dying of boredom! Play with him, please! <br>";
				}
			}
			elseif ($key == 'fatigue') {
				if ($value == 0 && $value <= 10) {
					echo "Your cat is tired... <br>";
				}
				elseif ($value > 10 && $value <= 60) {
					echo "Your cat looks cheerful! <br>";
				}
				elseif ($value > 60) {
					echo "Your cat is full of strength and energy! <br>";
				}
			    elseif ($value < 0) {
					echo "Your cat is soooo tired... <br>";
				}
			}
			elseif ($key == 'hunger') {
				if ($value == 0 && $value <= 10) {
					echo "Your cat is so hangry, feed him, please! <br>";
				}
				elseif ($value > 10 && $value <= 60) {
					echo "Your cat is not hungry! <br>";
				}
				elseif ($value > 60) {
					echo "Your cat is overeating! <br>";
				}
			    elseif ($value < 0) {
					echo "Your cat is starving! <br>";
				}
			}
			elseif ($key == 'thirst') {
				if ($value == 0 && $value <= 10) {
					echo "Your very want drink wather... <br>";
				}
				elseif ($value > 10) {
					echo "Your cat is not thirsty <br>";
				}
			    elseif ($value < 0) {
					echo "Your cat is dying of thirsty! <br>";
				}
			}
		}
	}
	public function play_with_cat($time){ //time in mitutes(60 max)
       if ($time >= 10 && $time <= 20) {
       	  echo "-Cat happy play with you!) <br><br>";
       	     $this -> info['mood'] += 10;
             $this -> info['fatigue'] -= 10;
        	 $this -> info['hunger'] -= 10;      
        	 $this -> info['thirst'] -= 10;       	   	  
       }
       elseif ($time < 10) {
       	echo "-Cat want more play then $time minutes! <br><br>";
       }
       else{
       	  echo "-Cat very happy play with you!) <br><br>";
       	     $this -> info['mood'] += 20;
             $this -> info['fatigue'] -= 20;
        	 $this -> info['hunger'] -= 20;      
        	 $this -> info['thirst'] -= 20;        	    
       }
       // $this -> ckeck_state();
	}
	public function give_a_rest($time){ //time in mitutes(60 max)
       if ($time >= 10 && $time <= 20) {
       	  echo "-Cat good is resting !) <br><br>";
       	     $this -> info['mood'] -= 10;
             $this -> info['fatigue'] += 10;
        	 $this -> info['hunger'] -= 10;      
        	 $this -> info['thirst'] -= 10;       	   	  
       }
       elseif ($time < 10) {
       	echo "+Cat want more rest then $time minutes! <br><br>";
       }
       else{
       	  echo "-Cat very happy and good rested!) <br><br>";
       	     $this -> info['mood'] -= 20;
             $this -> info['fatigue'] += 20;
        	   $this -> info['hunger'] -= 20;      
        	   $this -> info['thirst'] -= 20;        	    
       }
       // $this -> ckeck_state();
	}
	public function feed($eats){ //time in mitutes(60 max)
       if ($eats >= 10 && $eats <= 20) {
       	  echo "-Cat has good eat!) <br><br>";
       	     $this -> info['mood'] += 10;
             $this -> info['fatigue'] -= 10;
        	   $this -> info['hunger'] += 10;      
        	   $this -> info['thirst'] -= 10;       	   	  
       }
       elseif ($eats < 10) {
       	echo "-For cat is a pice of eat! It is not a full eat! <br><br>";
       }
       else{
       	  echo "-Cat very happy after goo eats!) <br><br>";
       	     $this -> info['mood'] += 20;
             $this -> info['fatigue'] -= 20;
        	   $this -> info['hunger'] += 20;      
        	   $this -> info['thirst'] -= 20;        	    
       }
       // $this -> ckeck_state();
	}
	public function give_wather($wather){ //time in mitutes(60 max)
       if ($wather <= 10) {
       	  echo "-May be more wather for your cat?!) <br><br>";
       	     $this -> info['mood'] += 10;
        	   $this -> info['hunger'] += 1;      
        	   $this -> info['thirst'] += 10;       	   	  
       }
       elseif ($wather < 10) {
       	echo "-Are you even greedy for water? <br><br>";
       }
       else{
       	  echo "-Your perfectly quenched your thirst!) <br><br>";
       	     $this -> info['mood'] += 20;
        	   $this -> info['hunger'] += 1;      
        	   $this -> info['thirst'] -= 20;        	    
       }
       // $this -> ckeck_state();
	}
}
$fish = new Animal('Carp', 'fish', 'omnivorous');
$fish -> get_info();

$dog = new Mammals('Cherchel', 'omnivorous', 'warm-blooded');
$dog -> set_color('white');
$dog -> get_info();

$cat = new Cats('Kshusha', 'whiskas', 'playful');
$cat -> set_color('black');
$cat -> get_info();
$cat -> play_with_cat(15);
$cat -> give_a_rest(15);
$cat -> feed(15);
$cat -> give_wather(15);
$cat -> check_state(15);

?>