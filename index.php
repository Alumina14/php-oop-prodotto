<?php

class Computer {

  public $cpu;
  public $ram;
  public $mobo;

  function __construct($cpu, $ram, $mobo){

    $this -> cpu = $cpu;
    $this -> ram = $ram;
    $this -> mobo = $mobo;

  }

  public function printMe(){

    echo "Caratteristiche pc: " . "<br>" . "Cpu: " .  $this -> cpu . "<br>" . "Ram: " . $this -> ram . "<br>" . "Motherboard: " . $this -> mobo;

  }


}

  $pc1 = new Computer("Intel", 16, "Asus");
  $pc1 -> cpu;
  $pc1 -> ram;
  $pc1 -> mobo;
  $pc1 -> printMe();





 ?>
